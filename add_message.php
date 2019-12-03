<?php include 'header.php';?>

			<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
   $objet = $_POST['objet'];
   $refernce = $_POST['reference'];
   $message = $_POST['message'];

   if(!empty($_POST['objet']) AND !empty($_POST['reference']) AND !empty($_POST['message'])) {
         
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM contact WHERE objet = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                     $insertmbr = $bdd->prepare("INSERT INTO contact(objet, reference, message) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($objet, $reference, $message));
			   $erreur = "Votre message a été bien créé ! <br> <a href=\"afficher_message.php\">consulter liste des messages</a>";}
					 
                  
               } 
            } 
         
      
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }

?>
            <div class="main-content">
			 <div class="col-lg-8">
                                <div class="card" align="center">
                                    <div class="card-header"><b>Inscription d'un nouveau Message</b></div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
						<input type="text"   name="objet" placeholder="objet "class="form-control" value="<?php if(isset($objet)) { echo $objet; } ?>" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
	                    <input type="text" placeholder="reference"  name="reference" class="form-control" value="<?php if(isset($reference)) { echo $reference; } ?>" />

                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
						<input type="text" placeholder="message"  name="message" class="form-control" value="<?php if(isset($message)) { echo $message; } ?>" />
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

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
