<?php
    require_once('./page-header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://www.asiaone.com/sites/default/files/original_images/Aug2022/170822_Uncle%20Raymond_TikTok_0.jpg" style="width:50%">
  <img class="mySlides" src="https://theurbanwire.com/wp-content/uploads/2022/05/photo_2022-05-13-16.32.39.jpeg" style="width:50%">
  <img class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSNnMZP1IT2KFDaXW5ARrFhpCchLUTxB6N-A&usqp=CAU" style="width:70%">
  <img class="mySlides" src="https://theurbanwire.com/wp-content/uploads/2022/05/IMG_5184.jpg" style="width:70%">
  
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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