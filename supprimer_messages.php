<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_membre";
$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to delete a record
$sql = "DELETE FROM contact WHERE (id=$id)";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
	   header("Location:afficher_messages.php");


} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();