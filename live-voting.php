<?php

declare(strict_types=1);

require __DIR__ . '/voting_store.php';

$pdo = votingPdo();
$contestants = contestantsWithVotes($pdo);
$flash = $_GET['status'] ?? '';
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Live Abstimmung</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main class="container">
      <section class="card">
        <h1>🗳️ Live Abstimmung</h1>
        <p class="hint">Die Seite aktualisiert sich alle 20 Sekunden automatisch.</p>
        <p><a class="stage-link" href="admin.php">Zum Adminbereich</a> <a class="stage-link" href="index.php">Zur Startseite</a></p>
      </section>

      <?php if ($flash === 'voted'): ?>
        <section class="card"><p class="message">✅ Deine Stimme wurde gespeichert.</p></section>
      <?php endif; ?>

      <section class="card">
        <?php if (!$contestants): ?>
          <p>Noch keine Einträge vorhanden. Bitte zuerst im Adminbereich anlegen.</p>
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
                    <td><strong><?= (int) $row['vote_count'] ?></strong></td>
                    <td>
                      <form method="post" action="vote.php" class="inline-form">
                        <input type="hidden" name="contestant_id" value="<?= (int) $row['id'] ?>" />
                        <input type="text" name="voter_name" placeholder="Dein Name (optional)" maxlength="80" />
                        <button type="submit">Stimme abgeben</button>
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
    <script>
      setTimeout(() => window.location.reload(), 20000);
    </script>
  </body>
</html>
