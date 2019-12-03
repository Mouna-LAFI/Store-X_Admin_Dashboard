<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_produits";
$id=$_GET['id'];$quantite=$_GET['quantite'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to add quantite
$sql1 = "UPDATE produits SET quantite ='$quantite '  WHERE (id=$id  )";

if ($conn->query($sql) === TRUE) {if ($conn->query($sql1) === TRUE){
    //echo "Record added successfully";
	   header("Location:commander.php");


}} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
>?
