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

<div id="admin_top_container">
    <div id="admin_top">
        <div id="profile_picture_container">
            <div class="profile_picture_sprite"></div>
            <svg onclick="toggle_admin_module()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M165 175H95m-56-35.8L35 175l34.6-10.1L162.5 54c3.6-4.2 3-10.5-1.2-14.1L146 27c-4.2-3.6-10.5-3-14.1 1.2L39 139.2zm30.6 25.7c-3.1-14.6-15.7-25.2-30.6-25.7">
                </path>
            </svg>
        </div>
        <div id="profile_info_and_name_container">
            <h1>Hello Emily</h1>
            <div id="profile_info_container">
                <div class="profile_info">
                    <p>Account email</p>
                    <p>a@a.com</p>
                </div>
                <div class="profile_info">
                    <p>Home airport</p>
                    <p>none <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" d="M165 175H95m-56-35.8L35 175l34.6-10.1L162.5 54c3.6-4.2 3-10.5-1.2-14.1L146 27c-4.2-3.6-10.5-3-14.1 1.2L39 139.2zm30.6 25.7c-3.1-14.6-15.7-25.2-30.6-25.7">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="admin_bot">
    <h2>Your previous searches</h2>
    <?php
    foreach ($flights as $flight) {
    ?>

        <form id="previous_searches_form">

            <div class="previous_searches_container">
                <svg style="width:1.5rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                    <path d="M140.448 177.069l-19.846-43.661c-2.877-6.328-7.998-11.612-12.447-14.676a1029.409 1029.409 0 0 1-14.935 12.983c-4.045 3.618-5.452 9.494-3.67 15.347l2.733 8.981a4.997 4.997 0 0 1-1.248 4.991l-10 10c-2.267 2.268-6.043 1.838-7.754-.851l-14.154-22.241l-10.592 10.592a5 5 0 1 1-7.071-7.07l10.593-10.593l-22.242-14.153c-2.695-1.716-3.112-5.493-.851-7.754l10-10a5 5 0 0 1 4.992-1.248l8.981 2.733c5.85 1.777 11.728.375 15.348-3.671c4.269-5.007 8.599-9.988 12.983-14.935c-3.063-4.449-8.349-9.571-14.676-12.447L22.931 59.552c-3.563-1.619-3.965-6.539-.705-8.712l11.53-7.687a15.083 15.083 0 0 1 11.333-2.213l60.319 12.364c6.006 1.33 14.836-3.512 20.984-9.246c6.775-6.625 13.831-12.567 25.684-17.738c5.899-2.573 12.876-1.07 17.773 3.828l.003.002c4.898 4.897 6.401 11.874 3.828 17.773c-5.171 11.853-11.111 18.909-17.735 25.682c-5.736 6.148-10.583 14.976-9.266 20.906l12.382 60.4a15.1 15.1 0 0 1-2.215 11.332l-7.687 11.53c-2.182 3.276-7.096 2.849-8.711-.704zm-24.66-65.169c5.789 4.467 10.925 10.784 13.918 17.369l16.123 35.472l2.697-4.045a5.034 5.034 0 0 0 .738-3.778L136.9 96.6a19.235 19.235 0 0 1-.445-3.891a1041.686 1041.686 0 0 1-20.667 19.191zm-49.416 28.799l12 18.857l3.471-3.471l-1.86-6.111c-2.938-9.652-.396-19.525 6.631-25.767l.077-.066c23.665-20.174 47.419-42.531 62.016-57.438c6.149-6.558 10.969-11.688 15.808-22.779c1.113-2.552-.165-5.136-1.733-6.703l-.003-.002c-1.567-1.568-4.151-2.846-6.704-1.734c-10.394 4.535-15.439 8.933-22.782 15.811c-15.335 15.027-37.539 38.676-57.433 62.013l-.067.076c-6.242 7.028-16.115 9.567-25.767 6.631l-6.111-1.859l-3.471 3.471l18.858 12l7.164-7.163a5 5 0 1 1 7.071 7.07l-7.165 7.164zM35.258 54.17l35.471 16.124c6.585 2.993 12.903 8.128 17.37 13.918a1045.845 1045.845 0 0 1 19.202-20.678a19.358 19.358 0 0 1-3.982-.452L43.081 50.735a5.039 5.039 0 0 0-3.778.738l-4.045 2.697z">
                    </path>
                </svg>
                <div class="flex">
                    <p> <?= $flight['from_city'] ?></p>
                    <svg style="width:0.9rem;margin: 0 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 26">
                        <path fill="currentColor" d="M22.61 10.66L16.81 5l-2.39 2.26 4.06 3.97H5v3.54h13.48l-4.06 3.96L16.81 21l5.8-5.66L25 13l-2.39-2.34z">
                        </path>
                    </svg>
                    <p> <?= $flight['to_city'] ?></p>
                </div>
                <input style="display:none" name="flight_id" value="<?= $flight['id'] ?>" type="text">
                <button class="button_type_1" type="button" onclick="delete_flight()">
                    🗑️ Delete
                </button>
            </div>
        </form>
    <?php
    }
    ?>
</div>