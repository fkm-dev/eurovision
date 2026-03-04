<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ESC 2026 – Erstes Halbfinale (12. Mai 2026)</title>
  <style>
    :root{
      --bg:#0b0c10;
      --card:#11131a;
      --text:#e8eaf0;
      --muted:#a9afc3;
      --line:#23283a;
      --accent:#7c5cff;
      --accent2:#27d3a2;
      --warn:#ffcc66;
      --radius:16px;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Apple Color Emoji","Segoe UI Emoji";
      background: radial-gradient(1200px 700px at 20% -10%, rgba(124,92,255,.25), transparent 60%),
                  radial-gradient(900px 600px at 90% 10%, rgba(39,211,162,.18), transparent 55%),
                  var(--bg);
      color:var(--text);
    }
    a{color:inherit; text-decoration:none}
    .wrap{max-width:1200px; margin:0 auto; padding:28px 18px 64px}
    header{
      display:flex; gap:14px; align-items:flex-start; justify-content:space-between; flex-wrap:wrap;
      padding:18px; border:1px solid var(--line); background:rgba(17,19,26,.72);
      border-radius:var(--radius); backdrop-filter: blur(10px);
    }
    .title h1{margin:0 0 6px; font-size:22px; letter-spacing:.2px}
    .title p{margin:0; color:var(--muted); line-height:1.35}
    .chips{display:flex; gap:10px; flex-wrap:wrap; align-items:center}
    .chip{
      border:1px solid var(--line); background:rgba(255,255,255,.03);
      padding:8px 10px; border-radius:999px; font-size:13px; color:var(--muted)
    }
    .chip b{color:var(--text); font-weight:650}
    nav{
      margin-top:14px;
      display:flex; gap:10px; flex-wrap:wrap;
    }
    .navbtn{
      display:inline-flex; align-items:center; gap:8px;
      padding:10px 12px; border-radius:999px;
      border:1px solid var(--line);
      background:rgba(255,255,255,.03);
      color:var(--text);
      font-size:14px;
    }
    .navbtn.active{border-color:rgba(124,92,255,.65); box-shadow:0 0 0 3px rgba(124,92,255,.14) inset}
    .bar{
      margin:18px 0 14px;
      display:flex; gap:12px; flex-wrap:wrap; align-items:center; justify-content:space-between;
    }
    .search{
      flex:1 1 320px; min-width:260px;
      display:flex; align-items:center; gap:10px;
      padding:12px 12px;
      border-radius:14px;
      border:1px solid var(--line);
      background:rgba(17,19,26,.72);
    }
    .search input{
      width:100%;
      background:transparent; border:none; outline:none;
      color:var(--text); font-size:14px;
    }
    .hint{color:var(--muted); font-size:13px}
    .card{
      border:1px solid var(--line);
      background:rgba(17,19,26,.72);
      border-radius:var(--radius);
      overflow:hidden;
    }
    .tablewrap{overflow:auto; -webkit-overflow-scrolling:touch}
    table{border-collapse:separate; border-spacing:0; width:100%; min-width:980px}
    thead th{
      position:sticky; top:0; z-index:2;
      background:linear-gradient(to bottom, rgba(17,19,26,.98), rgba(17,19,26,.86));
      border-bottom:1px solid var(--line);
      text-align:left; font-weight:650; font-size:13px;
      padding:12px 12px;
      color:var(--text);
      white-space:nowrap;
    }
    tbody td{
      border-bottom:1px solid rgba(35,40,58,.7);
      padding:12px 12px;
      vertical-align:top;
      font-size:14px;
      color:var(--text);
    }
    tbody tr:hover td{background:rgba(124,92,255,.06)}
    .muted{color:var(--muted)}
    .pill{
      display:inline-flex; gap:8px; align-items:center;
      padding:6px 10px; border-radius:999px;
      border:1px solid rgba(255,255,255,.08);
      background:rgba(255,255,255,.03);
      font-size:12px; color:var(--muted)
    }
    .half{
      font-weight:650; color:var(--text);
    }
    .note{
      margin-top:14px;
      padding:14px 16px;
      border:1px dashed rgba(255,255,255,.18);
      border-radius:14px;
      background:rgba(255,255,255,.03);
      color:var(--muted);
      line-height:1.45;
      font-size:13px;
    }
    .kicker{
      display:flex; gap:10px; flex-wrap:wrap; margin-top:12px
    }
    .kicker .pill b{color:var(--text)}
    footer{margin-top:18px; color:var(--muted); font-size:12px}
    .small{font-size:12px}

    .tipcard {
      margin-top: 16px;
      padding: 16px;
    }
    .tipgrid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
      gap: 10px;
      margin: 12px 0;
    }
    .tipgrid label {
      display: flex;
      align-items: center;
      gap: 8px;
      border: 1px solid var(--line);
      border-radius: 10px;
      padding: 8px 10px;
      background: rgba(255,255,255,.02);
      cursor: pointer;
    }
    .controls {
      display:flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
      margin-top: 8px;
    }
    input[type="text"] {
      border:1px solid var(--line);
      border-radius:10px;
      background:rgba(255,255,255,.02);
      color:var(--text);
      padding:10px 12px;
      min-width:220px;
    }
    button {
      border:1px solid rgba(124,92,255,.65);
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      color:#081018;
      font-weight:700;
      border-radius:10px;
      padding:10px 14px;
      cursor:pointer;
    }
    .message { margin-top: 10px; color: var(--warn); min-height: 1.2em; }
    .lists { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:14px; margin-top:14px; }
  </style>
