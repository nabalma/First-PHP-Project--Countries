<?php // Ceci est le formulaire d'incription ?>

<?php Include "header.php" ;?>

<body>

<div class=container>
<h3>Login Form</h3>  
    <form action="Seconnecter.php" method="post">
            <div class="row">

                <div class="col mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#1C0471" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail3" name="email">
                  </div>

                <div class="col mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#1C0471" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword3"name="password">
                </div>

              
                <div class="col mb-3 d-flex align-items-end">
                
                  <button type="submit" class=" btn btn-outline-primary" name="submit">Se connecter</button>
                </div>

          </div>
    </form>
  </div>

</body>
</html>