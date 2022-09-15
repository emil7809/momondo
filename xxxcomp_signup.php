<div class="the_big_black2">
    <div id="signup_module" class="module_container" style="display:none;">
        <div class="module_top">
            <div class="back flex">
                <?= $_back_arrow ?>
                <a href="signin">Back</a>
            </div>
            <a onclick="toggle_module()" class="x">X</a>
        </div>


        <div class="module_txt">
            <h2>Sign up</h2>

        </div>
        <form method="POST" onsubmit="validate(validater); return false">

            <div class="error" style="display: none">
                <?= $_error_x ?>
                <p class="error_style">
                    Your name must be between <?= _USER_NAME_MIN_LEN ?> and <?= _USER_NAME_MAX_LEN ?> characters
                </p>
            </div>
            <div class="input-caontainer2">
                <input name="user_name" type="text" placeholder="Name" maxlength="<?= _USER_NAME_MAX_LEN ?>" data-validate="str" data-min="<?= _USER_NAME_MIN_LEN ?>" data-max="<?= _USER_NAME_MAX_LEN ?>">
            </div>

            <div class="error" style="display: none">
                <?= $_error_x ?>
                <p class="error_style">
                    Invalid email address. Please check for typos.
                </p>
            </div>
            <div class="input-caontainer2">
                <input name="email" type="text" placeholder="Email address" data-validate="email">
            </div>

            <div class="input-caontainer2">
                <input name="password" type="password" placeholder="Password" data-validate="str" data-min="<?= _USER_NAME_MIN_LEN ?>" data-max="<?= _USER_NAME_MAX_LEN ?>">
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

<script src="app.js"></script>
<script>
    async function validater() {
        const form = document.querySelector("form")
        const conn = await fetch('api-validate.php', {
            method: "POST",
            body: new FormData(form)
        })
        if (!conn.ok) {
            /*  document.querySelector(".error").style.display = "flex"
             document.querySelector(".input-caontainer2").classList.add("validate_error") */
            console.log("Error")
            return
        }

        const data = await conn.json() // Convert text to JSON
        // Success
        console.log("Success")
        Swal.fire({
            icon: 'success',
            title: 'Welcome ' + data.user_name + '!',
            html: 'You account has been created!',
            confirmButtonText: 'Sign in'
        }).then(() => {
            window.location.replace('signin');
        })

        /* window.location.replace('/'); */

    }
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>