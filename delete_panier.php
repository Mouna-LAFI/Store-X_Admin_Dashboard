<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_produits";
$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to delete a record
$sql = "UPDATE produits SET panier =' '  WHERE (id=$id  )";
$sql1 = "UPDATE produits SET quantite =' '  WHERE (id=$id  )";

if ($conn->query($sql) === TRUE) {if ($conn->query($sql1) === TRUE){
    //echo "Record deleted successfully";
	   header("Location:afficher_panier.php");


}} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();