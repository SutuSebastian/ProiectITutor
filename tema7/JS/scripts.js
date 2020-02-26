var number = 23;
var numberWithDecimals = 23.88893123;

var unsortedArray = ["oranges", "apples", "pineapples"];

document.getElementById("toString").innerHTML = number.toString();
document.getElementById("toFixed").innerHTML = numberWithDecimals.toFixed(3);

document.getElementById("unsortedArray").innerHTML =
    "Unsorted Array: <pre><code>" + unsortedArray + "</code></pre>";
document.getElementById("sortedArray").innerHTML =
    "Sorted Array: <pre><code>" + unsortedArray.sort() + "</code></pre>";
document.getElementById("reversedArray").innerHTML =
    "Sorted reverse Array: <pre><code>" +
    unsortedArray.reverse() +
    "</code></pre>";

function addItemsToArray() {
    var ul = document.getElementById("unorderedList");
    var li = document.createElement("li");
    unsortedArray.forEach(fruit => {
        var text = document.createTextNode(fruit + ", ");
        li.appendChild(text);
        ul.appendChild(li);
    });
}
