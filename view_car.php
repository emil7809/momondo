<?php
$_title = 'Car';
require_once __DIR__ . '/comp_header.php';
?>

<main id="car">
    <div class="center_container">
        <h1><?= $dictionary[$language . '_carh1'] ?></h1>
    </div>
    <div class="center_container">
        <form>
            <div class="input-caontainer_container">
                <div>
                    <div class="input-caontainer">
                        <svg style="height:20px;width:20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M165 160h-10c-7.2 0-13.2-5.1-14.7-11.9c-26.8 2.5-53.9 2.5-80.6 0c-1.5 6.8-7.5 11.9-14.7 11.9H35c-8.3 0-15-6.7-15-15v-43.7c-2.1-.5-4.2-1-6.2-1.5c-2.7-.7-4.3-3.4-3.6-6.1c.7-2.7 3.4-4.3 6.1-3.6c1.6.4 3.2.8 4.7 1.1l12.4-37.7C34.9 49 39.2 45 44.7 44c30-5.3 80.7-5.3 110.6 0c5.5 1 9.8 4.9 11.4 9.7L179 91.4c1.6-.4 3.1-.8 4.7-1.2c2.7-.7 5.4.9 6.1 3.6c.7 2.7-.9 5.4-3.6 6.1c-2.1.5-4.2 1.1-6.3 1.6v43.6c.1 8.2-6.6 14.9-14.9 14.9zm-15-17.4v2.4c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5v-19.2c-11 1.6-26.2 3.5-34.6 4.2c-2.8.2-5.2-1.8-5.4-4.6c-.2-2.8 1.8-5.2 4.6-5.4c8.4-.7 24.6-2.8 35.4-4.3v-12.1c-43.8 8.7-94.9 8.7-140-.1v12.2c10.8 1.6 27 3.7 35.4 4.3c2.8.2 4.8 2.6 4.6 5.4c-.2 2.8-2.6 4.8-5.4 4.6c-8.4-.7-23.6-2.6-34.6-4.2V145c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5v-2.4c0-2.9 2.5-5.3 5.5-5c29.5 3.2 59.4 3.2 88.9 0c3.1-.3 5.6 2.1 5.6 5zM30.8 93.4c44.6 8.9 95.3 8.9 138.5.1l-12-36.7c-.6-1.6-2-2.7-3.6-3c-29-5.1-78.1-5.1-107.2 0c-1.7.3-3.1 1.4-3.6 3L30.8 93.4zm74.4-4c-2.4-1.4-3.2-4.4-1.9-6.8C107.7 74.8 116 70 125 70s17.1 4.7 21.6 12.5c1.4 2.4.6 5.4-1.8 6.8c-2.4 1.4-5.4.6-6.8-1.8c-2.7-4.7-7.6-7.5-13-7.5s-10.3 2.9-12.9 7.5c-1.4 2.4-4.5 3.2-6.9 1.9z"></path>
                        </svg>
                        <input type="text" placeholder="All airports, Paris, France">
                    </div>
                </div>
                <div class="flex_grow">
                    <div class="input-caontainer">
                        <input type="date">
                    </div>
                    <div class="input-caontainer">
                        <input type="date">
                    </div>

                </div>
            </div>
            <button class="button_type_1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" height="24" style="fill: white;">
                    <path d="M178.5 171.5l-44.2-44.2c9.8-11.4 15.7-26.1 15.7-42.3c0-35.8-29.2-65-65-65S20 49.2 20 85s29.2 65 65 65c16.1 0 30.9-5.9 42.3-15.7l44.2 44.2c2 2 5.1 2 7.1 0c1.9-1.9 1.9-5.1-.1-7zM30 85c0-30.3 24.7-55 55-55s55 24.7 55 55s-24.7 55-55 55s-55-24.7-55-55z"></path>
                </svg></button>
        </form>
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
            <h3>Cheap car hire by destination</h3>
            <p>Find and compare car hire deals</p>
            <p class="p2">We search over 30,000 locations and include major car comparison sites, so you get a huge selection of cheap car hire deals from around the world.</p>
            <div class="fligt_deals">
                <a>London car hire</a>
                <a>Istanbul car hire</a>
                <a>Dubai car hire</a>
                <a>Bangkok car hire</a>
                <a>New York car hire</a>
                <a>Lisbon car hire</a>
                <a>Islamabad car hire</a>
                <a>Barcelona car hire</a>
                <a>Manchester car hire</a>
                <a>Copenhagen car hire</a>
                <a>Paris car hire</a>
                <a>Rome car hire</a>
                <a>New Delhi car hire</a>
                <a>Manila car hire</a>
                <a>Bucharest car hire</a>
            </div>
            <h3>How to hire a car for less with momondo</h3>
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