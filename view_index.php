<?php $_title = 'Momondo';
if (empty(session_id()) && !headers_sent()) {
  session_start();
}
require_once __DIR__ . '/comp_header.php'; ?>

<div class="center_container">
  <h1>Find and compare cheap flights</h1>
</div>
<div class="center_container">
  <?php require_once __DIR__ . '/comp_flight_form.php'; ?>
</div>

<script src="app.js"></script>
<?php require_once __DIR__ . '/comp_footer.php' ?>