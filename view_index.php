<?php $_title = 'Momondo';

require_once __DIR__ . '/comp_header.php'; ?>

<main id="index">
  <div class="center_container">
    <h1><?= $dictionary[$language . '_index_h1'] ?></h1>
  </div>
  <div class="center_container">
    <?php require_once __DIR__ . '/comp_flight_form.php'; ?>
  </div>

</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>