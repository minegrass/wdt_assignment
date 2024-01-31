<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/eventCard.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventPage.css'>
    ";
};

function customPageFooter()
{
    echo "
    
    ";
};

include_once("Includes/header.php");

$result = mysqli_query($conn, "SELECT * FROM event ORDER BY eventid DESC");
$eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);


include_once("Includes/navbar.php");
include_once("Includes/eventCard.php")
?>

<div>
    <div>
        Manage sidebar
    </div>

    <div>
        <!-- Event section -->
        <div><a>Joined</a>/<a>Ended</a>/<a>Declined</a></div>

    </div>


</div>