<?php // Ce formulaire, cest pour se connecter pour ceux qui ont un compte?>

<?php Include "Entete.php";?>

<div class="container">

    <h2 class="h3">SELECTION PAYS 2</h2>
    
<form action="SelectionPays.php" method="post">

    <div class="row">
        <div class="col-4">
                <select name ="selection" class="form-select" aria-label="Default select example">
                    <option selected>Selectionner un pays</option>
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
                </select> 

        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-secondary" name ="submit">Afficher</button>
        </div>

        <div class="col-6">

        </div>               
                   
    </div>
</form>

    <hr>
    <hr>
    <hr>


    <div class="row">
            <div class="col-4 d-none d-sm-block">

            </div>
            <div class="col-8">
                    <table class="table table-striped table-hover table-responsive ">
                        <tr>
                        <th>Nom Pays</th>
                        <th>Capitales</th>
                        <th>Continents</th>
                        <th>Drapeau</th>
                        </tr>

                        <?php

if(isset($_POST['submit'])) 
{

            $selection = $_POST['selection'];
            echo"Vous avez selectionné &nbsp <span class='h2'>$selection</span>";
     

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
                    $result = mysqli_query($connection, "SELECT * FROM pays WHERE nomPays='$selection';");

                
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
                }
}                                    

                        ?>

                     </table>

            </div>
                

    </div>


    <?php Include "Pied.php";?>
</div>