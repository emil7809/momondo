<?php $_title = 'Sign up';
require_once __DIR__ . '/comp_header.php';
?>

<div class="the_big_black">
    <div class="module_container">
        <div class="module_top">
            <img class="module_logo" width="180px" src="img/momondo.png" alt="momondo.png">
            <a href="/" class="x">X</a>
        </div>
        <div class="module_mid">
            <img src="https://content.r9cdn.net/res/images/horizon/ui/authentication/brands/momondo/magiclinkloginBg.svg?v=8a0eeb39f4df5084a227975496344e70866f4075&amp;cluster=5" alt="sign in img">
        </div>

        <div class="module_txt">
            <h2>Sign in or create an account</h2>
            <p>Track prices, organize travel plans and access member-only deals with your momondo account.</p>
        </div>
        <form action="bridge-login.php" method="POST">
            <div class="input-caontainer2"><input name="email" type="text" placeholder="Email address"></div>
            <div class="input-caontainer2"><input name="user_password" type="password" placeholder="Password"></div>
            <button class="button_type_1">Sign in</button>
        </form>
        <div class="or_container module_txt flex">
            <div class="or_line"></div>
            <p>Or</p>
            <div class="or_line"></div>
        </div>
        <div class="module_bot"><button class="button_type_2"><a href="signup">Sign Up</a></button></div>
        <div class="module_txt">
            <p>By signing up you accept our terms of use and privacy policy.</p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/comp_footer.php' ?>