<?php include 'header.php';?>


            <div class="main-content">
			 <div class="col-lg-8">
                                <div class="card" align="center">
                                    <div class="card-header"><b>Inscription d'un nouveau Admin</b></div>
                                    <div class="card-body card-block">
                                        <form action="create_admins.php" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
						<input type="text"  id="pseudo" name="pseudo" placeholder="Nom admin "class="form-control" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
	                    <input type="email" placeholder="Email" id="mail" name="mail" class="form-control" value="<?php if(isset($mail)) { echo $mail; } ?>" />

                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
						<input type="email" placeholder="Confirmez votre email" id="mail2" name="mail2" class="form-control" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
							                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
				        <input type="password" placeholder="Mot de passe" id="mdp" name="mdp"class="form-control" />

                                                </div>
                                            </div>
											<div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
				         <input type="password" placeholder="Confirmer votre mot de passe " id="mdp2" name="mdp2" class="form-control"/>
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
            echo '<font color="green">'.$erreur."</font>";
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
