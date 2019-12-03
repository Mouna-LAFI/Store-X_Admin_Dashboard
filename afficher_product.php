<?php include 'header.php';?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

            <!-- MAIN CONTENT-->
            <div class="main-content">

			 <div align="right">
									    <button class="au-btn au-btn-icon au-btn--blue" onclick="window.location='upload_product.php'">

                                        <i class="zmdi zmdi-plus"></i>Ajouter un produit</button> </div>
										<br>
										<br>
 
  <div class="container">
  <table class="table table-striped" width="600 px" height="100%">
    <thead>
      <tr>
	   <th>Id</th>
	   <th>Categorie</th>
       <th>Type</th>
	   <th>Nom</th>
       <th>Image</th>
       <th>Etat</th>
       <th>Disponible</th>
       <th>Garantie</th>
       <th>Prix</th>
       <th>Solde</th>
       <th>Action</th>

      </tr>
    </thead>
	
	
	
	
	
	
	
	<?php


$con = mysqli_connect("localhost","root","","espace_produits");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 4;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `produits`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($con,"SELECT * FROM `produits` LIMIT $offset, $total_records_per_page");
     
while($donnees = mysqli_fetch_array($result))  
{
 ?>
 
 
 
   <tr> 
   <td ><?php echo $donnees['id'];?> </td>
   <td ><?php echo $donnees['categorie'];?></td>
   <td  ><?php echo $donnees['type'];?></td>
   <td  ><?php echo $donnees['nom'];?> </td>
      <td><?php echo "<img src='images/".$donnees['image']."' height='100' width='100' >";?></td>
   <td><?php echo $donnees['etat'];?></td>
   <td><?php echo $donnees['disponible'];?></td>
   <td><?php echo $donnees['garantie'];?></td>
   <td><?php echo $donnees['prix'];?></td>
   <td><?php echo $donnees['solde'];?></td>


 
  <td >
  <a href="edit_product.php?id=<?php echo $donnees['id'];?> "style="text-decoration:none" onclick="return confirm('Voulez-vous modifier ce contenu ?');">
  <button class="btn btn-danger">modifier</button>
  </a>&nbsp;&nbsp;&nbsp;

  <a href="supprimer_product.php?id=<?php echo $donnees['id'];?>" style="text-decoration:none"onclick="return confirm('Voulez-vous supprimer ce contenu ?');"><button class="btn btn-success">supprimer</button>
  </a>
	</tr> 
            <?php
            }
            ?>
  </table>
 
 

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." sur ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Précédente</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Suivante</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Dernière &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>
</div></div></div>           
         


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
