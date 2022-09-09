<?php $_title = 'Sign in'; require_once __DIR__.'/comp_header.php'; ?>

<div class="the_big_black" onclick="back()">
    <div class="module_container">
        <h1>Sign in</h1>
            <form action="bridge-login.php" method="POST">
                <div class="input-caontainer"><input name="email" type="text" placeholder="Email"></div>
                <div class="input-caontainer"><input name="user_password" type="password" placeholder="Password"></div>
                <button>Sign in</button>
            </form>
    
        <h2><a href="signup">Sign Up</a></h2>
    </div>
</div>

  

<?php require_once __DIR__.'/comp_footer.php' ?>
