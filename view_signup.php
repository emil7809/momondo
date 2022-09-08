<?php $_title = 'Sign in'; require_once __DIR__.'/comp_header.php'; ?>

<h1>Sign up</h1>
    <form action="bridge-signup" method="POST">
        <div class="input-caontainer"><input name="email" type="text" placeholder="Email"></div>
        <div class="input-caontainer"><input name="user_password" type="password" placeholder="Password"></div>
        <button>Sign up</button>
    </form>
  

<?php require_once __DIR__.'/comp_footer.php' ?>
