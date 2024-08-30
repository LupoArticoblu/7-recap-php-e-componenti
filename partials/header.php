<?php
  //var_dump($_SERVER);
  session_start();
  if ($_SERVER['HTTP_HOST'] == 'localhost:8080') {
    $folder =  'personal-homepage/';
  } else {
    $folder = '';
  }
  
  $url = $_SERVER['REQUEST_SCHEME']. '://' . $_SERVER['HTTP_HOST'] .'/'. $folder;

  $string= file_get_contents('./partials/root.json');
  $menu = json_decode($string, true);
?>
<header>
  <nav>
    <ul>
      <?php foreach ($menu as $item) { ?>
        <?php if($item['public'] || isset($_SESSION['userLogged'])) { ?>
          <li><a href="<?php echo $url ?><?php echo $item['url'] ?>"><?php echo $item['name'] ?></a></li>
        <?php } ?>
      <?php } ?>
    </ul>

  </nav>
</header>