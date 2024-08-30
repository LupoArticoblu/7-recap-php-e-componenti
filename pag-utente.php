<?php
  
  include_once('partial/head.php');
  if(!isset($_SESSION['userLogged'])) {
    header('Location: login.php');
  }
?>

<body>
  <?php
    include_once('partial/header.php');
  ?>
  <main>
    <div class="container">
      <h1>ciao <?php echo $_SESSION['userLogged']['name'] ?></h1>
    </div>  
  </main>

  <?php
    include_once('partial/footer.php');
  ?>

  <script src="./js/main.js"></script>
</body>
