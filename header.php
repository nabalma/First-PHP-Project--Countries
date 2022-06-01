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
 <h1 class="h2 text-center">PROJET PERSONNEL PHP</h1>   
    <header>
        <!--Le navbar de lentete-->
        <nav class="mt-1 navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
            <!--Le logo Bootstrap  dans le navbar-->
                       
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
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
                    <a class="nav-link active" aria-current="page" href="accueil.php"
                    >Accueil</a
                    >
                </li>

                <li class="nav-item">
                    <a
                    class="nav-link active"
                    aria-current="page"
                    href="suscribe.php"
                    >S'enregistrer</a
                    >
                </li>

                <li class="nav-item">
                    <a
                    class="nav-link active"
                    aria-current="page"
                    href="login.php"
                    >Se connecter</a
                    >
                </li>

                <li class="nav-item dropdown">
                    <a
                    class="nav-link active dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >
                    Références
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a
                        class="dropdown-item"
                        href="https://getbootstrap.com/"
                        target="_blank"
                        >Bootstrap 5</a
                        >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a
                        class="dropdown-item"
                        href="https://www.php.net/manual/fr/"
                        target="_blank"
                        >PHP</a
                        >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a
                        class="dropdown-item"
                        href="https://dev.mysql.com/doc/"
                        target="_blank"
                        >Mysql</a
                        >
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>


</body>
</html>