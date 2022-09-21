<footer>
    <div class="center_container">
        <div id="top_mid_container">
            <div class="top">
                <div class="grid">
                    <h4><?= $dictionary[$language . '_company'] ?></h4>
                    <a><?= $dictionary[$language . '_about'] ?></a>
                    <a><?= $dictionary[$language . '_careers'] ?></a>
                    <a>Mobile</a>
                    <a>Discover</a>
                    <a><?= $dictionary[$language . '_how_we_work'] ?></a>
                    <a><?= $dictionary[$language . '_momondo_coupon_codes'] ?></a>

                </div>
                <div class="grid">
                    <h4><?= $dictionary[$language . '_contact'] ?></h4>
                    <a><?= $dictionary[$language . '_about'] ?></a>
                    <a><?= $dictionary[$language . '_careers'] ?></a>
                    <a>Mobile</a>
                </div>
                <div class="grid">
                    <h4> <?= $dictionary[$language . '_more'] ?></h4>
                    <a><?= $dictionary[$language . '_about'] ?></a>
                    <a><?= $dictionary[$language . '_careers'] ?></a>

                </div>
            </div>
            <div class="mid">
                <h4 style="display: none;"><?= $dictionary[$language . '_site/currencey'] ?></h4>
                <div class="border_button">
                    <div>
                        <h5>Site</h5>
                        <div class="flex">
                            <img id="flag-footer-icon" style="width: 20px; display: none;" src=<?= $dictionary[$language . '_flag']  ?> alt="uk icon" />
                            <p><?= $dictionary[$language . '_current_contry']  ?></p>
                        </div>
                    </div>
                    <div>
                        <svg style="width:1.2rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="border_button">
                    <div>
                        <h5><?= $dictionary[$language . '_currencey']  ?></h5>
                        <div class="flex">
                            <?= $dictionary[$language . '_current_curencey_icon']  ?>
                            <p><?= $dictionary[$language . '_current_curencey']  ?></p>
                        </div>
                    </div>
                    <div>
                        <svg style="width:1.2rem;fill:white;margin-left:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path d="M100 135a4.99 4.99 0 0 1-3.363-1.3l-55-50a5 5 0 1 1 6.727-7.399L100 123.243L151.637 76.3a5 5 0 1 1 6.726 7.399l-55 50A4.986 4.986 0 0 1 100 135z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot">
            <div class="flex">
                <p>Privacy</p>
                <p>Terms & Conditions</p>
                <p>Imprint</p>
            </div>
            <div class="flex">
                <p>©2022 momondo lol not realy its a clone</p>
            </div>
        </div>
        <img id="footer_img" style="display: none;" src="img/footer.webp" alt="footer img">
    </div>
</footer>

<script src="app.js"></script>
<script>
    function clean_name_input() {
        document.querySelector(".name_error").style.display = "none";
        document.querySelector("[name='user_name']").classList.remove("validate_error")
        document.querySelector("[name='user_name']").classList.remove("validate_green")
    }

    function clean_New_Email_input() {
        document.querySelector(".new_email_error").style.display = "none";
        document.querySelector(".email_in_use_error").style.display = "none";
        document.querySelector("[name='new_user_email']").classList.remove("validate_error")
        document.querySelector("[name='new_user_email']").classList.remove("validate_green")

    }

    function clean_New_Password_input() {
        document.querySelector(".new_password_error").style.display = "none";
        document.querySelector("[name='new_password']").classList.remove("validate_error")
        document.querySelector("[name='new_password']").classList.remove("validate_green")

    }

    async function validateName() {
        const frm = document.querySelector("#signup_form");
        const conn = await fetch("api-validate-name.php", {
            method: "POST",
            body: new FormData(frm),
        });
        if (!conn.ok) {
            document.querySelector(".name_error").style.display = "flex";
            document.querySelector("[name='user_name']").classList.add("validate_error")
            document.querySelector("[name='user_name']").classList.remove("validate_green")
            return;
        }
        document.querySelector(".name_error").style.display = "none";
        document.querySelector("[name='user_name']").classList.remove("validate_error")
        document.querySelector("[name='user_name']").classList.add("validate_green")

    }
    async function checkEmail() {
        const frm = document.querySelector("#signup_form");
        const conn = await fetch("api-check-email.php", {
            method: "POST",
            body: new FormData(frm),
        });
        if (!conn.ok) {
            console.log("ooops")
            document.querySelector(".email_in_use_error").style.display = "flex";
            document.querySelector("[name='new_user_email']").classList.remove("validate_green")
            document.querySelector("[name='new_user_email']").classList.add("validate_error")
            return;
        }
        document.querySelector(".email_in_use_error").style.display = "none";
        document.querySelector("[name='new_user_email']").classList.remove("validate_error")
        document.querySelector("[name='new_user_email']").classList.remove("validate_green")

    }

    async function validateNewEmail() {
        const frm = document.querySelector("#signup_form");
        const conn = await fetch("api-validate-new_email.php", {
            method: "POST",
            body: new FormData(frm),
        });
        if (!conn.ok) {
            document.querySelector(".new_email_error").style.display = "flex";
            document.querySelector("[name='new_user_email']").classList.add("validate_error")
            document.querySelector("[name='new_user_email']").classList.remove("validate_green")
            return;
        }
        document.querySelector(".new_email_error").style.display = "none";
        /*  document.querySelector("[name='new_user_email']").classList.remove("validate_error") */
        document.querySelector("[name='new_user_email']").classList.add("validate_green")

    }

    async function validateNewPassword() {
        const frm = document.querySelector("#signup_form");
        const conn = await fetch("api-validate-new-password.php", {
            method: "POST",
            body: new FormData(frm),
        });
        if (!conn.ok) {
            document.querySelector(".new_password_error").style.display = "flex";
            document.querySelector("[name='new_password']").classList.add("validate_error")
            document.querySelector("[name='new_password']").classList.remove("validate_green")
            return;
        }
        document.querySelector(".new_password_error").style.display = "none";
        document.querySelector("[name='new_password']").classList.remove("validate_error")
        document.querySelector("[name='new_password']").classList.add("validate_green")

    }

    async function validateSignup() {
        const form = document.querySelector("#signup_form");
        const conn = await fetch("api-validate.php", {
            method: "POST",
            body: new FormData(form),
        });
        if (!conn.ok) {
            validateName()
            checkEmail()
            validateNewEmail()
            validateNewPassword()
            return;
        }

        const data = await conn.json(); // Convert text to JSON
        // Success
        console.log("Success");
        closeSignup()
        Swal.fire({
            icon: "success",
            title: "Welcome " + data.user_name + "!",
            html: "You account has been created!",
            confirmButtonText: "Sign in",
        }).then(() => {
            toggle_module()
        });


    }
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>