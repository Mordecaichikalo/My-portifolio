var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
    greeting = 'Mwadzuka bwanji?!';
} else if (hourNow > 12) {
    greeting = 'Mwaswera bwanji?!';
} else if (hourNow > 0) {
    greeting = 'Tsiku lanu latha bwanji?!';
} else {
    greeting = 'Welcome!';
}

document.write('<h3>' + greeting + '</h3>');