<?php
require_once __DIR__ . '/_x.php';
require_once __DIR__ . '/svgs.php';
require_once __DIR__ . '/comp_dictionary.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $_title ?? 'Document'; ?>
  </title>
  <link rel="stylesheet" href="app.css">
</head>

<body oncontextmenu="toggle_menu(); return false">
  <?php require_once __DIR__ . '/comp_signin.php'; ?>
  <div id="menu_container" onclick="toggle_menu()">
    <div id="menu"></div>
  </div>
  <header>
    <nav>
      <div id="logo_container">
        <button id="burger" onclick="toggle_menu()">
          <?= $_burger  ?>
        </button>
        <button id="burger_x" style="display:none;" onclick="toggle_menu()">
          <?= $_burger_x  ?>
        </button>

        <a class="toggle_mobile" href="/">
          <?= $_mini_logo  ?>
        </a>
        <a href=<?= '/?language=' . $language ?>><img id="logo" class="toggle_700" src="img/momondo.png" alt="momondo.png" /></a>

      </div>

      <div class="flex">




        <a href=<?= 'trips/?language=' . $language ?> class="orange-hover">Trips</a>

        <div class="toggle_700_flex" id="login-button">
          <?= $_man ?>
          <?php
          ini_set('display_errors', 0);
          session_start();
          if (!$_SESSION) {
            echo '<a class="login-letteres" onclick="toggle_module()">Sign in</a>';
          }
          if ($_SESSION) {
            echo '<a class="login-letteres" href="/bridge_signout.php">Emily</a>';
          }
          ?>



        </div>

        <a onclick="toggle_module()" class="toggle_mobile">
          <?= $_man ?>
        </a>

        <div class="flex">

          <img id="flag-icon" <?php
                              if ($language == 'en') {
                                echo 'src="img/dk-flag.svg"';
                              }
                              if ($language == 'dk') {
                                echo 'src="img/gb-flag.svg"';
                              }
                              ?> alt="flag icon" />


          <?php
          if ($language == 'en') {
            echo '<a id="dansk" href="/?language=dk" class="orange-hover toggle_700">Dansk</a>';
          }
          if ($language == 'dk') {
            echo '<a id="dansk" href="/?language=en" class="orange-hover toggle_700">English</a>';
          }

          ?>

        </div>
      </div>
    </nav>
  </header>