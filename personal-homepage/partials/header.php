<?php 
  if($_SERVER['HTTP_HOST'] == 'localhost:8888'){
    $folder = 'personale-homepage/';
  }else{
    $folder = '';
  };
  $userLogged = false;
  if(isset($_SESSION['userLogged'])){
    $userLogged = true;
  }

  $url = "http://localhost/7-recap-php-e-componenti/personal-homepage/";

  $string = file_get_contents('./db/root.json');
  $menu = json_decode($string, true);
?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php foreach($menu as $link){ ?>
            <?php if((!$link['public'] && $userLogged) || $link['public']){ ?>
            <li class="nav-item">
              <a href="<?php echo $url ?><?php echo $link['url']?>" class="nav-link"><?php echo $link['name'] ?></a>
            </li>
            <?php } ?>
          <?php } ?>
          <?php if(!$userLogged){ ?>
            <li class="nav-item">
              <a href="<?php echo $url ?>login.php" class="nav-link">login</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
