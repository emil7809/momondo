<?php $_title = 'Flight Search';
$_current_page = 'flight_search';
require_once __DIR__ . '/comp_header.php'; ?>

<main id="flight_main">
  <div id="flights-search">
    <div class="center_container">
      <?php require_once __DIR__ . '/comp_flight_form.php'; ?>
    </div>
  </div>

  <div id="container">
    <div id="left">
      left
    </div>
    <div id="right">
      right
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/comp_footer.php' ?>