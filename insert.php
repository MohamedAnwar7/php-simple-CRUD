<?php


 //  Connection variables:
   $dbhost = 'localhost:3306';
   $username = "root";     // user name of mysql 
   $password = "";         // password
   $dbname = "alex_lib";    // databse name 
   
    // ---step-1
        // create connection
        $con = new mysqli($dbhost, $username, $password, $dbname);
      
	  // check connection
	  if($con->connect_errno > 0 ){
	    die("unable to connect to the database[" . $con->connect_error . "]");
	  }else{
	       echo "Connected successfully" ;
		}
//------------------------------------------------------------------------
$Book_ID = $con->real_escape_string($_REQUEST['Book_ID']);
$B_name = $con->real_escape_string($_REQUEST['B_name']);
$Author = $con->real_escape_string($_REQUEST['Author']);
$Price = $con->real_escape_string($_REQUEST['Price']);
$Available = $con->real_escape_string($_REQUEST['Available']);
$Pub_ID= $con->real_escape_string($_REQUEST['Pub_ID']);
// attempt insert query execution
$sql = "INSERT INTO Book (Book_ID,B_name,Author,Price,Available,Pub_ID) VALUES ('$Book_ID', '$B_name', '$Author','$Price','$Available','$Pub_ID')";
if($con->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $con->error;
}
 
// Close connection
$con->close();
	
		
?>