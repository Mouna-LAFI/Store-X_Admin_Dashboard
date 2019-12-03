<?php include 'header.php';?>
            <!-- MAIN CONTENT-->



 
            <div class="main-content">
			 <div class="col-lg-8">
    	<form method="POST" action="add_product.php" enctype="multipart/form-data">
		
      <table class="table">

    <thead>
      <tr>
	   <th >categorie</th>
       <th >type</th>
	   <th>nom</th>
       <th>etat</th>
       <th>disponible</th>


	   </tr>
	
    </thead>
   <tr>
   <td ><input type="text" name="categorie" > </td>
   <td><input type="text" name="nom" > </td>
   <td><input type="text" name="type" ></td>
   <td><input type="text" name="etat" ></td>
   <td><input type="text" name="disponible" ></td>


   </tr></table></br>
         <table class="table">

   <thead>
      <tr>
	         <th>processeur</th>
	   <th>systeme</th>
       <th>memoire</th>
       <th>disque</th>
       <th>carte</th>
     
      </tr></thead>
   <tr>
   <td><input type="text" name="processeur" ></td>
   <td><input type="text" name="systeme" ></td>
   <td><input type="text" name="memoire" ></td>
   <td><input type="text" name="disque" ></td>
   <td><input type="text" name="carte" ></td>
   
</tr>  </table>
<table class="table">
  <thead><tr><th>garantie</th>
       <th>prix</th>
       <th>solde</th>
       <th>image</th></tr></thead>
	   
	   <tr><td><input type="text" name="garantie"></td>
   <td><input type="number" name="prix" ></td>
   <td><input type="text" name="solde" ></td>
  	<td><input type="file" name="image"></td></tr></table>

  <div align="center">
 <button class="btn btn-danger" type="submit" name="upload" value="upload" >Ajouter un produit</button>
 </div>

   </form>  </div></div>

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
