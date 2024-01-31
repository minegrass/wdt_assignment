<?php
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : "user/profile";


$profile = $_GET['page'] == "user/profile" ? "sidebar-active" : "inactive";

$event = $_GET['page'] == "user/event" ? "sidebar-active" : "inactive";

$security = $_GET['page'] == "user/security" ? "sidebar-active" : "inactive";

?>


<div>
    <ul>
        <li>
            <a class=<?php
                        echo $event;
                        ?> href="?page=user/event">Events</a>
        </li>
        <li>
            <a class=<?php
                        echo $profile;
                        ?> href="?page=user/profile">Profile</a>
        </li>
        <li>
            <a class=<?php
                        echo $security;
                        ?> href="?page=user/security">Security</a>
        </li>
    </ul>
</div>