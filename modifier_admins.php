<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$id=$_POST['id'];
$dbname = "espace_membre";
$pseudo=$_POST['pseudo'];
$mail=$_POST['mail'];
$mdp=sha1($_POST['motdepasse']);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE admin SET pseudo='$pseudo',mail='$mail',motdepasse='$mdp'  where id=$id";
if (mysqli_query($conn, $sql)) {

header("Location:afficher_admins.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
      
?>