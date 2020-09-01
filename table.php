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
            
            .color{  border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
            width: 50%;}
    </style>

    <title>IS Prog</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
    <link href="favicon.ico" type="images/favicon.ico" rel="shourtcut icon">
    </head>
        <body>
       
        
<ul><img src="Logo-Design-Competition-Center-activities-Francophone.png" height="50" width="170" >
  <li  style="float:right"><a href="#about">About</a></li>
  <li  style="float:right"><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="http://localhost/myproj/table.php">Book</a></li>
     <li style="float:right"><a class="active" href="http://localhost/myproj/myproj1.html">Home</a></li>
</ul>
    <p>hellow world</p>
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="2017051116150327612_BAbanner.jpg" style="width:100%">
  <div class="text">WELCOME To Our PAGE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2017051416303299840_PTIbanner.jpg" style="width:100%">
  <div class="text"></div>
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
          <div class="color">
            <?php

echo "<h1 >  MYSQL-PHP Connection</h1>";
echo "<h3>  HR Database </h3>";

 ///------------------------------------------------------------------------	

 //  Connection variables:
   $dbhost = 'localhost';
   $username = "root";     // user name of mysql 
   $password = "";         // password
   $dbname = "alex_lib";    // databse name 
   
    // ---step-1
        // create connection
        $con = new mysqli($dbhost, $username, $password, $dbname);
      
	  // check connection
	  if($con->connect_errno > 0 ){
                echo " fialed to connect";
	    die("unable to connect to the database[" . $con->connect_error . "]");
	  }else{
	       echo "Connected successfully" ;
	}
//------------------------------------------------------------------------	
      echo "<br />";
	
	// ---step-2
        // perform or do sql query
        $sql = "SELECT * FROM Book" ;
		// $sql = "SELECT * FROM dept where deptno = 20" ;

		// check query
        if(!$result = $con->query($sql)){
            die('There was an error running the query [' . $con->error . ']');
              
	    }else{
		  echo "query ok";
		}
   
    //new line
    echo "<br />";
	
    // ---step-3
	  /*   if ($result->num_rows > 0) {
           // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "id: " . $row["deptno"]. " - Department: " . $row["dname"]. " Location: " . $row["loc"]. "<br>";
        }
        } else {
         echo "0 results";
        }
		*/
		
		//-----------------------------------------------
		print '<table border="6"';
       while($row = $result->fetch_array()) {
           print '<tr>';
           print '<td>'.$row["Book_ID"].'</td>';
           print '<td>'.$row["B_name"].'</td>';
           print '<td>'.$row["Author"].'</td>';
             print '<td>'.$row["Price"].'</td>';
             print '<td>'.$row["Available"].'</td>';
             print '<td>'.$row["Pub_ID"].'</td>';
           print '</tr>';

        }   
        print '</table>';		
        
	
	// close the connection
	$con->close();
	echo "<br /> Connection closed.";

              ?></div>
    </body>
</html>