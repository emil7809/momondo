function show_from_results() {
  const the_input = document.querySelector("#from-input");
  if (the_input.value.length > 0) {
    document.querySelector("#from-results").style.display = "block";
    get_cities_from();
  } else {
    document.querySelector("#from-results").style.display = "none";
  }

  document.addEventListener("click", function(event){
    if (event.target.closest("#from-results")) return
    document.querySelector("#from-results").style.display = "none";
  });
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

  document.addEventListener("click", function(event){
    if (event.target.closest("#from-results")) return
    document.querySelector("#from-results").style.display = "none";
  });
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



// ##############################
function validate(callback){
  const form = event.target
  document.querySelectorAll("[data-validate]",form).forEach(function(element){ 
    element.classList.remove("validate_error")
   
  })
  document.querySelectorAll("[data-validate]",form).forEach( function(element){
    switch(element.getAttribute("data-validate")){
      case "str":
        if( element.value.length < parseInt(element.getAttribute("data-min")) || 
            element.value.length > parseInt(element.getAttribute("data-max")) 
        ){
          element.classList.add("validate_error")
          
        }
      break;
      case "int":
        if( ! /^\d+$/.test(element.value)  ||
            parseInt(element.value) < parseInt(element.getAttribute("data-min")) || 
            parseInt(element.value) > parseInt(element.getAttribute("data-max"))
        ){
          element.classList.add("validate_error")
          
        }
      break;      
      case "email":
        let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if( ! re.test(element.value.toLowerCase()) ){
          element.classList.add("validate_error")
          
        }
      break;
      case "regex":       
        var regex = new RegExp(element.getAttribute("data-regex"))
        // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if( ! regex.test(element.value) ){
          console.log(element.value)
          console.log("regex error")
          element.classList.add("validate_error")
          
        }
      break;
      case "match":
        if( element.value != document.querySelector(`[name='${element.getAttribute("data-match-name")}']`, form).value ){
          element.classList.add("validate_error")
          
        }
      break;
    }
  })
  if( ! document.querySelector(".validate_error", form) ){ callback(); return }
  document.querySelector(".validate_error", form).focus()
}

// ##############################
function clear_validate_error(){
  // event.target.classList.remove("validate_error")
  // event.target.value = ""
}
