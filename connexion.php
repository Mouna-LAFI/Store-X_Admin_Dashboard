<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudoadmin'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index2.php");
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <meta charset="utf-8">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   </head>
   <body>
   <br>
   <br>
   <br>
   <br>
      
	  <div align="center">
	  
<p style="color:green;font-size:50px;">Connexion</p>
		 <img  align="center"src="images/logo.png"width="100" height="100" alt="Avatar" class="avatar">

         <br /><br />
      <form method="POST" action="">
  <div class="form-group">
  <div class="input-group">
  							

    <label >Adresse Email </label><br>
    <input type="email" class="form-group form-control "	name="mailconnect" placeholder="Entrer votre email"><br>
		
		</div>
		</br>
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit</small>
  </div>
  <div class="form-group">
    <div class="input-group">
    <label >Mot de Passe</label><br>
    <input type="password" class="form-group form-control "  name="mdpconnect" placeholder="Entrer votre mot de passe ">
  </div>
  </br>
  </br>
    <div class="input-group">

    <input class="btn btn-success btn btn-primary btn-lg btn-block login-button" type="submit" name="formconnexion" value="Se connecter !" />


</form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>