</head>

<body>
  <div class="wrap">
    <header>
      <div class="title">
        <h1>Eurovision Song Contest 2026 – Erstes Halbfinale</h1>
        <p>
          <span class="muted">Dienstag,</span> <b>12. Mai 2026</b> · <b>21:00 Uhr (MESZ)</b> · Wien<br/>
          Abstimmungsberechtigt: <b>Deutschland</b> &amp; <b>Italien</b> (plus „Rest of the World“ Online-Voting)
        </p>
        <div class="kicker">
          <span class="pill">🗳️ <b>Voting:</b> Televoting + ROTW</span>
          <span class="pill">🎟️ <b>Qualifikation:</b> Top 10 ins Finale</span>
        </div>
      </div>
      <div class="chips">
        <span class="chip"><b>15</b> Länder</span>
        <span class="chip"><b>2</b> Hälften</span>
        <span class="chip"><b>Stand:</b> März 2026</span>
      </div>

      <nav aria-label="Seiten">
        <a class="navbtn active" href="halbfinale.php">▶ Halbfinale 1</a>
        <a class="navbtn" href="halbfinale-2.php">Halbfinale 2</a>
        <a class="navbtn" href="finale.php">Finale</a>
      </nav>
    </header>

    <section class="card tipcard">
      <h2>🎯 Qualifikations-Tipp (Top 10)</h2>
      <p class="muted">Wähle genau 10 Länder aus, die deiner Meinung nach ins Finale einziehen.</p>
      <form id="tip-form">
        <div class="controls">
          <input id="username" name="username" type="text" placeholder="Dein Name" required>
          <button type="submit">Tipp speichern</button>
        </div>
        <div class="tipgrid" id="tip-options"></div>
      </form>
      <p class="message" id="tip-message" aria-live="polite"></p>
      <div class="lists">
        <div>
          <h3>🔥 Fan-Favoriten nach Anzahl der Tipps</h3>
          <ol id="fan-ranking"></ol>
        </div>
        <div>
          <h3>📝 Abgegebene Tipps</h3>
          <ul id="submitted-tips"></ul>
        </div>
      </div>
    </section>

    <div class="bar">
      <div class="search" role="search">
        <span class="muted">🔎</span>
        <input id="q" type="search" placeholder="Suche nach Land, Interpret, Song, Sender, Vorentscheid …" autocomplete="off" />
      </div>
      <div class="hint">Tipp: „TBD“ = noch nicht entschieden.</div>
    </div>

    <section class="card">
      <div class="tablewrap">
        <table id="tbl">
          <thead>
            <tr>
              <th>Hälfte</th>
              <th>Land</th>
              <th>Sender</th>
              <th>Interpret</th>
              <th>Lied <span class="muted small">(Musik/Text)</span></th>
              <th>Sprache</th>
              <th>Übersetzung <span class="muted small">(inoffiziell)</span></th>
              <th>Nationaler Vorentscheid</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="half">Erste Hälfte</td><td>🇫🇮 Finnland</td><td>YLE</td><td>Linda Lampenius &amp; Pete Parkkonen</td><td><b>Liekinheitin</b><br><span class="muted small">M/T: Antti Riihimäki, Lauri Halavaara, Linda Lampenius, Pete Parkkonen, Vilma Alina Lähteenmäki</span></td><td>Finnisch</td><td>Flammenwerfer</td><td>Uuden Musiikin Kilpailu 2026</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇬🇪 Georgien</td><td>GPB</td><td>Bzikebi</td><td class="muted">—</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇬🇷 Griechenland</td><td>ERT</td><td>Akylas</td><td><b>Ferto</b><br><span class="muted small">M: Akylas, Papatanice, TEO.x3 · T: Orpheus Nonis, Akylas</span></td><td>Griechisch <span class="muted small">(mit Textpassagen auf ES/EN/FR)</span></td><td>Bring es!</td><td>Sing for Greece – Ethnikos Telikos 2026</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇭🇷 Kroatien</td><td>HRT</td><td>Lelek</td><td><b>Andromeda</b><br><span class="muted small">M: Filip Lacković, Zorja Pajić, Lazar Pajić · T: Tomislav Roso</span></td><td>Kroatisch</td><td>—</td><td>Dora 2026</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇲🇩 Moldau</td><td>TRM</td><td>Satoshi</td><td><b>Viva, Moldova!</b><br><span class="muted small">M/T: Vlad Sabajuc</span></td><td>Rumänisch <span class="muted small">(mit Textpassagen in vielen Sprachen)</span></td><td>—</td><td>Selecția Națională Eurovision 2026</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇵🇹 Portugal</td><td>RTP</td><td class="muted">TBD (7. März 2026)</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Festival da Canção 2026</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇸🇪 Schweden</td><td>SVT</td><td class="muted">TBD (7. März 2026)</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Melodifestivalen 2026</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇧🇪 Belgien</td><td>RTBF</td><td>Essyla</td><td><b>Dancing on the Ice</b><br><span class="muted small">M: Essyla, Nicolas d'Avell, Emil Stengele · T: Essyla, Barbara Petitjean</span></td><td>Englisch</td><td>Tanzen auf dem Eis</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇪🇪 Estland</td><td>ERR</td><td>Vanilla Ninja</td><td><b>Too Epic to Be True</b><br><span class="muted small">M/T: Sven Lõhmus</span></td><td>Englisch</td><td>Zu episch um wahr zu sein</td><td>Eesti Laul 2026</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇮🇱 Israel</td><td>Kan</td><td>Noam Bettan</td><td><b>Michelle</b><br><span class="muted small">Präsentation: 5. März 2026</span></td><td class="muted">—</td><td class="muted">—</td><td>HaKokhav HaBa <span class="muted small">(Interpret)</span></td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇱🇹 Litauen</td><td>LRT</td><td>Lion Ceccah</td><td><b>Sólo quiero más</b><br><span class="muted small">M/T: Aurimas Galvelis, Tomas Alenčikas</span></td><td>Litauisch, Spanisch, Englisch <span class="muted small">(mit FR/DE/IT)</span></td><td>Ich will nur mehr</td><td>Eurovizija.LT 2026</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇲🇪 Montenegro</td><td>RTCG</td><td>Tamara Živković</td><td><b>Nova zora</b><br><span class="muted small">M/T: Boris Subotić</span></td><td>Montenegrinisch <span class="muted small">(2 Zeilen EN)</span></td><td>Neuer Morgen</td><td>Montesong 2025</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇵🇱 Polen</td><td>TVP</td><td class="muted">TBD (8. März 2026)</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Wielki Finał Polskich Kwalifikacji 2026</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇸🇲 San Marino</td><td>SMRTV</td><td class="muted">TBD (6. März 2026)</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>San Marino Song Contest 2026</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇷🇸 Serbien</td><td>RTS</td><td>Lavina</td><td><b>Kraj mene</b><br><span class="muted small">M: Lavina · T: Lavina, Ivana Jegdić</span></td><td>Serbisch</td><td>Neben mir</td><td>Pesma za Evroviziju 2026</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <div class="note">
      <b>Fußnoten (aus deiner Vorlage):</b><br/>
      a) mit Textpassagen auf Spanisch, Englisch und Französisch.<br/>
      b) mit Textpassagen auf Spanisch, Englisch, Italienisch, Latein, Französisch, Portugiesisch und Hawaiianisch.<br/>
      c) mit Textpassagen auf Französisch, Deutsch und Italienisch.<br/>
      d) mit zwei Zeilen auf Englisch.
    </div>

    <footer>
      HTML/PHP-Seite mit responsive Tabelle, Sticky-Header, Live-Suche und Tipp-Funktion.<br/>
      Stand/Grundlage: ESC-Vienna-2026-Teilnehmerübersicht &amp; Semi-Final-Draw-Zuordnung.
    </footer>
  </div>

  <script>
    const entries = [
      { country: 'Finnland', flag: '🇫🇮', song: 'Liekinheitin' },
      { country: 'Georgien', flag: '🇬🇪', song: 'TBD' },
      { country: 'Griechenland', flag: '🇬🇷', song: 'Ferto' },
      { country: 'Kroatien', flag: '🇭🇷', song: 'Andromeda' },
      { country: 'Moldau', flag: '🇲🇩', song: 'Viva, Moldova!' },
      { country: 'Portugal', flag: '🇵🇹', song: 'TBD' },
      { country: 'Schweden', flag: '🇸🇪', song: 'TBD' },
      { country: 'Belgien', flag: '🇧🇪', song: 'Dancing on the Ice' },
      { country: 'Estland', flag: '🇪🇪', song: 'Too Epic to Be True' },
      { country: 'Israel', flag: '🇮🇱', song: 'Michelle' },
      { country: 'Litauen', flag: '🇱🇹', song: 'Sólo quiero más' },
      { country: 'Montenegro', flag: '🇲🇪', song: 'Nova zora' },
      { country: 'Polen', flag: '🇵🇱', song: 'TBD' },
      { country: 'San Marino', flag: '🇸🇲', song: 'TBD' },
      { country: 'Serbien', flag: '🇷🇸', song: 'Kraj mene' }
    ];

    const countries = entries.map((entry) => entry.country);
    const infoByCountry = new Map(entries.map((entry) => [entry.country, entry]));

    const q = document.getElementById('q');
    const rows = Array.from(document.querySelectorAll('#tbl tbody tr'));
    const tipForm = document.getElementById('tip-form');
    const tipOptions = document.getElementById('tip-options');
    const tipMessage = document.getElementById('tip-message');
    const submittedTips = document.getElementById('submitted-tips');
    const fanRanking = document.getElementById('fan-ranking');
    const storageKey = 'escSemi1Tips';

    const savedTips = JSON.parse(localStorage.getItem(storageKey) || '[]');

    function renderOptions() {
      tipOptions.innerHTML = '';
      entries.forEach((entry, idx) => {
        const id = `c-${idx}`;
        const label = document.createElement('label');
        label.innerHTML = `<input type="checkbox" value="${entry.country}" name="countries"> <span>${entry.flag} ${entry.country} — <span class="muted">${entry.song}</span></span>`;
        label.querySelector('input').id = id;
        tipOptions.append(label);
      });
    }

    function renderSubmitted() {
      submittedTips.innerHTML = '';
      if (!savedTips.length) {
        submittedTips.innerHTML = '<li class="muted">Noch keine Tipps abgegeben.</li>';
        return;
      }
      savedTips.forEach((tip) => {
        const li = document.createElement('li');
        const picks = tip.qualifiers.map((country) => {
          const info = infoByCountry.get(country);
          return info ? `${info.flag} ${info.country}` : country;
        }).join(', ');
        li.textContent = `${tip.name}: ${picks}`;
        submittedTips.append(li);
      });
    }

    function renderRanking() {
      const points = new Map(countries.map(c => [c, 0]));
      savedTips.forEach((tip) => {
        tip.qualifiers.forEach((country) => points.set(country, points.get(country) + 1));
      });
      const sorted = [...points.entries()].sort((a, b) => b[1] - a[1]);
      fanRanking.innerHTML = '';
      sorted.forEach(([country, score]) => {
        const info = infoByCountry.get(country);
        const name = info ? `${info.flag} ${info.country}` : country;
        const li = document.createElement('li');
        li.textContent = `${name}: ${score} Tipp${score === 1 ? '' : 's'}`;
        fanRanking.append(li);
      });
    }

    tipForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const name = document.getElementById('username').value.trim();
      const qualifiers = Array.from(document.querySelectorAll('input[name="countries"]:checked')).map(el => el.value);

      if (!name) {
        tipMessage.textContent = 'Bitte gib deinen Namen ein.';
        return;
      }
      if (qualifiers.length !== 10) {
        tipMessage.textContent = 'Bitte wähle genau 10 Länder aus.';
        return;
      }

      savedTips.push({ name, qualifiers });
      localStorage.setItem(storageKey, JSON.stringify(savedTips));
      tipForm.reset();
      tipMessage.textContent = 'Dein Tipp wurde gespeichert! 🎉';
      renderSubmitted();
      renderRanking();
    });

    q.addEventListener('input', () => {
      const needle = q.value.trim().toLowerCase();
      rows.forEach((tr) => {
        const hay = tr.innerText.toLowerCase();
        tr.style.display = hay.includes(needle) ? '' : 'none';
      });
    });

    renderOptions();
    renderSubmitted();
    renderRanking();
  </script>
</body>
</html>
