<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/home.css'>
    <link rel='stylesheet' type='text/css' href='Styles/bannerSection.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventCard.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventList.css'>
    <link rel='stylesheet' type='text/css' href='Styles/mapSection.css'>
    <link rel='stylesheet' type='text/css' href='Styles/mapSection.css'>
    
    ";
};

function customPageFooter()
{
    echo "
    <script src='Scripts/mapSection.js'></script>
    
    ";
};


include_once("Includes/header.php");
include_once("Includes/bannerSection.php");
include_once("Includes/eventCard.php");
include_once("Includes/eventSection.php");

$result = mysqli_query($conn, "SELECT COUNT(*) AS totalPeople FROM user");
$row = mysqli_fetch_assoc($result);
$totalPeople = $row['totalPeople'];

$result = mysqli_query($conn, "SELECT COUNT(*) AS totalEvents FROM event");
$row = mysqli_fetch_assoc($result);
$totalEvents = $row['totalEvents'];

$result = mysqli_query($conn, "SELECT * FROM event ORDER BY eventid DESC LIMIT 15");
$eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);

include_once("Includes/navbar.php");

?>

<div>

    <div>
        <?php bannerSection($totalPeople); ?>
    </div>
    <div>
        <?php eventSection($eventList); ?>
    </div>
    <div id="aboutus">
        <!-- About Us -->
        Aboutt
    </div>
    <div>
        <!-- map section -->

        <?php include_once("Includes/mapSection.php"); ?>


    </div>
    <div id="leaderboard">
        <!-- leaderboard section -->
        <?php include_once("Includes/leaderboardSection.php"); ?>

    </div>
</div>