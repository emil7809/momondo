<?php
require_once __DIR__ . '/_x.php';
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

<body oncontextmenu="return false;">

  <header>
    <nav>
      <div id="logo_container">
        <a href="/"><img id="logo" src="img/momondo.png" alt="momondo.png"></a>
        <?php
        if ($_title == 'Momondo') {
          require_once __DIR__ . '/svgs.php';
          echo $_mini_logo;
        }
        ?>
      </div>

      <div class="flex">

        <?php
        if ($_title == 'Flight Search') {
          echo '<a href="flight_search" class="orange white-hover">Flights Search</a>';
        } else {
          echo '<a href="flight_search" class="orange-hover">Flights Search</a>';
        }

        ?>

        <?php
        if ($_title == 'Trips') {
          echo '<a href="trips" class="orange white-hover">Trips</a>';
        } else {
          echo '<a href="trips" class="orange-hover">Trips</a>';
        }
        ?>


        <div class="flex" id="login-button">
          <?php require_once __DIR__ . '/svgs.php';
          echo $_man ?>

          <a id="login-letteres" href="signin">Sign in</a>

        </div>

        <div class="flex">
          <img id="denmark-icon" src="img/denmark-icon.png" alt="denmark icon">
          <a href="danish" id="dansk" class="orange-hover">Dansk</a>
        </div>
      </div>
    </nav>
  </header>

  <main>