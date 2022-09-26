<?php
$_title = 'Rejserestriktioner';
$_current_page = 'rejserestriktioner';
require_once __DIR__ . '/comp_header.php';
?>

<main id="non_styles">
    <div class="center_container">
        <h1><?= $dictionary[$language . '_rejserestriktioner'] ?></h1>
    </div>
    <div class="center_container">
        <img src="img/404.jpg" alt="cute cat meme">
        <h1>Sorry this page was not styled</h1>
        <p>But the following have been</p>

        <a href=<?= '/?language=' . $language ?>><button class="button_type_1">Home</button></a>
        <a href=<?= 'stays/?language=' . $language ?>><button class="button_type_1"><?= $dictionary[$language . '_overnatninger'] ?></button></a>
        <a href=<?= 'car/?language=' . $language ?>><button class="button_type_1"><?= $dictionary[$language . '_bil'] ?></button></a>
        <a href=<?= 'admin/?language=' . $language ?>><button class="button_type_1">Admin</button></a>
        <a href=<?= 'trips/?language=' . $language ?>><button class="button_type_1">Trips</button></a>

    </div>

</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>