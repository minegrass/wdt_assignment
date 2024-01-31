<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/userPage.css'>
    ";
};

function customPageFooter()
{
    echo "
    
    ";
};

include_once("Includes/loginVerification.php");
include_once("Includes/header.php");

// get the GET
if (isset($_GET['optionid'])) {
    $optionid = $_GET['optionid'];
} else {
    $optionid = 1;
}
// if ($optionid == 2) {
//     // ended event

// } else if ($optionid == 3) {
//     // declined event
// } else {
//     // Joined event
//     $optionid = 1;
// }
$userid = json_decode($_COOKIE['user'], true)['userid'];

$result = mysqli_query($conn, "SELECT * FROM event WHERE eventid IN (SELECT eventid FROM user_event_req WHERE userid = $userid)");
$userEventList = mysqli_fetch_all($result, MYSQLI_ASSOC);

$joinedBtn = $optionid != 2 && $optionid != 3 ? "<a class='special-font'>Joined</a>" : "<a href='?page=user/event&optionid=1'>Joined</a>";
$endedBtn = $optionid == 2 ? "<a class='special-font'>Ended</a>" : "<a href='?page=user/event&optionid=2'>Ended</a>";
$declinedBtn = $optionid == 3 ? "<a class='special-font'>Declined</a>" : "<a href='?page=user/event&optionid=3'>Declined</a>";

// search all event details from userEventList id

include_once("Includes/navbar.php");
?>

<div>
    Event Page
    <div>
        <!-- profile vertical nav bar -->
        <?php include_once("Includes/user/userSidebar.php"); ?>
        <div>
            <ul>
                <li>
                    <?php echo $joinedBtn ?>
                </li>
                <li>
                    <?php echo $endedBtn ?>
                </li>
                <li>
                    <?php echo $declinedBtn ?>
                </li>
            </ul>
        </div>
        <!-- event section -->
        <div>
            <?php
            foreach ($userEventList as $event) {
                echo "<div>" .
                    $event['eventid'] .
                    $event['title'] .
                    "</div>";
            }


            ?>
        </div>
    </div>
</div>