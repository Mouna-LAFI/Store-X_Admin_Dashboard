<?php


$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM admin WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO admin(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
         header("Location: connexion.php");
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<!DOCTYPE html>
<html >

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
   <body>
 <div class="main-content" align="center">
			 <div class="col-lg-8">
                                <div class="card" align="center">
                                    <div class="card-header"><b>Inscription d'un nouveau Admin</b></div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
						<input type="text"  id="pseudo" name="pseudo" placeholder="Nom Admin "class="form-control" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
<div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
	                    <input type="email" placeholder="Email" id="mail" name="mail" class="form-control" value="<?php if(isset($mail)) { echo $mail; } ?>" />
<div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    
						<input type="email" placeholder="Confirmer votre Email" id="mail2" name="mail2" class="form-control" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
							                                                <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
																			</div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                 
				        <input type="password" placeholder="Mot de passe " id="mdp" name="mdp"class="form-control" />
   <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                   
				         <input type="password" placeholder="Confirmer votre mot de passe " id="mdp2" name="mdp2" class="form-control"/>
						  <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">

			<input class="btn btn-success" type="submit" name="forminscription" value=" Ajouter" />

                                            </div>
                                        </form>
                                    </div>
                                </div>
                           
                         
                       

                
            </div>
			 <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
	</body>
	</html>