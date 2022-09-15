<div class="the_big_black" style="display:none;">
    <div id="signin_module" class="module_container">
        <div class="module_top">
            <img class="module_logo" width="180px" src="img/momondo.png" alt="momondo.png">
            <a onclick="toggle_module()" class="x">X</a>
        </div>
        <div class="module_mid">
            <img src="https://content.r9cdn.net/res/images/horizon/ui/authentication/brands/momondo/magiclinkloginBg.svg?v=8a0eeb39f4df5084a227975496344e70866f4075&amp;cluster=5" alt="sign in img">
        </div>

        <div class="module_txt">
            <h2>Sign in or create an account</h2>
            <p>Track prices, organize travel plans and access member-only deals with your momondo account.</p>
        </div>
        <form id="signin_form" method="POST" onsubmit="validateSingin(); return false">
            <!--  <p class="error" style="display: none">#error#</p> -->
            <div class="error" style="display: none">
                <?= $_error_x ?>
                <p class="error_style">Wrong Email or Pasword</p>
            </div>
            <div class="input-caontainer2">
                <input name="user_email" type="text" placeholder="Email address" onfocus="clean_input()" onblur="validateSingin()">
            </div>

            <div class="input-caontainer2">
                <input name="user_password" type="password" placeholder="Password" onfocus="clean_input()" onblur="validateSingin()">
            </div>
            <button class=" button_type_1">Sign in</button>
        </form>
        <div class="or_container module_txt flex">
            <div class="or_line"></div>
            <p>Or</p>
            <div class="or_line"></div>
        </div>
        <div class="module_bot">
            <a><button onclick="toggleSignup()" class="button_type_2">Sign Up</button> </a>
        </div>
        <div class="module_txt">
            <p>By signing up you accept our terms of use and privacy policy.</p>
        </div>
    </div>
    <div id="signup_module" class="module_container hide">
        <div class="module_top">
            <div class="back flex">
                <?= $_back_arrow ?>
                <a onclick="toggleSignup()">Back</a>
            </div>
            <a onclick="closeSignup()" class="x">X</a>
        </div>


        <div class="module_txt">
            <h2>Sign up</h2>

        </div>
        <form method="POST" onsubmit="validate(validateSignup); return false">

            <div class="error" style="display: none">
                <?= $_error_x ?>
                <p class="error_style">
                    Your name must be between <?= _USER_NAME_MIN_LEN ?> and <?= _USER_NAME_MAX_LEN ?> characters
                </p>
            </div>
            <div class="input-caontainer2">
                <input name="new_user_name" type="text" placeholder="Name" maxlength="<?= _USER_NAME_MAX_LEN ?>" data-validate="str" data-min="<?= _USER_NAME_MIN_LEN ?>" data-max="<?= _USER_NAME_MAX_LEN ?>">
            </div>

            <div class="error" style="display: none">
                <?= $_error_x ?>
                <p class="error_style">
                    Invalid email address. Please check for typos.
                </p>
            </div>
            <div class="input-caontainer2">
                <input name="new_user_email" type="text" placeholder="Email address" data-validate="email">
            </div>

            <div class="input-caontainer2">
                <input name="new_user_password" type="password" placeholder="Password" data-validate="str" data-min="<?= _USER_NAME_MIN_LEN ?>" data-max="<?= _USER_NAME_MAX_LEN ?>">
            </div>
            <div class="input-caontainer2">
                <input name="repeat_password" type="password" placeholder="Repeat password" data-validate="match" data-match-name="password">
            </div>
            <button class="button_type_1 sign_up_button">Sign up</button>
        </form>


        <div class="module_txt">
            <p>By signing up you accept our terms of use and privacy policy.</p>
        </div>
    </div>
</div>