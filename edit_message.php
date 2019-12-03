<?php include 'header.php';?>

<div class="main-content">
       <?php
 $id=$_GET['id'];
 $connect = mysqli_connect("localhost", "root", "", "espace_membre");  
 $query ="SELECT * FROM contact WHERE (id=$id) ";  
 $result = mysqli_query($connect, $query);  
 ?> 
 <form action="modifier_messages.php" method="POST">
   <table class="table table-striped">
    <thead>
      <tr>
	   <th>Id</th>
        <th>Objet</th>
        <th>Email</th>
        <th>Reference</th>
        <th>Message</th>
      </tr>
    </thead>

   	<?php  
	while($donnees = mysqli_fetch_array($result))  
{
 ?>
   <tr>
   <td><?php echo $donnees['id'];?></td>
   <td><?php echo $donnees['objet'];?></td>
   <td><?php echo $donnees['mail'];?></td>
   <td><?php echo $donnees['reference'];?></td>
   <td><?php echo $donnees['message'];?></td>

	</tr>
   	
            <?php
            }
            ?>
  </table>

<br><div  align="center">
<button class="au-btn au-btn-icon au-btn--blue"onclick="return alert('modification terminée');" >Modifier</button> 
</div></form></div>


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
