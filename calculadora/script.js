const display = document.getElementById("display");

function appendToDisplay(value) {
  display.value += value;
}

function clearDisplay() {
  display.value = "";
  updateDisplayColor();
}

function calculateResult() {
  try {
    const resultado = eval(display.value);
    display.value = resultado;
    updateDisplayColor(resultado);
  } catch (e) {
    display.value = "Erro";
    display.style.backgroundColor = "#F2F2F2";
  }
}

function updateDisplayColor(valor) {
  if (isNaN(valor)) {
    display.style.backgroundColor = "#F2F2F2";
  } else if (valor > 0) {
    display.style.backgroundColor = "#7ba77dff";
  } else if (valor < 0) {
    display.style.backgroundColor = "#e68c86ff";
  } else {
    display.style.backgroundColor = "#A3A9B0";
  }
}
