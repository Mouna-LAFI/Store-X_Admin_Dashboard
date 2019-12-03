<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$id=$_POST['id'];
$dbname = "espace_produits";
  	$categorie = $_POST['categorie'];
  	$type =  $_POST['type'];
  	$nom = $_POST['nom'];
  	$etat = $_POST['etat'];
  	$disponible = $_POST['disponible'];
  	$garantie = $_POST['garantie'];
  	$prix = $_POST['prix'];
  	$solde = $_POST['solde'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$sql = "UPDATE produits SET categorie='$categorie',type='$type',nom='$nom',etat='$etat',disponible='$disponible',garantie='$garantie',prix='$prix',solde='$solde'  where id=$id";
if (mysqli_query($conn, $sql)) {

header("Location:afficher_product.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
      
?>