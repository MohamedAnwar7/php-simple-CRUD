<!DOCTYPE html>
<html>
<head>
    <style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;
        background-image: url(denim_by_manoluv-d9591qz.jpg)}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width:auto ;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
        tb1 {
    border-collapse: collapse;
    width: 100%;
            background-color:gray;
}
        
        .tb{
            border: auto;
            padding: 0;
            background-color: lightsteelblue}
        .tb3{
            background-color: palevioletred;
        }
</style>
    <title>IS Prog</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
    <link href="favicon.ico" type="images/favicon.ico" rel="shourtcut icon">
    </head>
    
    
    
    
    
    

    <body>
       
        
<ul>
  <li><a class="active" href="http://www.bibalex.org/">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
    <p>hellow world</p>
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="2017051116150327612_BAbanner.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2017051416303299840_PTIbanner.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="2017050711514833317_ICOMwebbanner01.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
        <table class="tb1"><tr><th>
        <h3>About the library</h3>
            <article style="color:powderblue" > The Library of Alexandria was reborn in October 2002 to reclaim the mantle of its ancient namesake. It is not just an extraordinarily beautiful building; it is also a vast complex where the arts, history, philosophy, and science come together. Moreover, the myriad activities it offers have made it a place for open discussion, dialogue, and understanding.</article></th></tr></table>
        
        <!-- HTML Form-->
        <div  >
            <p>Insert Book Info</p>
            <table class="tb"><tr><th>
<form action="insert.php" method="post">
    <p>
        <label for="Book_Id">Book_ID:</label>
        <input type="text" name="Book_ID" id="Book_ID">
    </p>
        <p>
        <label for="B_name">B_name:</label>
        <input type="text" name="B_name" id="B_name">
    </p>
        <p>
        <label for="Author">Author:</label>
        <input type="text" name="Author" id="Author">
    </p>
        <p>
        <label for="Price">Price:</label>
        <input type="text" name="Price" id="Price">
    </p>
        <p>
        <label for="Available">Available:</label>
        <input type="text" name="Available" id="Available">
    </p>
        <p>
        <label for="Pub_ID">Pub_ID:</label>
        <input type="text" name="Pub_ID" id="Pub_ID">
    </p>

    <input type="submit" value="Submit">
                </form></th></tr></table></div>
        <div>
        <table class="tb3">
            <tr><p style="color:powderblue">update book name
            <th>
                <form action="update.php" method="post">
    <p>
        <label for="Book_Id">Book_ID:</label>
        <input type="text" name="Book_ID" id="Book_ID">
                    </p></form>
                  <p>
        <label for="B_name">B_name:</label>
        <input type="text" name="B_name" id="B_name">
    </p>
                <input type="submit" value="update">
                
                
                
                </th></p>
            </tr>
            
            
            </table>
        
        </div>
 
    
        

    
    </body>


</html>