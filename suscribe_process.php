<?php // Ceci est le fichier php qui traite la soumission du  formulaire d'incription ?>;
<?php Include "header.php" ?>

<?php 

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    // The connexion variable  is created.
    $connection = mysqli_connect("localhost","root","","php_project");
        // If The connexion is established or not.
        if (!$connection)
        {
        echo"Database connexion failed";
        }
        else
        {
            
                $query0 = "SELECT COUNT(userEmail) FROM users WHERE userEmail='$email';"; 
                //1- Pay attention to the Double quote versus single quote, 2- All the query in double quote including his ';' 3- ; at the end.
                $result0 = mysqli_query($connection,$query0); 
                
              
                # Check if result greater then 0
                while($rowData = mysqli_fetch_assoc($result0))
                        {
                        $adressedejapris = $rowData["COUNT(userEmail)"];        
                        }
                
                        if ($adressedejapris !=0) 
                        {
                        echo "<br>";
                        echo "<h3 class='h5'> Cette adresse Email existe déja ".$adressedejapris." fois dans la base de données.... </h3>";
                     }
                else {
                    $query = "INSERT INTO users VALUES (DEFAULT,'$name','$password','$email');"; 
                    //1- Pay attention to the Double quote versus single quote, 2- All the query in double quote including his ';' 3- ; at the end.

                    //Execution of the query. 
                    $result = mysqli_query($connection,$query); 
                        
                    if(!$result) {                                 // If the result failed
                            echo "<br>";
                            die('Query FAILED' . mysqli_error($connection));
                        }
                        else{
                            echo "<br>";
                            echo "<h3 class='h3'>Congratulations !<h3>";
                            echo "<br>";
                            echo "<h3 class='h5'> Your suscription has successfully been processed.Thank you for your interest.... </h3>";
                        }
                }

        }       
    
}

?>

<div class="container m-auto">
<svg xmlns="http://www.w3.org/2000/svg" width="20rem" height="20rem" fill="#150452" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
</div>




