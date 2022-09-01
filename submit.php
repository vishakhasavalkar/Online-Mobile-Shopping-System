
   <?php
require 'dbconfig.php';
// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
	
}


$sql = "insert into productinq(fname,mobno,productinq,details) VALUES ('".$_POST["name1"]."','".$_POST["mob"]."','".$_POST["inq"]."','".$_POST["desc"]."')";
   
    
if (mysqli_query($conn, $sql)) {
      header('Location:admin_dashboard.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    ?>

	
	
