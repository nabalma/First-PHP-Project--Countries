<?php // Ceci est le formulaire d'incription ?>

<?php Include "Entete.php";?>

<body>

 <!-- form  -->
<div class=container>
 <h3>Incrire un Pays</h3>
<form action="confirmation_Inscription_Pays.php" method="post">

<div class="mb-1">
    <label for="exampleInputName" class="form-label">Nom du Pays</label>
    <input type="text" class="form-control" id="exampleInputName" name ="nom">
  </div>

  <div class="mb-1">
    <label for="exampleInputcapital" class="form-label">Capitale</label>
    <input type="text" class="form-control" id="exampleInputcapital" name ="capitale">
  </div>

  <div class="mb-1">
    <label for="exampleInputcontinent" class="form-label">Continent</label>
    <input type="text" class="form-control" id="exampleInputcontinent"  name ="continent">
   
  </div>

  <div class="mb-1">
    <label for="exampleInputdrapeau" class="form-label">Lien Drapeau</label>
    <input type="text" class="form-control" id="exampleInputdrapeau"  name ="drapeau">
   
  </div>
  

  <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
  </div>

</form>

</div>


</body>
</html>

<?php  

if(isset($_POST['submit'])) {

$nom = $_POST['nom'];
$capitale = $_POST['capitale'];
$continent = $_POST['continent'];
$drapeau = $_POST['drapeau'];

// The connexion variable  is created.
$connection = mysqli_connect("localhost","root","","php_project");
    // If The connexion is established or not.
    if (!$connection)
    {
    echo"Database connexion failed";
    }
    else
    {              
                $query = "INSERT INTO pays VALUES (DEFAULT,'$nom','$capitale','$continent','$drapeau');"; 
                //1- Pay attention to the Double quote versus single quote, 2- All the query in double quote including his ';' 3- ; at the end.

                //Execution of the query. 
                $result = mysqli_query($connection,$query); 
                    
                if(!$result) {                                 // If the result failed
                        echo "<br>";
                        die('Query FAILED' . mysqli_error($connection));
                    }
                    else{
                        echo "<br>";
                        echo "<h3 class='h5'> Le pays '$nom' a bien été ajouté.... </h3>";
                    }
            

    }       

}

?>

<?php Include "Pied.php";?>