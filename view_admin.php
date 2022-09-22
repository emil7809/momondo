<?php
$_title = 'Admin';
require_once __DIR__ . '/comp_header.php';
?>

<main id="admin">

    <div class="the_other_big_black">
        <div class="module_container">
            <div class="module_top">
                <h3>Rediger dit profilbillede</h3>
                <a onclick="toggle_admin_module()" class="x">X</a>
            </div>
            <form class="admin_module_mid" action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input class="upload_button" type="submit" value="Upload fra Computer" name="submit">
                <p>Maks. 6 MB</p>
                <p>Kun JPEG, PNG og GIF</p>
            </form>
            <div class="admin_module_bot">
                <p>Anvend et billede fra sociale medier</p>
                <img src="img/profile-img.jpg" alt="you">
            </div>
        </div>
    </div>

    <div id="admin_top">
        <div id="profile_picture_container">
            <div class="profile_picture_sprite"></div>
            <svg onclick="toggle_admin_module()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M165 175H95m-56-35.8L35 175l34.6-10.1L162.5 54c3.6-4.2 3-10.5-1.2-14.1L146 27c-4.2-3.6-10.5-3-14.1 1.2L39 139.2zm30.6 25.7c-3.1-14.6-15.7-25.2-30.6-25.7">
                </path>
            </svg>
        </div>
        <h1>Hello Emily</h1>
        <div class="profile_info">
            <p>E-mail</p>
            <p>a@a.com</p>
        </div>
        <div class="profile_info">
            <p>Hjemmelufthavn</p>
            <p>ingen <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M165 175H95m-56-35.8L35 175l34.6-10.1L162.5 54c3.6-4.2 3-10.5-1.2-14.1L146 27c-4.2-3.6-10.5-3-14.1 1.2L39 139.2zm30.6 25.7c-3.1-14.6-15.7-25.2-30.6-25.7">
                    </path>
                </svg></p>
        </div>
    </div>
    <div id="admin_bot">
        <h2>Your previous searches</h2>
    </div>


</main>


<?php require_once __DIR__ . '/comp_footer.php' ?>