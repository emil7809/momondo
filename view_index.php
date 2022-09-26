<?php $_title = 'Momondo';
$_current_page = '';

require_once __DIR__ . '/comp_header.php'; ?>

<main id="index">
  <div class="center_container">
    <h1><?= $dictionary[$language . '_index_h1'] ?></h1>
  </div>
  <div class="center_container">
    <?php require_once __DIR__ . '/comp_flight_form.php'; ?>
  </div>




  <div class="center_container">
    <div class="card">
      <img src="https://www.momondo.co.uk/rimg/kimg/a/suppliers/7002899/21615c24171ef066.jpg?crop=true&height=365" alt="img" />
      <div class="flex_grow">
        <div>
          <h4>Live Happy and soar off this summer</h4>
          <p>
            Calling all sun and deal seekers! Get first dibs on flights available until April 2024
          </p>
        </div>
        <button>Book Now</button>
      </div>
    </div>
  </div>
  <div class="center_container">
    <div id="why_momondo">
      <h2>Here’s why travellers choose momondo</h2>
      <div class="why_elm flex">
        <div>
          <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px">
            <path d="M135 80c-8.271 0-15-6.729-15-15s6.729-15 15-15s15 6.729 15 15s-6.729 15-15 15zm0-20c-2.757 0-5 2.243-5 5s2.243 5 5 5s5-2.243 5-5s-2.243-5-5-5zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45s45 20.187 45 45s-20.187 45-45 45zm0-80c-19.299 0-35 15.701-35 35s15.701 35 35 35s35-15.701 35-35s-15.701-35-35-35zm-67.021 75.05L24.95 132.021c-6.643-6.643-6.645-17.396 0-24.041l70.657-70.657C100.328 32.601 106.605 30 113.284 30H155c8.271 0 15 6.729 15 15v38.027a5 5 0 1 1-10 0V45c0-2.757-2.243-5-5-5h-41.716a14.9 14.9 0 0 0-10.606 4.393L32.021 115.05a6.997 6.997 0 0 0 0 9.9l43.029 43.029c2.583 2.582 6.768 2.738 9.524.35a4.998 4.998 0 0 1 7.053.506a5 5 0 0 1-.506 7.053c-6.706 5.808-16.872 5.432-23.142-.838zm64.191-15.927l-14.943-9.963a5 5 0 0 1-1.387-6.934a4.999 4.999 0 0 1 6.934-1.387l7.227 4.817V115c0-2.762 2.238-5 5-5s5 2.238 5 5v30.657l7.227-4.817c2.299-1.534 5.401-.911 6.934 1.387s.911 5.402-1.387 6.934l-14.943 9.963a5.009 5.009 0 0 1-5.662-.001z">
            </path>
          </svg>
        </div>
        <div>
          <h4>Best travel deals</h4>
          <p>Find the best deals available from 900+ travel sites.</p>
        </div>
      </div>
      <div class="why_elm flex">
        <div>
          <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px">
            <path d="M100 180c-44.1 0-80-35.9-80-80s35.9-80 80-80s80 35.9 80 80s-35.9 80-80 80zm0-150c-38.6 0-70 31.4-70 70s31.4 70 70 70s70-31.4 70-70s-31.4-70-70-70z">
            </path>
            <path d="M91.5 128.5l-30-30c-2-2-2-5.1 0-7.1s5.1-2 7.1 0l26 26l36.5-45.6c1.7-2.2 4.9-2.5 7-.8c2.2 1.7 2.5 4.9.8 7l-40 50c-1.9 2.5-5.3 2.6-7.4.5z">
            </path>
          </svg>
        </div>
        <div>
          <h4>Search without worry</h4>
          <p>The prices you see aren't affected by your searches.</p>
        </div>
      </div>
      <div class="why_elm flex">
        <div>
          <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px">
            <path d="M87.1 168.8c-35-6.5-59.5-38.2-57-73.7c.2-2.8 2.6-4.8 5.3-4.6c2.8.2 4.8 2.6 4.6 5.3c-2.2 30.4 18.8 57.5 48.8 63.1c2.7.5 4.5 3.1 4 5.8c-.4 2.8-3 4.6-5.7 4.1zm54.4-5.3l-15-15c-2-2-2-5.1 0-7.1s5.1-2 7.1 0l10.1 10.1l11.9-23.8c1.2-2.5 4.2-3.5 6.7-2.2c2.5 1.2 3.5 4.2 2.2 6.7l-15 30c-1.6 3.1-5.6 3.7-8 1.3zM159 89c-4.5-24.5-24-43.8-48.5-48.1c-21-3.7-41.8 3.7-55.5 19.1h30c2.8 0 5 2.2 5 5s-2.2 5-5 5H45c-2.8 0-5-2.2-5-5V25c0-2.8 2.2-5 5-5s5 2.2 5 5v25.7C65.9 34.6 89 27 112.2 31.1c28.6 5 51.4 27.6 56.6 56.1c.5 2.7-1.3 5.3-4 5.8s-5.3-1.3-5.8-4zm-14 101c-24.8 0-45-20.2-45-45s20.2-45 45-45s45 20.2 45 45s-20.2 45-45 45zm0-80c-19.3 0-35 15.7-35 35s15.7 35 35 35s35-15.7 35-35s-15.7-35-35-35z">
            </path>
          </svg>
        </div>
        <div>
          <h4>Book with flexibility</h4>
          <p>Easily find flights with no change fees.</p>
        </div>
      </div>
      <div class="why_elm flex">
        <div>
          <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" role="img" height="30px">
            <path d="M170 90c0-38.598-31.402-70-70-70S30 51.402 30 90c0 23.733 11.883 44.731 30 57.396V185c0 3.316 3.179 5.721 6.374 4.808L100 180.2l33.626 9.607c3.199.913 6.374-1.493 6.374-4.807v-37.604c18.117-12.665 30-33.663 30-57.396zm-40 88.371l-28.626-8.179a5.012 5.012 0 00-2.748 0L70 178.371v-25.139c18.651 8.885 40.754 9.168 60 0v25.139zM100 150c-33.084 0-60-26.916-60-60s26.916-60 60-60s60 26.916 60 60s-26.916 60-60 60zm38.761-77.309l-23.685-3.441l-10.593-21.463c-1.83-3.71-7.136-3.711-8.967 0L84.924 69.25l-23.685 3.441c-4.093.595-5.735 5.639-2.771 8.529l17.139 16.706l-4.046 23.589c-.699 4.076 3.592 7.198 7.255 5.271L100 115.648l21.186 11.138c3.661 1.924 7.955-1.193 7.254-5.271l-4.046-23.589l17.139-16.706c2.96-2.888 1.324-7.934-2.772-8.529zM115.531 92.6a5 5 0 00-1.438 4.426l2.777 16.195l-14.545-7.646a4.998 4.998 0 00-4.653 0l-14.544 7.646l2.778-16.195a5.003 5.003 0 00-1.438-4.426L72.703 81.13l16.26-2.362a5.001 5.001 0 003.765-2.735L100 61.298l7.272 14.735a4.999 4.999 0 003.765 2.735l16.26 2.362l-11.766 11.47z">
            </path>
          </svg>
        </div>
        <div>
          <h4>Trusted and free</h4>
          <p>We’re completely free to use – no hidden charges or fees.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="center_container">
    <div id="inspiration">
      <div class="txt_and_button">
        <div>
          <h2>Travel inspiration</h2>
          <p>Our latest travel tips, expert hacks and industry insights to help make your journey one to
            remember</p>
        </div>
        <button type="button" class="button_type_4">More inspiration</button>
      </div>
      <div id="img_slide">
        <div class="img_slide_elm">
          <div class="slide_img_sprite img_one"></div>
          <div>
            <b>Coronavirus update: What do the US travel restrictions mean for me?</b>
            <p>May 6, 2020 - 3 min</p>
          </div>
        </div>
        <div class="img_slide_elm">
          <div class="slide_img_sprite img_two"></div>
          <div>
            <b>What to know about coronavirus (COVID-19) and travel</b>
            <p>Jan 7, 2021 - 2 min</p>
          </div>
        </div>
        <div class="img_slide_elm">
          <div class="slide_img_sprite img_three"></div>
          <div>
            <b>Coronavirus update: What do the US travel restrictions mean for me?</b>
            <p>May 6, 2020 - 3 min</p>
          </div>
        </div>
        <div class="img_slide_elm">
          <div class="slide_img_sprite img_four"></div>
          <div>
            <b>What to know about coronavirus (COVID-19) and travel</b>
            <p>Jan 7, 2021 - 2 min</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="center_container">
    <div class="above_flight_to_shortcut_container">
      <h3>Trending cities</h3>
      <p>The most searched for cities on momondo</p>
    </div>
    <div class="flight_to_shortcut_container">
      <div id="trending_cities"></div>
    </div>
  </div>

  <div class="center_container">
    <div class="above_flight_to_shortcut_container">
      <h3>Trending countries</h3>
      <p>The most searched for countries on momondo</p>
    </div>
    <div class="flight_to_shortcut_container">
      <div id="trending_countries"></div>
    </div>
  </div>

  <div class="center_container">
    <div class="flight_deals_container">
      <h3>Flight deals by destination</h3>
      <p>Find and compare cheap flights</p>
      <p class="p2">We search and compare billions of real-time prices on plane tickets so you can easily find
        the
        cheapest, quickest, and best flight deals for you.</p>
      <div class="fligt_deals">
        <a>London</a>
        <a>Istanbul</a>
        <a>Dubai</a>
        <a>Bangkok</a>
        <a>New York</a>
        <a>Lisbon</a>
        <a>Islamabad</a>
        <a>Barcelona</a>
        <a>Manchester</a>
        <a>Copenhagen</a>
        <a>Paris</a>
        <a>Rome</a>
        <a>New Delhi</a>
        <a>Manila</a>
        <a>Bucharest</a>
      </div>
      <h3>How to find cheap flight deals with momondo</h3>
      <div class="fligt_deals fat">
        <a>How does momondo find such cheap airfare?
          <svg style="width:1rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
            </path>
          </svg>
        </a>

        <a>How do I find the best price on plane tickets?
          <svg style="width:1rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
            </path>
          </svg>
        </a>
        <a>How can Mix & Match save me money?
          <svg style="width:1rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
            </path>
          </svg>
        </a>
        <a>How do I make sure I don’t miss a flight deal?
          <svg style="width:1rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>

</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>