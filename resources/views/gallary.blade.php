@extends('layout')
 @section('title')

<p> This is my Gallary</p>

@endsection
@section('content')
<table>
<tr><td>






<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="/images/house.jpg" style="width:90%" class="img">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="/images/photo1.jpg" style="width:90%"  class="img">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black"> 
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="/images/photo2.jpg" style="width:90%"  class="img">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="/images/photo3.jpg" style="width:90%"  class="img">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
  </div>
</div>
<div class="w3-display-container mySlides">
  <img src="/images/photo5.jpg" style="width:90%"  class="img">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="/images/photo6.jpg" style="width:90%"  class="img">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
  </div>
</div>


<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
</td></tr>
</table>
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



@endsection