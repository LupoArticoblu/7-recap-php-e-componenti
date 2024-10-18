<?php
//inseriamo in tutte le pagine session start ma non nell'header
  session_start();  
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
          <h1>Homepage</h1>
          <p>Welcome to the homepage! Lorem ipsum, dolor sit amet consectetur adipisicing elit. At quia suscipit officiis. Laborum quaerat harum, perferendis, minus iusto voluptate obcaecati impedit deleniti saepe ea, doloremque unde nam. Consectetur, alias iure.</p>
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