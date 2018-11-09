<?php 

$servername = "localhost";
$username = "root";
$password = "sony";
$dbname = "unp_ppweb_uts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*else 
	echo "Connection Success";*/ 
?>