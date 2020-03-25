var date = new Date();
var dateContainer = document.getElementById("date");

function getDate() {
    dateContainer.innerHTML = date;
}

function setYear() {
    if (dateContainer.innerHTML.length > 0) {
        date.setYear(2024);
        dateContainer.innerHTML = date;
    }
}

function setMonth() {
    if (dateContainer.innerHTML.length > 0) {
        date.setMonth(9);
        dateContainer.innerHTML = date;
    }
}

function setHours() {
    if (dateContainer.innerHTML.length > 0) {
        date.setHours(22);
        dateContainer.innerHTML = date;
    }
}
