<?php // Ce formulaire, cest pour se connecter pour ceux qui ont un compte?>

<?php Include "header.php";?>

<?php 

if(isset($_POST['submit'])) {

   $password = $_POST['password'];
    $email = $_POST['email'];


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
            $result = mysqli_query($connection, "SELECT * FROM users;");

            # Die if connection net established
            if(!$result){
                die(mysqli_error($connection));
            }

            # Check if result greater then 0
            if (mysqli_num_rows($result) > 0){
                $count=0;
                while($rowData = mysqli_fetch_assoc($result)){
                   $count= $count + (in_array($email, $rowData, $strict = false) && in_array($password, $rowData, $strict = false));                   
                }

                if ($count) {
                    echo "<h3 class='h4'> Bienvenu (e)! <h3>", $email;
                    echo " <h3 class='h4'>Vous etes connecté avec succès....<h3>";    
                }
                else
                {
                    echo" <h3 class='h4'>Connexion rejetée. <br> Vérifier votre saisie, ou  Inscrivrez-vous, si vous ne l'êtes pas encore. ..<h3>"; 

                }

                
            }
           

        }
      
    

}

?>

