<?php
$servername = "localhost";
$username = "root";
$password = "";
$id=$_POST['id'];
$dbname = "espace_membre";
$objet= $_POST['objet'];
$mail= $_POST['mail'];
$reference=$_POST['reference'];
$message=$_POST['message'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE contact SET objet='$objet',mail='$mail',message='$message',reference='$reference'  where id=$id";
if (mysqli_query($conn, $sql)) {

header("Location:afficher_messages.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
      
?>