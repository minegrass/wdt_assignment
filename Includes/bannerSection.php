<?php

function bannerSection($totalPeople)
{
    echo '
<div class="top-banner-img" alt="Top-banner" class="logo">
    <div class="top-banner-text-div">
        <div>
            <span class="top-banner-span special-font text-over">Over</span>
            <span class="top-banner-span-num special-font"> ' . $totalPeople . '</span>
            <span class="top-banner-span special-font text-people">People</span>
        </div>
        <div class="join-us-div">
            <span class="top-banner-span special-font">Supported Us</span>
            <a class="join-us-btn box-drop-shadow" href="wdt_assignment-main/index.php?page=event">Join Us!</a>
        </div>
    </div>

</div>';
}
