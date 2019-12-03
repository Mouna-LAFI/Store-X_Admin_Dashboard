
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 
</head>
<body>
<?php include 'test.php';?>

<br>
<br>
<br>


        <?php
	 
 $connect = mysqli_connect("localhost", "root", "", "espace_produits");  
 $query ="SELECT * FROM produits WHERE (panier='added' )"; 
 $result = mysqli_query($connect, $query);  
 
 ?> 
 <div>	
 <CENTER><TABLE width=10% border=1 class="table  ">

    <thead class="thead">
      <tr >
	   <th>ID</th>
	   <th>Image</th>
	   <th>Nom</th>
       <th>Quantité</th>
       <th>Prix</th>
      </tr>
    </thead>



   	<?php  
	while($donnees = mysqli_fetch_array($result))  
{
 ?>
 <form action="add_quantite.php" method="GET">
   <tr> 
   <td width=3%><input type="text" name="id" value="<?php echo $donnees['id'];?>" readonly> </td>
   <td width=3%> <?php   echo "<img src='images/" . $donnees['image']. "' height='100' width='100'> ";?></td>
   <td width=3% ><?php echo $donnees['nom'];?></td>
   <td width=3% ><input type="number" name="quantite" min="1" max="100"> 

</td>
   <td width=3%><?php echo $donnees['prix'];echo"&nbsp";echo'TD';?></td>
  <td >
  <a href="delete_panier.php?id=<?php echo $donnees['id'];?>" onclick="return confirm('Voulez-vous supprimer ce contenu ?');">
  <i class="far fa-trash-alt"style="color:red"></i></a>&nbsp;&nbsp;&nbsp;
   <input type="submit" class="btn btn-warning"name="ajouter" value="commander" onclick="return confirm('Voulez-vous commander ce contenu ?');">  

	</tr> 
            <?php
            }
            ?>
</CENTER>
  </table>
</div>

<br>
<br>
<br>
<?php include 'footer.php';?>






</body>
</html>


