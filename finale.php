<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ESC 2026 – Finale (16. Mai 2026)</title>
  <style>
    :root{
      --bg:#0b0c10; --card:#11131a; --text:#e8eaf0; --muted:#a9afc3;
      --line:#23283a; --accent:#7c5cff; --accent2:#27d3a2; --radius:16px;
      --warn:#ffcc66;
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
    .wrap{max-width:1200px; margin:0 auto; padding:28px 18px 64px}
    header{
      display:flex; gap:14px; align-items:flex-start; justify-content:space-between; flex-wrap:wrap;
      padding:18px; border:1px solid var(--line); background:rgba(17,19,26,.72);
      border-radius:var(--radius); backdrop-filter: blur(10px);
    }
    .title h1{margin:0 0 6px; font-size:22px}
    .title p{margin:0; color:var(--muted); line-height:1.35}
    nav{margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;}
    .navbtn{
      display:inline-flex; align-items:center; gap:8px;
      padding:10px 12px; border-radius:999px;
      border:1px solid var(--line);
      background:rgba(255,255,255,.03);
      color:var(--text); font-size:14px; text-decoration:none;
    }
    .navbtn.active{border-color:rgba(124,92,255,.65); box-shadow:0 0 0 3px rgba(124,92,255,.14) inset}
    .bar{margin:18px 0 14px; display:flex; gap:12px; flex-wrap:wrap; align-items:center; justify-content:space-between;}
    .search{
      flex:1 1 320px; min-width:260px;
      display:flex; align-items:center; gap:10px;
      padding:12px 12px; border-radius:14px;
      border:1px solid var(--line); background:rgba(17,19,26,.72);
    }
    .search input{width:100%; background:transparent; border:none; outline:none; color:var(--text); font-size:14px;}
    .hint{color:var(--muted); font-size:13px}
    .card{border:1px solid var(--line); background:rgba(17,19,26,.72); border-radius:var(--radius); overflow:hidden;}
    .tablewrap{overflow:auto; -webkit-overflow-scrolling:touch}
    table{border-collapse:separate; border-spacing:0; width:100%; min-width:980px}
    thead th{
      position:sticky; top:0; z-index:2;
      background:linear-gradient(to bottom, rgba(17,19,26,.98), rgba(17,19,26,.86));
      border-bottom:1px solid var(--line);
      text-align:left; font-weight:650; font-size:13px; padding:12px 12px; white-space:nowrap;
    }
    tbody td{border-bottom:1px solid rgba(35,40,58,.7); padding:12px 12px; vertical-align:top; font-size:14px;}
    tbody tr:hover td{background:rgba(124,92,255,.06)}
    .muted{color:var(--muted)}
    .pill{
      display:inline-flex; gap:8px; align-items:center;
      padding:6px 10px; border-radius:999px;
      border:1px solid rgba(255,255,255,.08); background:rgba(255,255,255,.03);
      font-size:12px; color:var(--muted)
    }
    .kicker{display:flex; gap:10px; flex-wrap:wrap; margin-top:12px}
    .kicker .pill b{color:var(--text)}
    footer{margin-top:18px; color:var(--muted); font-size:12px}

    .tipcard { margin:16px 0; padding:16px; }
    .controls { display:flex; gap:10px; flex-wrap:wrap; }
    input[type="text"] { border:1px solid var(--line); border-radius:10px; padding:10px 12px; background:rgba(255,255,255,.02); color:var(--text); }
    button { border:1px solid rgba(124,92,255,.65); background:linear-gradient(135deg, var(--accent), var(--accent2)); color:#081018; border-radius:10px; padding:10px 14px; font-weight:700; cursor:pointer; }
    .tipgrid { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:10px; margin-top:12px; }
    .tipgrid label { display:flex; align-items:center; gap:8px; border:1px solid var(--line); padding:8px 10px; border-radius:10px; background:rgba(255,255,255,.02); cursor:pointer; }
    .message { margin-top:10px; color:var(--warn); min-height:1.2em; }
    .lists { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:14px; margin-top:14px; }
  </style>
</head>

<body>
  <div class="wrap">
    <header>
      <div class="title">
        <h1>Eurovision Song Contest 2026 – Finale</h1>
        <p>
          <span class="muted">Samstag,</span> <b>16. Mai 2026</b> · <b>21:00 Uhr (MESZ)</b> · Wien<br/>
          Teilnehmer: Gastgeber (<b>Österreich</b>) + „Big Four“ + jeweils Top 10 aus beiden Halbfinals (<b>insgesamt 25</b>)
        </p>
        <div class="kicker">
          <span class="pill">🏁 <b>Finale:</b> 25 Länder</span>
          <span class="pill">🗳️ <b>Voting:</b> Jury + Televoting + ROTW</span>
        </div>

        <nav aria-label="Seiten">
          <a class="navbtn" href="halbfinale.php">Halbfinale 1</a>
          <a class="navbtn" href="halbfinale-2.php">Halbfinale 2</a>
          <a class="navbtn active" href="finale.php">▶ Finale</a>
        </nav>
      </div>
    </header>

    <section class="card tipcard">
      <h2>🏆 Finale-Tipp (Top 3)</h2>
      <p class="muted">Wähle deine Plätze 1, 2 und 3. Alle drei Tipps müssen unterschiedlich sein.</p>
      <form id="tip-form">
        <div class="controls">
          <input id="username" name="username" type="text" placeholder="Dein Name" required>
          <select id="first" required></select>
          <select id="second" required></select>
          <select id="third" required></select>
          <button type="submit">Tipp speichern</button>
        </div>
      </form>
      <p class="message" id="tip-message" aria-live="polite"></p>
      <div class="lists">
        <div>
          <h3>🔥 Fan-Ranking (3/2/1 Punkte)</h3>
          <ol id="fan-ranking"></ol>
        </div>
        <div>
          <h3>📝 Abgegebene Finale-Tipps</h3>
          <ul id="submitted-tips"></ul>
        </div>
      </div>
    </section>

    <div class="bar">
      <div class="search" role="search">
        <span class="muted">🔎</span>
        <input id="q" type="search" placeholder="Suche nach Land, Interpret, Song …" autocomplete="off" />
      </div>
      <div class="hint">Die 20 Qualifikanten werden nach den Halbfinals ergänzt.</div>
    </div>

    <section class="card">
      <div class="tablewrap">
        <table id="tbl">
          <thead>
            <tr>
              <th>Slot</th>
              <th>Land</th>
              <th>Interpret</th>
              <th>Lied</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr><td><b>Fix</b></td><td>🇦🇹 Österreich</td><td>Cosmó</td><td><b>Tanzschein</b></td><td>Gastgeber</td></tr>
            <tr><td><b>Fix</b></td><td>🇫🇷 Frankreich</td><td class="muted">TBD</td><td class="muted">TBD</td><td>Big Four</td></tr>
            <tr><td><b>Fix</b></td><td>🇩🇪 Deutschland</td><td>Sarah Engels</td><td><b>Fire</b></td><td>Big Four</td></tr>
            <tr><td><b>Fix</b></td><td>🇮🇹 Italien</td><td>Sal Da Vinci</td><td><b>Per sempre sì</b></td><td>Big Four</td></tr>
            <tr><td><b>Fix</b></td><td>🇬🇧 Vereinigtes Königreich</td><td>Look Mum No Computer</td><td><b>Eins zwei drei</b></td><td>Big Four</td></tr>

            <tr><td><b>Q1</b></td><td class="muted">🏳️ Qualifikant 1 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q2</b></td><td class="muted">🏳️ Qualifikant 2 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q3</b></td><td class="muted">🏳️ Qualifikant 3 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q4</b></td><td class="muted">🏳️ Qualifikant 4 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q5</b></td><td class="muted">🏳️ Qualifikant 5 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q6</b></td><td class="muted">🏳️ Qualifikant 6 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q7</b></td><td class="muted">🏳️ Qualifikant 7 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q8</b></td><td class="muted">🏳️ Qualifikant 8 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q9</b></td><td class="muted">🏳️ Qualifikant 9 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q10</b></td><td class="muted">🏳️ Qualifikant 10 (HF1)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 1</td><td class="muted">Qualifikant</td></tr>

            <tr><td><b>Q11</b></td><td class="muted">🏳️ Qualifikant 1 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q12</b></td><td class="muted">🏳️ Qualifikant 2 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q13</b></td><td class="muted">🏳️ Qualifikant 3 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q14</b></td><td class="muted">🏳️ Qualifikant 4 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q15</b></td><td class="muted">🏳️ Qualifikant 5 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q16</b></td><td class="muted">🏳️ Qualifikant 6 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q17</b></td><td class="muted">🏳️ Qualifikant 7 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q18</b></td><td class="muted">🏳️ Qualifikant 8 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q19</b></td><td class="muted">🏳️ Qualifikant 9 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
            <tr><td><b>Q20</b></td><td class="muted">🏳️ Qualifikant 10 (HF2)</td><td class="muted">TBD</td><td class="muted">Top 10 aus Halbfinale 2</td><td class="muted">Qualifikant</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <footer>
      Stand/Grundlage: Final-Termin &amp; Fix-Qualifikanten + Platzhalter für die 20 Semi-Qualifikanten.
    </footer>
  </div>

  <script>
    const finalists = [
      { name: 'Österreich', label: '🇦🇹 Österreich' },
      { name: 'Frankreich', label: '🇫🇷 Frankreich' },
      { name: 'Deutschland', label: '🇩🇪 Deutschland' },
      { name: 'Italien', label: '🇮🇹 Italien' },
      { name: 'Vereinigtes Königreich', label: '🇬🇧 Vereinigtes Königreich' },
      ...Array.from({ length: 10 }, (_, i) => ({ name: `Qualifikant ${i + 1} (HF1)`, label: `🏳️ Qualifikant ${i + 1} (HF1)` })),
      ...Array.from({ length: 10 }, (_, i) => ({ name: `Qualifikant ${i + 1} (HF2)`, label: `🏳️ Qualifikant ${i + 1} (HF2)` }))
    ];

    const q = document.getElementById('q');
    const rows = Array.from(document.querySelectorAll('#tbl tbody tr'));
    const tipForm = document.getElementById('tip-form');
    const tipMessage = document.getElementById('tip-message');
    const submittedTips = document.getElementById('submitted-tips');
    const fanRanking = document.getElementById('fan-ranking');
    const storageKey = 'escFinalTips';
    const savedTips = JSON.parse(localStorage.getItem(storageKey) || '[]');

    const first = document.getElementById('first');
    const second = document.getElementById('second');
    const third = document.getElementById('third');

    function fillSelect(select) {
      select.innerHTML = '<option value="" selected disabled>Bitte auswählen</option>';
      finalists.forEach((entry) => {
        const option = document.createElement('option');
        option.value = entry.name;
        option.textContent = entry.label;
        select.append(option);
      });
    }

    function renderSubmitted() {
      submittedTips.innerHTML = '';
      if (!savedTips.length) {
        submittedTips.innerHTML = '<li class="muted">Noch keine Finale-Tipps abgegeben.</li>';
        return;
      }

      savedTips.forEach((tip) => {
        const li = document.createElement('li');
        li.textContent = `${tip.name}: 🥇 ${tip.first} | 🥈 ${tip.second} | 🥉 ${tip.third}`;
        submittedTips.append(li);
      });
    }

    function renderRanking() {
      const points = new Map(finalists.map((entry) => [entry.name, 0]));
      savedTips.forEach((tip) => {
        points.set(tip.first, points.get(tip.first) + 3);
        points.set(tip.second, points.get(tip.second) + 2);
        points.set(tip.third, points.get(tip.third) + 1);
      });

      const sorted = [...points.entries()].sort((a, b) => b[1] - a[1]);
      fanRanking.innerHTML = '';
      sorted.forEach(([name, score]) => {
        const finalEntry = finalists.find((entry) => entry.name === name);
        const li = document.createElement('li');
        li.textContent = `${finalEntry ? finalEntry.label : name}: ${score} Punkt${score === 1 ? '' : 'e'}`;
        fanRanking.append(li);
      });
    }

    tipForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const username = document.getElementById('username').value.trim();
      const picks = [first.value, second.value, third.value];

      if (!username) {
        tipMessage.textContent = 'Bitte gib deinen Namen ein.';
        return;
      }

      if (new Set(picks).size < 3) {
        tipMessage.textContent = 'Bitte wähle drei unterschiedliche Plätze.';
        return;
      }

      savedTips.push({ name: username, first: picks[0], second: picks[1], third: picks[2] });
      localStorage.setItem(storageKey, JSON.stringify(savedTips));
      tipForm.reset();
      fillSelect(first);
      fillSelect(second);
      fillSelect(third);
      tipMessage.textContent = 'Finale-Tipp gespeichert! ✨';
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

    fillSelect(first);
    fillSelect(second);
    fillSelect(third);
    renderSubmitted();
    renderRanking();
  </script>
</body>
</html>
