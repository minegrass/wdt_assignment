<?php
if (isset($_COOKIE['user'])) {
    // Logged in
    $profile_pic = json_decode($_COOKIE['user'], true)['pic_link'];
    $loginbtn = "<a href='?page=user/profile'>" . json_decode($_COOKIE['user'], true)['username'] . "</a>";
} else {
    // Not logged in
    $profile_pic = "https://placehold.co/400?text=no-login";
    $loginbtn = "<a href='?page=login/guest'>Login</a>";
}

?>

<div class="nav-div box-drop-shadow">
    <nav>
        <div>
            <a class="logo-a" href="index.php?page=home">
                <div class="logo-div">


                    <img src="./asset/logo.png" width="55" height="55" alt="logo" class="logo">

                    <h1 class="logo-text special-font">
                        <span class="yellow-text special-font">Charity</span> Hub
                    </h1>
                </div>
            </a>
        </div>


        <div>
            <ul class="nav-ul">
                <li><a class="animation-a" href="?page=home#aboutus">About Us</a></li>
                <li><a class="animation-a-yellow" href="index.php?page=home#leaderboard">Leaderboard</a></li>
                <li><a class="animation-a" href="index.php?page=event">Event</a></li>
                <li>
                    <div class="nav-profile-div">

                        <img class="pfp-img box-drop-shadow" src="<?php echo $profile_pic ?> " />
                        <?php echo $loginbtn ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>