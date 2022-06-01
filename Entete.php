<?php // Ceci est lntete de toutes les pages ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JS and JS popper CDN links  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="suscription.css">

</head>
<body>
 <h1 class="h2 text-center">PROJET PERSONNEL PAYS (PHP)</h1>   
    <header>
        <!--Le navbar de lentete-->
        <nav class="mt-1 navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
            <!--Le logo Bootstrap  dans le navbar-->
                       
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>

            <!--Les liens contenus dans le navbar-->

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a
                    class="nav-link active"
                    aria-current="page"
                    href="inscrirePays.php"
                    >Inscrire un Pays</a
                    >
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Liste de tous Pays.php"
                    >Liste des Pays</a
                    >
                </li> 

                <li class="nav-item">
                    <a
                    class="nav-link active"
                    aria-current="page"
                    href="SelectionPays.php"
                    >Sélectionner un Pays</a
                    >
                </li>              
                </ul>
            </div>
            </div>
        </nav>
    </header>


</body>
</html>