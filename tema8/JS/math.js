var number = 293883.99723804512307;
var numberContainer = document.getElementById("number");

numberContainer.innerHTML = number;

function resetNumber() {
    numberContainer.innerHTML = number;
}

function roundNumber() {
    numberContainer.innerHTML = Math.round(number);
}

function setDecimals() {
    numberContainer.innerHTML = number.toFixed(3);
}

function toExponential() {
    numberContainer.innerHTML = number.toExponential();
}
