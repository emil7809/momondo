      <div id="trip_details">
        <div>
          <p>Round-Trip</p>
          <?= $_show_more_arrow ?>
        </div>
        <div>
          <p>1 adult</p>
          <?= $_show_more_arrow ?>
        </div>
        <div>
          <p>Economy</p>
          <?= $_show_more_arrow ?>
        </div>
        <div>
          <p>0 bags</p>
          <?= $_show_more_arrow ?>
        </div>
      </div>

      <form id="flight_form">

        <?php
        if ($_title == 'Momondo') {
          echo ' <div id="from_to_container" class="blue_border">';
        }
        if ($_title == 'Flight Search') {
          echo ' <div id="from_to_container">';
        } ?>


        <div id="from-container">
          <div class="input-caontainer">
            <?= $_airplane ?>
            <input id="from-input" type="text" placeholder="From?" oninput="show_from_results()">
          </div>
          <div id="from-results"></div>
        </div>
        <?php
        if ($_title == 'Momondo') {
          echo '<div id="switch" class="switch_blue_border">';
        }
        if ($_title == 'Flight Search') {
          echo '<div id="switch">';
        } ?>

        <?= $_arrows ?>
        </div>
        <div id="to-container">
          <div class="input-caontainer">
            <?= $_airplane ?>
            <input id="to-input" type="text" placeholder="To?" oninput="show_to_results()">
          </div>
          <div id="to-results"></div>
        </div>
        </div>
        <?php
        if ($_title == 'Momondo') {
          echo '<div id="time_container" class="blue_border">';
        }
        if ($_title == 'Flight Search') {
          echo '<div id="time_container">';
        } ?>

        <div class="input-caontainer">
          <input type="date">
          <div class="line"></div>
          <input type="date">
        </div>
        </div>
        <?php
        if ($_title == 'Momondo') {
          echo '<button type="button" class="button_type_3">Search</button>';
        }
        if ($_title == 'Flight Search') {
          echo '<button type="button">Search</button>';
        } ?>


      </form>