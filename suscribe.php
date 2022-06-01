<?php // Ceci est le formulaire d'incription ?>

<?php Include "header.php";?>

<body>

 <!-- form  -->
<div class=container>
 <h3>Suscription Form</h3>
<form action="suscribe_process.php" method="post">

<div class="mb-1">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name ="name">
  </div>

  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name ="password">
  </div>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-1 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="checkSuscription">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
  </div>

</form>

</div>


</body>
</html>