<?php Include "Entete.php"?>
<?php // Ce formulaire, cest pour selectionner un pays pour afficher ses données ?>


<div class="container">
        <h2 class="h3">SELECTION PAYS</h2>

        <div class="row">
                        <div class="col">
            <form action="SelectionPays.php" method="post">

                    <select name ="selection" class="form-select" aria-label="Default select example">
                    <option selected>Selectionner un pays</option>

                    </div>
                    <div class="col">
                    <button type="button" class="btn btn-secondary" name ="submit">Afficher</button>
                    </div>
            </form>


                    
        </div>


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
                        $result0 = mysqli_query($connection, "SELECT nomPays FROM pays;");

                        # Die if connection net established
                            if(!$result0)
                            {
                                die(mysqli_error($connection));
                            }
                            else
                            {
                                if(!$result0){
                                        die(mysqli_error($connection));
                                    }

                                    if (mysqli_num_rows($result0) > 0) 
                                    {                                        
                                            while($rowData = mysqli_fetch_assoc($result0))
                                            {
                                                echo'<option value="'.$rowData["nomPays"].'">'.$rowData["nomPays"]."</option>";                          
                                            } 
                                    }
                            }
                    }

                    
         ?>                                            

        <hr>
        </select>
        <div class="col"></div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-8">
                    <table class="table">
                    <tr>
                    <th>Nom Pays</th>
                    <th>Capitales</th>
                    <th>Continents</th>
                    <th>Drapeau</th>
                    </tr>

                    <?php 



    // Requete descente des inscrits pour Verification des credentials
     $result = mysqli_query($connection, "SELECT * FROM pays;");

   
     # Die if connection net established
     if(!$result)
     {
         die(mysqli_error($connection));
     }
     else
     {
           if(!$result)
            {
                die(mysqli_error($connection));
            }

            if (mysqli_num_rows($result) > 0) 
            
            {
                   
                    while($rowData = mysqli_fetch_assoc($result))
                    {

                 echo"<tr>";
                   echo"<td>". $rowData["nomPays"];echo"</td>";         
                   echo"<td>". $rowData["capitalPays"];echo"</td>"; 
                   echo"<td>". $rowData["continentPays"];echo"</td>";
                  
                   echo "<td>";echo'<img src="'.$rowData['urlDrapeau'].'" alt="" width="45" height="30">';echo"</td>";

                   echo"</tr>";

                  
                   } 
            }
     }

     ?>










                    </table>
            </div>
        </div>
           
</div>



