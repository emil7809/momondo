function toggle_menu() {
  const domMenu = document.querySelector("#menu_container");
  const burger = document.querySelector("#burger");
  const x = document.querySelector("#burger_x");
  if (domMenu.classList.contains("active")) {
    domMenu.classList.remove("active");
    x.style.display = "none";
    burger.style.display = "block";
  } else {
    domMenu.classList.add("active");
    x.style.display = "block";
    burger.style.display = "none";
  }
}
function toggle_module() {
 
  const sing_module = document.querySelector(".the_big_black");
  const signInModule = document.querySelector("#signin_module");
  if (sing_module.classList.contains("show")) {
    sing_module.classList.remove("show");
  } else {
    signInModule.classList.remove("hide");
    sing_module.classList.add("show");
  }
}

function toggle_admin_module() {
  const modulee = document.querySelector(".the_other_big_black");
 
  if (modulee.classList.contains("show")) {
    modulee.classList.remove("show");
  } else {
    
    modulee.classList.add("show");
  }
}

function toggle_dropdown() {
 
  const dropdown = document.querySelector("#admin_dropdown");
  if (dropdown.classList.contains("show")) {
    dropdown.classList.remove("show");
  } else {
    dropdown.classList.add("show");
  }
}

function toggleSignup() {
  const signInModule = document.querySelector("#signin_module");
  const signUPModule = document.querySelector("#signup_module");
  if (signUPModule.classList.contains("hide")) {
    signInModule.classList.add("hide");
    signUPModule.classList.remove("hide");
  } else {
    signUPModule.classList.add("hide");
    signInModule.classList.remove("hide");
  }
}

function closeSignup() {
  document.querySelector(".the_big_black").classList.remove("show");
  document.querySelector("#signup_module").classList.add("hide");
}

////////////////////////////////////////////////////////////

function show_from_results() {
  const the_input = document.querySelector("#from-input");
  if (the_input.value.length > 0) {
    document.querySelector("#from-results").style.display = "block";
    get_cities_from();
  } else {
    document.querySelector("#from-results").style.display = "none";
  }

  document.addEventListener("click", function (event) {
    if (event.target.closest("#from-results")) return;
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

  document.addEventListener("click", function (event) {
    if (event.target.closest("#from-results")) return;
    document.querySelector("#from-results").style.display = "none";
  });
}

function hide_to_results() {
  document.querySelector("#to-results").style.display = "none";
}

///////////////////////////////////////////////////////////////////

async function get_cities_from() {
  document.querySelector("#from-results").innerHTML = "";
 /*  const search_value = document.querySelector("#from-input").value  */
 /*  const conn = await fetch("api-get-cities-from.php"); */
 const conn = await fetch("api-get-cities-from.php");
  const data = await conn.json();
  console.log(data)
  let all_cities = "";
  const div_city = `<div class="city-contaier">
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

  data.forEach(city => {
    let cityName = city.cityName;
    console.log(cityName);
    let copy_div_city = div_city;
    copy_div_city = copy_div_city.replace("#img#", city.cityImage);
    copy_div_city = copy_div_city.replace("#name#", cityName);
    copy_div_city = copy_div_city.replace("#country#", city.cityCountry);
    copy_div_city = copy_div_city.replace("#initial#", city.cityInitial);
    copy_div_city = copy_div_city.replace("#airport#", city.cityAirport);
    all_cities += copy_div_city;
  }) 
  

  document
    .querySelector("#from-results")
    .insertAdjacentHTML("afterbegin", all_cities);
}

//////////////////////////////////////////////////////////////////////////////

async function get_cities_to() {
  document.querySelector("#to-results").innerHTML = "";
  const conn = await fetch("api-get-cities-to.php");
  const data = await conn.json();
  let all_cities = "";
  const div_city = `<div class="city-contaier">
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

function clear_validate_error() {
  // event.target.classList.remove("validate_error")
  // event.target.value = ""
}

/////////////////////////////////////
function clean_email_input() {
  document.querySelector(".email_error").style.display = "none";
  document.querySelector("[name='user_email']").classList.remove("validate_error")
  document.querySelector("[name='user_email']").classList.remove("validate_green")
}

function clean_password_input() {
  document.querySelector(".password_error").style.display = "none";
  document.querySelector("[name='user_password']").classList.remove("validate_error")
  document.querySelector("[name='user_password']").classList.remove("validate_green")
}


async function validateEmail() {
  const frm = document.querySelector("#signin_form");
  const conn = await fetch("api-validate-email.php", {
      method: "POST",
      body: new FormData(frm),
  });
  if (!conn.ok) {
      document.querySelector(".email_error").style.display = "flex";
      document.querySelector("[name='user_email']").classList.add("validate_error")
      document.querySelector("[name='user_email']").classList.remove("validate_green")
      return;
  }
  document.querySelector(".email_error").style.display = "none";
  document.querySelector("[name='user_email']").classList.remove("validate_error")
  document.querySelector("[name='user_email']").classList.add("validate_green")
  

}8

async function validatePassword() {
  const frm = document.querySelector("#signin_form");
  const conn = await fetch("api-validate-password.php", {
      method: "POST",
      body: new FormData(frm),
  });
  if (!conn.ok) {
      document.querySelector(".password_error").style.display = "flex";
      document.querySelector("[name='user_password']").classList.add("validate_error")
      document.querySelector("[name='user_password']").classList.remove("validate_green")
      return;
  }

  document.querySelector(".password_error").style.display = "none";
  document.querySelector("[name='user_password']").classList.remove("validate_error")
  document.querySelector("[name='user_password']").classList.add("validate_green")

}

async function validateSingin() {
  const frm = document.querySelector("#signin_form");
  const conn = await fetch("api-validate-user.php", {
      method: "POST",
      body: new FormData(frm),
  });
  if (!conn.ok) {
      validatePassword();
      validateEmail();
      return;
  }

  console.log("Succsess");
  window.location.replace("bridge_signin.php");
}

async function delete_flight() {
   
    const frm = event.target.form
    const conn = await fetch('api-delete-flight.php', {
      method: "POST",
      body: new FormData(frm)
    })
    const data = await conn.json()
    if (!conn.ok) {
      // Sweet alert: ups... fligth not found
      console.log(data)
      return
    }
    // Success
    console.log(data)
    // console.log(e.path[1].children[0].value)
    frm.remove()
}
