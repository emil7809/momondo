function show_from_results() {
  const the_input = document.querySelector("#from-input");
  if (the_input.value.length > 0) {
    document.querySelector("#from-results").style.display = "block";
    get_cities_from();
  } else {
    document.querySelector("#from-results").style.display = "none";
  }
}
function show_from_results_focus() {
  document.querySelector("#from-results").style.display = "block";
}

function hide_from_results() {
  document.querySelector("#from-results").style.display = "none";
}

//////////////////////////////////////////////////////////////////

function show_to_results() {
  const the_input = document.querySelector("#to-input");
  if (the_input.value.length > 0) {
    document.querySelector("#to-results").style.display = "block";
    get_cities_to();
  } else {
    document.querySelector("#to-results").style.display = "none";
  }
}

function hide_to_results() {
  document.querySelector("#to-results").style.display = "none";
}

///////////////////////////////////////////////////////////////////

async function get_cities_from() {
  document.querySelector("#from-results").innerHTML = "";
  let conn = await fetch("api-get-cities-from.php");
  let data = await conn.json();
  let all_cities = "";
  let div_city = `<div class="city-contaier">
                    <img src="#img#">
                    <div>
                      <div class="flex"> 
                        <p>#name#</p>
                        <p>#country#</p>
                        <p>#initial#</p>
                      </div>
                      <p>#airport#</p>
                    </div>
                   
                      <input type="checkbox">
                    
                  </div>`;

  for (let i = 0; i < data.length; i++) {
    let city = data[i];
    let cityName = city.cityName;
    console.log(cityName);
    let copy_div_city = div_city;
    copy_div_city = copy_div_city.replace("#img#", city.cityImage);
    copy_div_city = copy_div_city.replace("#name#", cityName);
    copy_div_city = copy_div_city.replace("#country#", city.cityCountry);
    copy_div_city = copy_div_city.replace("#initial#", city.cityInitial);
    copy_div_city = copy_div_city.replace("#airport#", city.cityAirport);
    all_cities += copy_div_city;
  }

  document
    .querySelector("#from-results")
    .insertAdjacentHTML("afterbegin", all_cities);
}

//////////////////////////////////////////////////////////////////////////////

async function get_cities_to() {
  document.querySelector("#to-results").innerHTML = "";
  let conn = await fetch("api-get-cities-to.php");
  let data = await conn.json();
  let all_cities = "";
  let div_city = `<div class="city-contaier">
                    <img src="#img#">
                    <div>
                      <div class="flex"> 
                        <p>#name#</p>
                        <p>#country#</p>
                        <p>#initial#</p>
                      </div>
                      <p>#airport#</p>
                    </div>
                    <input type="checkbox">
                  </div>`;

  for (let x = 0; x < data.length; x++) {
    let city = data[x];
    console.log(city.cityName);
    let div_city_clone = div_city;
    div_city_clone = div_city_clone.replace("#img#", city.cityImage);
    div_city_clone = div_city_clone.replace("#name#", city.cityName);
    div_city_clone = div_city_clone.replace("#country#", city.cityCountry);
    div_city_clone = div_city_clone.replace("#initial#", city.cityInitial);
    div_city_clone = div_city_clone.replace("#airport#", city.cityAirport);

    all_cities += div_city_clone;
  }

  document
    .querySelector("#to-results")
    .insertAdjacentHTML("afterbegin", all_cities);
}

////////////////////////////////
