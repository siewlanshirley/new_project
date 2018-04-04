<!DOCTYPE html>
<html>
<title>Laravel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css"> 
  .title {
    text-align: center;
  } 
</style>

<body>

<div class="title">
  <h2>Page</h2>
</div>

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="img_fjords.jpg" style="width:100%">
  <div class="w3-display-centre w3-large w3-container w3-padding-16 w3-black" style="height:400px">
    Image1
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_lights.jpg" style="width:100%">
  <div class="w3-display-centre w3-large w3-container w3-padding-16 w3-red" style="height:400px">
    Image2
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_mountains.jpg" style="width:100%">
  <div class="w3-display-centre w3-large w3-container w3-padding-16 w3-yellow" style="height:400px">
    Image3
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img_forest.jpg" style="width:100%">
  <div class="w3-display-centre w3-large w3-container w3-padding-16 w3-blue" style="height:400px">
    Image4
  </div>
</div>


<div class="text">
  <br>
  <p>Species that differ considerably in their ecology rarely have problems living in close proximity as they do no compete for the same natural resources. When, however, two similar species live side by side and utilize the same food, habitat and other resources, this often leads to one of the species outcompeting the other, according to traditional ecological theory.The role of chance as a contributing mechanism whether species dies out locally is not near as well investigated as is competition, and limited empirical data is available. The recent study is one of the most extensive to date, and is based on experiments and computer simulations combined with field studies.The results show that chance has a certain significance, and that it is not possible in advance to say which of two co-existing species will die out locally.
  </p>
</div> 

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>

