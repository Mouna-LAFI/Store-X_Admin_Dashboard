<?php include 'header.php';?>

            <!-- MAIN CONTENT-->
       <?php
 $id=$_GET['id'];
 $connect = mysqli_connect("localhost", "root", "", "espace_produits");  
 $query ="SELECT * FROM produits WHERE (id=$id) ";  
 $result = mysqli_query($connect, $query);  
 ?> 
  <div class="row">
 <div class="col-2">

 <div class="main-content">
 <form action="modifier_product.php" method="POST">
  <table class="table table-striped" border="1">
     	<?php  
	while($donnees = mysqli_fetch_array($result))  
{
 ?>
  <thead>
      <tr>
	   <th>Id</th>
	   <th>categorie</th>
       <th>Type</th>
	   <th>Nom</th>
       <th>Etat</th>      </tr>
	   </thead>
	   <tr>
   <td><input type="text" name="id" readonly value=<?php echo $donnees['id'];?> > </td>
   <td>  <input type="text" name="categorie" value= <?php echo $donnees['categorie'];?>> </td>
   <td>  <input type="text" name="type" value= <?php echo $donnees['type'];?>> </td>
   <td>  <input type="text" name="nom" value= <?php echo $donnees['nom'];?>> </td>
   <td>  <input type="text" name="etat" value= <?php echo $donnees['etat'];?>> </td></tr>
 </table> 
<table class="table table-striped"border="1">
 <thead><tr>
       <th>Disponible</th>
       <th>Garantie</th>
       <th>Prix</th>
       <th>Solde</th>
       <th>Action</th>

      </tr>
    </thead><tr>
 <td>  <input type="text" name="disponible" value= <?php echo $donnees['disponible'];?>> </td>
   <td>  <input type="text" name="garantie" value= <?php echo $donnees['garantie'];?>> </td>
   <td>  <input type="text" name="prix" value= <?php echo $donnees['prix'];?>> </td>
   <td>  <input type="text" name="solde" value= <?php echo $donnees['solde'];?>> </td>
   <td><div  align="center">
<input><button class="au-btn au-btn-icon au-btn--blue"onclick="return alert('modification terminée');" >Modifier</button> </input>
</div></td>
                </tr> 
            <?php
            }
            ?>
  </table>

</form></div></div></div>

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
     


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
