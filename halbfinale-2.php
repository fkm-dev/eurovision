<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ESC 2026 – Zweites Halbfinale (14. Mai 2026)</title>
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
        <h1>Eurovision Song Contest 2026 – Zweites Halbfinale</h1>
        <p>
          <span class="muted">Donnerstag,</span> <b>14. Mai 2026</b> · <b>21:00 Uhr (MESZ)</b> · Wien<br/>
          Abstimmungsberechtigt: <b>Frankreich</b> &amp; <b>Vereinigtes Königreich</b> (plus „Rest of the World“ Online-Voting)
        </p>
        <div class="kicker">
          <span class="pill">🗳️ <b>Voting:</b> Televoting + ROTW</span>
          <span class="pill">🎟️ <b>Qualifikation:</b> Top 10 ins Finale</span>
        </div>
      </div>
      <div class="chips">
        <span class="chip"><b>16</b> Länder</span>
        <span class="chip"><b>2</b> Hälften</span>
        <span class="chip"><b>Stand:</b> März 2026</span>
      </div>

      <nav aria-label="Seiten">
        <a class="navbtn" href="halbfinale.php">Halbfinale 1</a>
        <a class="navbtn active" href="halbfinale-2.php">▶ Halbfinale 2</a>
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
            <tr><td class="half">Erste Hälfte</td><td>🇦🇱 Albanien</td><td>RTSH</td><td>Shkodra Elektronike</td><td><b>Zjerm</b><br><span class="muted small">M/T: Kolë Laca, Beatriçe Gjergji</span></td><td>Albanisch</td><td>Feuer</td><td>Festivali i Këngës</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇦🇲 Armenien</td><td>AMPTV</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Depi Evratesil</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇦🇺 Australien</td><td>SBS</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇨🇿 Tschechien</td><td>ČT</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>ESCZ</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇩🇰 Dänemark</td><td>DR</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Dansk Melodi Grand Prix</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇮🇪 Irland</td><td>RTÉ</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>The Late Late Show Eurosong</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇱🇻 Lettland</td><td>LTV</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Supernova</td></tr>
            <tr><td class="half">Erste Hälfte</td><td>🇲🇹 Malta</td><td>PBS</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Malta Eurovision Song Contest</td></tr>

            <tr><td class="half">Zweite Hälfte</td><td>🇦🇹 Österreich</td><td>ORF</td><td class="muted">Host Entry TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇦🇿 Aserbaidschan</td><td>İTV</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇨🇾 Zypern</td><td>CyBC</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇮🇸 Island</td><td>RÚV</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Söngvakeppnin</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇱🇺 Luxemburg</td><td>RTL</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Luxembourg Song Contest</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇳🇱 Niederlande</td><td>AVROTROS</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>interne Auswahl</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇸🇮 Slowenien</td><td>RTVSLO</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>EMA</td></tr>
            <tr><td class="half">Zweite Hälfte</td><td>🇺🇦 Ukraine</td><td>Suspilne</td><td class="muted">TBD</td><td class="muted">TBD</td><td class="muted">—</td><td class="muted">—</td><td>Vidbir</td></tr>
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
      { country: 'Albanien', flag: '🇦🇱', song: 'Zjerm' },
      { country: 'Armenien', flag: '🇦🇲', song: 'TBD' },
      { country: 'Australien', flag: '🇦🇺', song: 'TBD' },
      { country: 'Tschechien', flag: '🇨🇿', song: 'TBD' },
      { country: 'Dänemark', flag: '🇩🇰', song: 'TBD' },
      { country: 'Irland', flag: '🇮🇪', song: 'TBD' },
      { country: 'Lettland', flag: '🇱🇻', song: 'TBD' },
      { country: 'Malta', flag: '🇲🇹', song: 'TBD' },
      { country: 'Österreich', flag: '🇦🇹', song: 'TBD' },
      { country: 'Aserbaidschan', flag: '🇦🇿', song: 'TBD' },
      { country: 'Zypern', flag: '🇨🇾', song: 'TBD' },
      { country: 'Island', flag: '🇮🇸', song: 'TBD' },
      { country: 'Luxemburg', flag: '🇱🇺', song: 'TBD' },
      { country: 'Niederlande', flag: '🇳🇱', song: 'TBD' },
      { country: 'Slowenien', flag: '🇸🇮', song: 'TBD' },
      { country: 'Ukraine', flag: '🇺🇦', song: 'TBD' }
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
    const storageKey = 'escSemi2Tips';

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
