<?php $_title = 'Flight Search'; require_once __DIR__.'/comp_header.php'; ?>

<div id="flights-search">
    <form>
      <div id="from-container">
      <div class="input-caontainer">
        <?php echo $_airplane ?>
         <input id="from-input" type="text" placeholder="From?"
            oninput="show_from_results()"
            onfocus="show_from_results_focus()"
          >
      </div>
        <div id="from-results"></div>
      </div>

      <div id="switch">
        <?php echo $_arrows ?>
      </div>

      <div id="to-container">
      <div class="input-caontainer">
          <?php echo $_airplane ?>
          <input id="to-input" type="text" placeholder="To?"
            oninput="show_to_results()"
            onblur="hide_to_results()"
          >
      </div>
        <div id="to-results"></div>
      </div>
    </form>
  </div>

  <div id="container">
    <div id="left">
      left
    </div>
    <div id="right">
      right
    </div>
  </div>
<?php require_once __DIR__.'/comp_footer.php' ?>