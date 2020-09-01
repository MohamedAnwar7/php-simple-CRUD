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
$Memb_ID = $con->real_escape_string($_REQUEST['Memb_ID']);
$Name = $con->real_escape_string($_REQUEST['Name']);
$Address = $con->real_escape_string($_REQUEST['Address']);
$Memb_date= $con->real_escape_string($_REQUEST['Memb_date']);
$Expiry_date = $con->real_escape_string($_REQUEST['Expiry_date']);

// attempt insert query execution
$sql = "INSERT INTO member (Memb_ID,Name,Address,Memb_date,Expiry_date) VALUES ('$Memb_ID','$Name','$Address','$Memb_date','$Expiry_date')";
if($con->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $con->error;
}
 
// Close connection
$con->close();
	
		
?>