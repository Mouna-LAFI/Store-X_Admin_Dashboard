<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "espace_produits");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$categorie = mysqli_real_escape_string($db, $_POST['categorie']);
  	$type = mysqli_real_escape_string($db, $_POST['type']);
  	$nom = mysqli_real_escape_string($db, $_POST['nom']);
  	$etat = mysqli_real_escape_string($db, $_POST['etat']);
  	$disponible = mysqli_real_escape_string($db, $_POST['disponible']);
  	$processeur = mysqli_real_escape_string($db, $_POST['processeur']);
  	$systeme = mysqli_real_escape_string($db, $_POST['systeme']);
  	$memoire = mysqli_real_escape_string($db, $_POST['memoire']);
  	$disque = mysqli_real_escape_string($db, $_POST['disque']);
  	$carte = mysqli_real_escape_string($db, $_POST['carte']);
  	$garantie = mysqli_real_escape_string($db, $_POST['garantie']);
  	$prix = mysqli_real_escape_string($db, $_POST['prix']);
  	$solde = mysqli_real_escape_string($db, $_POST['solde']);

  	// image file directory
  	$target = "images/".basename($image);

	$sql = "INSERT INTO produits (categorie,type,nom,image,etat,disponible,processeur,systeme,memoire,disque,carte,garantie,prix,solde) VALUES ('$categorie','$type', '$nom','$image','$etat','$disponible','$processeur','$systeme','$memoire','$disque','$carte','$garantie','$prix','$solde')";

  	// execute query

if (mysqli_query($db, $sql)) {
echo "New record created successfully";
header("Location:afficher_product.php");}
  	elseif (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";header("Location:afficher_product.php");

  	}
	else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM produits");
?>