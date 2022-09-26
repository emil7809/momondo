<?php
$_title = 'Admin';
$_current_page = 'admin';
require_once __DIR__ . '/comp_header.php';
?>

<main id="admin">

    <?php
    session_start();
    if ($_SESSION) {
        require_once __DIR__ . '/comp_admin.php';
    }
    if (!$_SESSION) {
        echo '<button style="margin: 10rem 45% 10rem 45%" class="button_type_3" onclick="toggle_module()">Sign in</button>';
    }
    ?>

</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>