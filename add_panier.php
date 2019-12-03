<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_produits";
$id=$_GET['id']; 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE produits SET panier ='added'  WHERE (id=$id  )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	   header("Location:afficher_panier.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
