<? reg.php
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: green;
}

/* Caption text */
.text {
  color: white;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: auto;
  text-align: center;
  background-color: green;
}

/* Number text (1/3 etc) */
.numbertext {
  color: green;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 32px;
  background-color: white;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: red;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<script src="time.js"></script
</head>
<body>
<h2>student ID verification </h2>

<p>Please enter student ID:</p>

<input id="mord">

<button type="button" onclick="myFunction()">Submit</button>

<p id="chika"></p>
<p>
<label for="model of study">select model of study</label>
    <select id="pg" name="select mode of study">
	 <option value="model">model of study options</option>
      <option value="odel">Open distance e learning</option>
      <option value="weekend">weekend</option>
	   <option value="generic">Generic</option>
    </select>
	</p>

<p><a href= "skill.html"> skills</a> This link takes us to skills of developer</p>

<p><a href= "cont.html"> suggestion</a><em>if you have a request that need special consideration.You can use this form to send to your request</em></p>

<script>
function myFunction() {
  // Get the value of the input field with id="mord"
  let x = document.getElementById("mord").value;
  // If x is Not a Number or less than 1000 or greater than 9999
  let text;
  if (isNaN(x) || x < 1000 || x > 9999) {
    text = "sudent invalid";
  } else {
    text = "student ID Verified";
  }
  document.getElementById("chika").innerHTML = text;
}
</script>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="hi.jpg" style="width:100%">
  <div class="text">Demostration that lead to suspension of some students</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="ph.jpg" style="width:100%">
  <div class="text">Image of my favarite field (public health)</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="mzuni1.jpg" style="width:100%">
  <div class="text">Essap buildings</div>
</div>

<a class="prev" onclick="plusSlides(-1)">pa mbuyo</a>
<a class="next" onclick="plusSlides(1)">pa tsogolo</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 

<?