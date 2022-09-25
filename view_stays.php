<?php
$_title = 'Stays';
require_once __DIR__ . '/comp_header.php';
//$_title = $dictionary[$language . '_overnatninger']; 
?>

<main id="stays">
    <div class="center_container">
        <h1><?= $dictionary[$language . '_staysh1'] ?></h1>
    </div>
    <div class="center_container">
        <form>
            <div class="input-caontainer_container">
                <div>
                    <div class="input-caontainer">
                        <svg style="height:20px;width:20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M175 170a5 5 0 0 1-5-5v-5H30v5a5 5 0 1 1-10 0v-43.092c0-8.176 3.859-15.462 10-20.027V65c0-13.785 11.215-25 25-25h90c13.785 0 25 11.215 25 25v36.98c6.093 4.613 10 11.922 10 19.928V165a5 5 0 0 1-5 5zM30 150h140v-10H30v10zm0-20h140v-8.092c0-7.342-5.486-13.707-12.762-14.806c-40.216-6.077-73.399-6.207-114.477 0C35.415 108.21 30 114.4 30 121.908V130zm120-34.027c2.877.382 9.581 1.381 10 1.467V65c0-8.271-6.729-15-15-15H55c-8.271 0-15 6.729-15 15v32.438c.418-.084 7.123-1.083 10-1.465V85c0-8.271 6.729-15 15-15h25a14.94 14.94 0 0 1 10 3.829A14.943 14.943 0 0 1 110 70h25c8.271 0 15 6.729 15 15v10.973zm-45-3.45c11.463.167 22.988.912 35 2.233V85c0-2.757-2.243-5-5-5h-25c-2.757 0-5 2.243-5 5v7.523zM65 80c-2.757 0-5 2.243-5 5v9.756c12.012-1.321 23.537-2.065 35-2.232V85c0-2.757-2.243-5-5-5H65z">
                            </path>
                        </svg>
                        <input type="text" placeholder="Paris, France">
                    </div>
                </div>
                <div class="flex_grow">
                    <div class="input-caontainer">
                        <input type="date">
                        <input type="date">
                    </div>
                    <div class="input-caontainer">
                        <svg style="height:20px;width:20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M160.6 180H39.4c-1.6 0-3.2-.8-4.1-2.1c-8-11.5-6.8-32.8 2.2-41.5c3.9-3.8 23.8-10.5 35.6-14C58.8 108.1 50 95.4 50 70.9C50 38.6 68.2 20 100 20s50 18.6 50 50.9c0 23.8-8.2 36.7-23.1 51.5c11.8 3.5 31.6 10.2 35.6 14c9.1 8.7 10.3 30 2.3 41.5c-1 1.3-2.6 2.1-4.2 2.1zM42.3 170h115.5c4-8.3 2.4-21.8-2.1-26.3c-3.6-2.8-31.2-12.1-38.9-13.8c-3.5-.8-5.1-4.9-3-7.8c7.9-10.8 26.3-19.2 26.3-51.2c0-18.7-6.9-40.9-40-40.9S60 52.2 60 70.9c0 31.9 18.4 40.3 26.3 51.2c2.1 2.9.5 7.1-3 7.8c-7.7 1.6-35.3 10.9-38.9 13.7c-4.6 4.5-6.1 18.1-2.1 26.4zm2.2-26.4z">
                            </path>
                        </svg>
                        <input type="text" placeholder=" 1 room, 2 guests">
                    </div>
                </div>
            </div>
            <button class="button_type_3">Search</button>
        </form>
    </div>
    <div class="center_container">
        <div class="card">
            <img src="https://www.momondo.co.uk/rimg/kimg/a/suppliers/7002899/0f33ae9ba8f2f5f3.jpg?crop=true&height=365" alt="img" />
            <div class="flex_grow">
                <div>
                    <h4>Book your summer break today</h4>
                    <p>
                        Let the ‘Most Trusted Travel Company’ arrange your flight, transfer and accommodation all in
                        one place
                    </p>
                </div>
                <button>Book Now</button>
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
            <h3>Trending cities</h3>
            <p>The most searched for cities on momondo</p>
        </div>
        <div class="flight_to_shortcut_container">
            <div id="trending_countries"></div>
        </div>
    </div>

    <div class="center_container">
        <div class="flight_deals_container">
            <h3>Holiday Rentals & Stays</h3>
            <p>Compare Deals on Hotels, Holiday Apartments & Home Rentals</p>
            <p class="p2">From vacation homes and apartments to more traditional hotels, find and compare the best places to stay worldwide with momondo</p>
            <div class="fligt_deals">
                <a>London hotels</a>
                <a>Istanbul hotels</a>
                <a>Dubai hotels</a>
                <a>Bangkok hotels</a>
                <a>New York hotels</a>
                <a>Lisbon hotels</a>
                <a>Islamabad hotels</a>
                <a>Barcelona hotels</a>
                <a>Manchester hotels</a>
                <a>Copenhagen hotels</a>
                <a>Paris hotels</a>
                <a>Rome hotels</a>
                <a>New Delhi hotels</a>
                <a>Manila hotels</a>
                <a>Bucharest hotels</a>
            </div>


        </div>
    </div>

</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>