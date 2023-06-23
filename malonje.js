var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
    greeting = 'MULI BWANJI?!';
} else if (hourNow > 12) {
    greeting = 'MWALANDIRIDWA?!';
} else if (hourNow > 0) {
    greeting = 'HOW WAS YOUR NIGHT?!';
} else {
    greeting = 'Welcome!';
}

document.write('<h3>' + greeting + '</h3>');