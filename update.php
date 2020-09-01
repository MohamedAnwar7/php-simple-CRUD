<?php
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

$Book_ID = $con->real_escape_string($_REQUEST['Book_ID']);
$B_name= $con->real_escape_string($_REQUEST['B_name']);
//$Author = $con->real_escape_string($_REQUEST['Author']);
//$Price = $con->real_escape_string($_REQUEST['Price']);
//$Available = $con->real_escape_string($_REQUEST['Available']);




  $sql = "UPDATE Book SET B_name='$B_name' where Book_ID='$Book_ID'";
	
        if ($con->query($sql) === TRUE) {
           echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $con->error;
        }




        $sql = "SELECT * FROM Book" ;

		// check query
        if(!$result = $con->query($sql)){
            die('There was an error running the query [' . $con->error . ']');
              
	    }else{
		  echo "query ok";
		}

    //new line
    echo "<br />";
	
	print '<table border="2"';
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
?>