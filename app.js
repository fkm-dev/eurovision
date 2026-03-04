const countries = [
  "Schweden",
  "Italien",
  "Ukraine",
  "Niederlande",
  "Spanien",
  "Frankreich",
  "Norwegen",
  "Griechenland",
  "Portugal",
  "Österreich"
];

const form = document.querySelector("#prediction-form");
const message = document.querySelector("#form-message");
const rankingList = document.querySelector("#ranking");
const predictionsList = document.querySelector("#predictions");
const selects = ["first", "second", "third"].map((id) => document.getElementById(id));

const stored = localStorage.getItem("eurovisionPredictions");
const predictions = stored ? JSON.parse(stored) : [];

function fillSelects() {
  selects.forEach((select) => {
    select.innerHTML = "";
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Bitte auswählen";
    defaultOption.disabled = true;
    defaultOption.selected = true;
    select.append(defaultOption);

    countries.forEach((country) => {
      const option = document.createElement("option");
      option.value = country;
      option.textContent = country;
      select.append(option);
    });
  });
}

function savePredictions() {
  localStorage.setItem("eurovisionPredictions", JSON.stringify(predictions));
}

function renderPredictions() {
  predictionsList.innerHTML = "";
  if (!predictions.length) {
    predictionsList.innerHTML = "<li>Noch keine Tipps vorhanden.</li>";
    return;
  }

  predictions.forEach((tip) => {
    const li = document.createElement("li");
    li.textContent = `${tip.name}: 1) ${tip.first}, 2) ${tip.second}, 3) ${tip.third}`;
    predictionsList.append(li);
  });
}

function renderRanking() {
  const points = new Map(countries.map((country) => [country, 0]));

  predictions.forEach((tip) => {
    points.set(tip.first, points.get(tip.first) + 3);
    points.set(tip.second, points.get(tip.second) + 2);
    points.set(tip.third, points.get(tip.third) + 1);
  });

  const sorted = [...points.entries()].sort((a, b) => b[1] - a[1]);
  rankingList.innerHTML = "";

  sorted.forEach(([country, score]) => {
    const li = document.createElement("li");
    li.textContent = `${country}: ${score} Punkt${score === 1 ? "" : "e"}`;
    rankingList.append(li);
  });
}

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const name = form.name.value.trim();
  const first = form.first.value;
  const second = form.second.value;
  const third = form.third.value;

  const uniquePicks = new Set([first, second, third]);
  if (!name) {
    message.textContent = "Bitte gib deinen Namen ein.";
    return;
  }

  if (uniquePicks.size < 3) {
    message.textContent = "Bitte wähle drei unterschiedliche Länder aus.";
    return;
  }

  predictions.push({ name, first, second, third });
  savePredictions();
  renderPredictions();
  renderRanking();

  form.reset();
  fillSelects();
  message.textContent = "Dein Tipp wurde gespeichert – viel Glück! ✨";
});

fillSelects();
renderPredictions();
renderRanking();
