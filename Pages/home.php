<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/home.css'>
    <link rel='stylesheet' type='text/css' href='Styles/bannerSection.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventCard.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventList.css'>
    
    ";
};


include_once("Includes/header.php");
include_once("Includes/bannerSection.php");
include_once("Includes/eventCard.php");

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
        <?php bannerSection($totalPeople) ?>
    </div>
    <div class="event-section-div">
        <?php


        ?>
        <!-- event card section -->
        <div class="eventlist-title">
            <h1>
                Currently <a class="eventlist-text-hot" href="#">Hot</a> Events
                <a class="eventlist-text-near" href="#">
                    near you
                </a>
            </h1>

        </div>
        <div class="eventlist-div">
            <?php
            foreach ($eventList as $event) {
                eventCard($event['title'], $event['desc_short'], "https://picsum.photos/200/300", "wdt_assignment-main/index.php?page=event&eventid=" . $event['eventid']);
            }
            ?>



        </div>
        <div class="eventlist-circle-div">
            <div>
                <div class="eventlist-circle eventlist-circle-active"></div>
                <div class="eventlist-circle"></div>
                <div class="eventlist-circle"></div>

            </div>

        </div>
        <a href="#" class="eventlist-more ">View More</a>

    </div>
    <div>
        <!-- about us section -->
    </div>
    <div>
        <!-- earth section -->
    </div>
    <div id="leaderboard">
        <!-- leaderboard section -->
        LeaderBoarder
    </div>

</div>