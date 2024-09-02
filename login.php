<?php
  session_start();
 if(empty($_POST['email']) || empty($_POST['password'])) {
   $errorMsg = 'Inserisci username e password';
  }else{
    $string = file_get_contents('./db/user.json');
    $users = json_decode($string, true);
    //solo se trovo l'utente richiesto il valore tornerà true
    $validUser = false;
    foreach ($users as $user) {
      if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
        $validUser = true;
        
        $logged = $user;
      }
      if($validUser){
        $errorMsg = 'Login effettuato, benvenuto '. $logged['name'];
        $_SESSION['userLogged'] = $logged;
        header('Location: index.php');
      }else{
        $errorMsg = 'Login fallito';
      }  
    }
  }
  if(isset($_SESSION['userLogged'])) {
    header('Location: pag-utente.php');
  }
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
          <h3><?php echo $errorMsg ?></h3>
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