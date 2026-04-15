<?php

declare(strict_types=1);

session_start();
require __DIR__ . '/voting_store.php';

const ADMIN_USER = 'admin';
const ADMIN_PASSWORD = 'admin123';

$pdo = votingPdo();
$error = '';

if (isset($_POST['logout'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: admin.php');
    exit;
}

if (!($_SESSION['admin_logged_in'] ?? false)) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
        $username = trim((string) $_POST['username']);
        $password = (string) $_POST['password'];

        if ($username === ADMIN_USER && $password === ADMIN_PASSWORD) {
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin.php');
            exit;
        }

        $error = 'Login fehlgeschlagen. Bitte prüfe Benutzername und Passwort.';
    }

    ?>
    <!doctype html>
    <html lang="de">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Login</title>
        <link rel="stylesheet" href="styles.css" />
      </head>
      <body>
        <main class="container">
          <section class="card">
            <h1>🔐 Adminbereich Login</h1>
            <p class="hint">Standard-Zugang: admin / admin123 (bitte später ändern).</p>
            <?php if ($error !== ''): ?>
              <p class="message" style="color:#ffbdbd"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
            <form method="post">
              <label>Benutzername
                <input type="text" name="username" required />
              </label>
              <label>Passwort
                <input type="password" name="password" required />
              </label>
              <button type="submit">Einloggen</button>
            </form>
            <p><a class="stage-link" href="live-voting.php">Zur Live-Abstimmung</a></p>
          </section>
        </main>
      </body>
    </html>
    <?php
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    $lfdNr = (int) ($_POST['lfd_nr'] ?? 0);
    $smuleName = trim((string) ($_POST['smule_name'] ?? ''));
    $smuleLink = trim((string) ($_POST['smule_link'] ?? ''));
    $titel = trim((string) ($_POST['titel'] ?? ''));

    if ($lfdNr > 0 && $smuleName !== '' && $smuleLink !== '' && $titel !== '') {
        $insert = $pdo->prepare(
            'INSERT INTO contestants (lfd_nr, smule_name, smule_link, titel) VALUES (:lfd_nr, :smule_name, :smule_link, :titel)'
        );
        $insert->execute([
            'lfd_nr' => $lfdNr,
            'smule_name' => mb_substr($smuleName, 0, 140),
            'smule_link' => mb_substr($smuleLink, 0, 255),
            'titel' => mb_substr($titel, 0, 140),
        ]);
    }

    header('Location: admin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $id = (int) ($_POST['id'] ?? 0);
    if ($id > 0) {
        $delete = $pdo->prepare('DELETE FROM contestants WHERE id = :id');
        $delete->execute(['id' => $id]);
    }

    header('Location: admin.php');
    exit;
}

$contestants = contestantsWithVotes($pdo);
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adminbereich Live Abstimmung</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main class="container">
      <section class="card">
        <h1>⚙️ Adminbereich – Live Abstimmung</h1>
        <p>
          <a class="stage-link" href="live-voting.php">Zur Live-Abstimmung</a>
          <a class="stage-link" href="index.php">Zur Startseite</a>
        </p>
        <form method="post" class="inline-form">
          <input type="hidden" name="logout" value="1" />
          <button type="submit">Logout</button>
        </form>
      </section>

      <section class="card">
        <h2>Neuen Beitrag hinzufügen</h2>
        <form method="post">
          <input type="hidden" name="action" value="create" />
          <label>Lfd. Nr.
            <input type="number" min="1" name="lfd_nr" required />
          </label>
          <label>Smule Name
            <input type="text" maxlength="140" name="smule_name" required />
          </label>
          <label>Smule Link
            <input type="url" maxlength="255" name="smule_link" required />
          </label>
          <label>Titel
            <input type="text" maxlength="140" name="titel" required />
          </label>
          <button type="submit">Eintrag speichern</button>
        </form>
      </section>

      <section class="card">
        <h2>Aktuelle Einträge</h2>
        <?php if (!$contestants): ?>
          <p>Noch keine Einträge vorhanden.</p>
        <?php else: ?>
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Lfd. Nr.</th>
                  <th>Smule Name</th>
                  <th>Titel</th>
                  <th>Link</th>
                  <th>Stimmen</th>
                  <th>Aktion</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($contestants as $row): ?>
                  <tr>
                    <td><?= (int) $row['lfd_nr'] ?></td>
                    <td><?= htmlspecialchars($row['smule_name']) ?></td>
                    <td><?= htmlspecialchars($row['titel']) ?></td>
                    <td><a href="<?= htmlspecialchars($row['smule_link']) ?>" target="_blank" rel="noopener">Smule öffnen</a></td>
                    <td><?= (int) $row['vote_count'] ?></td>
                    <td>
                      <form method="post" onsubmit="return confirm('Eintrag wirklich löschen?');">
                        <input type="hidden" name="action" value="delete" />
                        <input type="hidden" name="id" value="<?= (int) $row['id'] ?>" />
                        <button type="submit">Löschen</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </section>
    </main>
  </body>
</html>
