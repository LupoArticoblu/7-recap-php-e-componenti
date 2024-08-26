<?php
 include_once('partials/head.php');  
?>
<body>
 <?php
  include_once('partials/header.php');
 ?>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Login</h1>
          <!-- la action della form punta su se stesso, quindi riconosciamo tramite il var dump di $_SERVER la uri corrente -->
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
              <label for="email" class="form-label">Email adress</label>
              <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">

            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php
    include_once('partials/footer.php');
  ?>

  <script src="./js/main.js"></script>
</body>
</html>