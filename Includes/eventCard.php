<?php

function eventCard($title, $description, $image, $link)
{
    echo '
    <a href="' . $link . '">
        <div class="eventcard-div box-drop-shadow">
            <img class="eventcard-bg-img" src="' . $image . '" alt="Event Image">
            <div class="eventcard-text-div">
                <h1>' . $title . '</h1>
                <p>' . $description . '</p>
            </div>

        </div>
    </a>
    ';
}
