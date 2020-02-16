var person = {
    firstName: "Sutu",
    lastName: "Jeanu-Sebastian",
    age: 23,
    gender: "male"
};

var fullInformation =
    "Hi! My name is " +
    person.firstName +
    person.lastName +
    ". I'm " +
    person.age +
    "years old and I'm a " +
    person.gender;

function showInformation() {
    document.getElementById("personInformation").innerHTML = fullInformation;
}

function hideInformation() {
    document.getElementById("personInformation").innerHTML = "";
}

document.getElementById("stringLength").innerHTML =
    "The above string length is " + fullInformation.length + " words.";

document.getElementById("wordPosition").innerHTML =
    "The first name 'Sutu' starts at position " +
    fullInformation.search("Sutu");

var x = 10;
var y = 20;
var z = "30";
var incorrectResult = x + y + z;
var correctResult = x + y + Number(z);

document.getElementById("incorrect").innerHTML =
    "is 10 + 20 + '30' going to be = 60? Well, no. The result is " +
    incorrectResult +
    ", because + concatenates numbers when there is a string in the 'equation'";

document.getElementById("correct").innerHTML =
    "The correct calculation is this: 10 + 20 + Number('30') which is equal to: " +
    correctResult;
