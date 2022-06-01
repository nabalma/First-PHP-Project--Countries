<?php ob_start(); ?>
<?php // Ce formulaire, cest voir tous les pays pour afficher ses données ?>
<?php Include "Entete.php"?>


<div class="container">
<h2 class="h3">LISTE DE TOUS LES PAYS</h2>
<table class="table table-striped table-hover table-responsive">
<tr>
<th>Ref Pays</th>
<th>Nom Pays</th>
<th>Capitales</th>
<th>Continents</th>
<th>Drapeau</th>
<th>Suppression</th>
<th>Mise à Jour</th>
</tr>

<?php 

 // The connexion root variable  is created.
 $connection = mysqli_connect("localhost","root","","php_project");
 // If The connexion is established or not.
 if (!$connection)
 {
 echo"<h3 class='h5'> Sorry, Database is currently inaccessible .</h3>";
 }
 else
 {
     // Requete descente des inscrits pour Verification des credentials
     $result = mysqli_query($connection, "SELECT * FROM pays;");

   
     # Die if connection net established
     if(!$result)
     {
         die(mysqli_error($connection));
     }
     else
     {
           if(!$result){
                die(mysqli_error($connection));
            }

            if (mysqli_num_rows($result) > 0) {
                   
                    while($rowData = mysqli_fetch_assoc($result)){

                        
                   
                   
                   
                   echo"<tr>";
                   echo"<td>". $rowData["RefPays"];echo"</td>";   
                   echo"<td>". $rowData["nomPays"];echo"</td>";         
                   echo"<td>". $rowData["capitalPays"];echo"</td>"; 
                   echo"<td>". $rowData["continentPays"];echo"</td>";
                   echo "<td>";echo'<img src="'.$rowData['urlDrapeau'].'" alt="" width="45" height="30">';echo"</td>";
                   echo"<td>"."<a href='Liste de tous Pays.php?suppression={$rowData["RefPays"]}'>Supprimer</a>";echo"</td>";
                   echo"<td>"."<a href='Liste de tous Pays.php?miseajour={$rowData["RefPays"]}'>Editer</a>";echo"</td>";
                   echo"</tr>";

                  
                } 
}
     }
 }

?>

<?php 
if (isset($_GET["suppression"])) {
    $selection_pr_suppression = $_GET["suppression"];

    // Requete suppression
    $result = mysqli_query($connection, "DELETE FROM pays WHERE refPays = $selection_pr_suppression ;");
    header("Location:Liste de tous Pays.php");
}
?>


<?php 
if (isset($_GET["miseajour"])) {
    $selection_pr_editer = $_GET["miseajour"];

    // Requete selection
    $result = mysqli_query($connection, "SELECT * FROM pays WHERE refPays = $selection_pr_editer ;");
    //header("Location:Liste de tous Pays.php");

    if (mysqli_num_rows($result) > 0) {
                   
        while($row = mysqli_fetch_assoc($result)){
            $nomPays_edit=$row["nomPays"];
            $nomCapitale_edit=$row["capitalPays"];
            $nomContinent_edit=$row["continentPays"];
            $nomCapitale_edit=$row["capitalPays"];
            $urlDrapeau_edit=$row["urlDrapeau"];
    } 

} 

}
?>



</table>

<hr>
<h3 class="h2">Modifier un Pays</h3>


<form action="confirmation_Inscription_Pays.php" method="post">

<div class="mb-0">
    <label for="exampleInputName" class="form-label">Nom du Pays</label>
    <input type="text" class="form-control text-success" id="exampleInputName" name ="nom" value = "<?php if(isset($_GET["miseajour"])){echo $nomPays_edit;} ?>">
  </div>

  <div class="mb-0">
    <label for="exampleInputcapital" class="form-label">Capitale</label>
    <input type="text" class="form-control text-success " id="exampleInputcapital" name ="capitale" value = "<?php if(isset($_GET["miseajour"])){echo $nomCapitale_edit;}?>">
  </div>

  <div class="mb-0">
    <label for="exampleInputcontinent" class="form-label">Continent</label>
    <input type="text" class="form-control text-success" id="exampleInputcontinent"  name ="continent" value = "<?php if(isset($_GET["miseajour"])){echo $nomContinent_edit;}?>">
   
  </div>

  <div class="mb-1">
    <label for="exampleInputdrapeau" class="form-label">Lien Drapeau</label>
    <input type="text" class="form-control text-success" id="exampleInputdrapeau"  name ="drapeau" value = "<?php if(isset($_GET["miseajour"])){echo $urlDrapeau_edit;}?>">
   
  </div>
  

  <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-outline-success" name ="submit">Mettre à jour </button>
  </div>

</form>









<?php Include "Pied.php";?>
</div>















