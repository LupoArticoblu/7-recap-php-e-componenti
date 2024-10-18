<?php
  session_start();
  if(!isset($_SESSION['userLogged'])) {
    header('Location: login.php');
  }
  include_once('partials/head.php');
?>

<body>
  <?php
    include_once('partials/header.php');
  ?>
  <main>
    <div class="container">
      <h1>ciao <?php echo $_SESSION['userLogged']['name'] ?></h1>
      <p>Indirizzo: <?php echo $_SESSION['userLogged']['address'] ?></p>
    </div>  
  </main>

  <?php
    include_once('partials/footer.php');
  ?>

  <script src="./js/main.js"></script>
</body>
