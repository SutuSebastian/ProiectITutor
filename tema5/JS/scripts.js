var numberOne = 11;
alert("here numberOne var is " + numberOne);

numberOne = 23;
alert("here numberOne var has a new value of " + numberOne);

function addition(a, b) {
    return a + b;
}

function multiplication(a, b) {
    return a * b;
}

function handleAddition() {
    document.getElementById("addition").innerHTML = addition(5, 7);
}

function handleMultiplication() {
    document.getElementById("multiplication").innerHTML = multiplication(5, 7);
}
