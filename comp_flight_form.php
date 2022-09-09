      
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

        <div id="from-container">
        <div class="input-caontainer">
          <?= $_airplane ?>
           <input id="from-input" type="text" placeholder="From?"
              oninput="show_from_results()"
              onfocus="show_from_results_focus()"
            >
        </div>
        <div id="from-results"></div>
        </div>
        <div id="switch">
          <?= $_arrows ?>
        </div>

        <div id="to-container">
        <div class="input-caontainer">
            <?= $_airplane ?>
            <input id="to-input" type="text" placeholder="To?"
              oninput="show_to_results()"
              onblur="hide_to_results()"
            >
        </div>
          <div id="to-results"></div>
        </div>

        <div id="time_container">
          <div class="input-caontainer">
            <input type="date">
            <div class="line"></div>
            <input type="date">
          </div>
        </div>
        <button type="button">Search</button>
      </form>