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
    <div>Events</div>
    <div>Search Bar</div>
    <div><a>Ongoing</a>/ <a>Upcoming</a>/ <a>Near You</a></div>

    <div>
        <div class="eventlist-div">
            <!-- for each event list do below html -->
            <div class="event-row-div">
                <?php
                $element = 0;

                foreach ($eventList as $event) {
                    if ($element >= 4) {
                        echo "</div><div class='event-row-div'>";
                        eventCard($event['title'], $event['desc_short'], "https://picsum.photos/200/300", "index.php?page=eventinfo&eventid=" . $event['eventid']);
                        echo "<div class='event-row-div'>";
                        $element = 0;
                    } else {
                        eventCard($event['title'], $event['desc_short'], "https://picsum.photos/200/300", "index.php?page=eventinfo&eventid=" . $event['eventid']);
                        $element++;
                    }
                }
                ?>
            </div>

        </div>

    </div>


</div>