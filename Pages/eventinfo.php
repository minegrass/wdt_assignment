<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    
    ";
};

function customPageFooter()
{
    echo "
    
    ";
};

include_once("Includes/header.php");

// get the GET
$eventid = $_GET['eventid'];


$result = mysqli_query($conn, "SELECT * FROM event WHERE eventid = $eventid");
$eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);
$organizerid = $eventList[0]['organizerid'];
$commentResult = mysqli_query($conn, "SELECT * FROM user_organizer_comment WHERE organizerid = $organizerid");
$commentList = mysqli_fetch_all($commentResult, MYSQLI_ASSOC);
include_once("Includes/navbar.php");

?>

<div>
    <?php
    echo "<h1>" . $eventList[0]['title'] . "</h1>";

    ?>

    <?php
    // for each comment result
    foreach ($commentList as $comment) {
        // get the user id
        $userid = $comment['userid'];
        // get the user info
        $userResult = mysqli_query($conn, "SELECT * FROM user WHERE userid = $userid");
        $userList = mysqli_fetch_all($userResult, MYSQLI_ASSOC);
        // get the username
        $username = $userList[0]['username'];
        // get the comment
        $comment = $comment['comment'];
        // print the comment
        echo "<p>" . $username . ": " . $comment . "</p>";
    }


    ?>
    <a>Join</a>
    <a>Report Abuse</a>



</div>