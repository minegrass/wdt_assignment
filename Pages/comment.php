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
    <div>
        <?php
        // for each
        foreach ($commentList as $comment) {
            $userid = $comment['userid'];
            $userResult = mysqli_query($conn, "SELECT * FROM user WHERE userid = $userid");
            $userList = mysqli_fetch_all($userResult, MYSQLI_ASSOC);
            $username = $userList[0]['username'];
            $comment = $comment['comment'];
            echo "
    <div>
        <h3>$username</h3>
        <p>$comment</p>
    </div>
    ";
        }




        ?>

        <div>
            <h1>Comment:</h1>

            <form action="api/post/comment.php" method="post">
                <input type="hidden" name="eventid" id="eventid" value="<?php echo $eventid ?>">
                <input type="hidden" name="organizerid" id="organizerid" value="<?php echo $organizerid ?>">
                <h1>Fake userid</h1>
                <input type="text" name="userid" id="userid">
                <h1>Comment</h1>
                <input type="text" name="comment" id="comment">
                <h1>Rating</h1>
                <input type="number" name="rating" id="rating" min="1" max="5">
                <button type="submit" name="submit" id="submit">Submit</button>
            </form>
        </div>
        <?php
        if (isset($_GET['comment'])) {
            if ($_GET['comment'] == 1) {
                echo "<p>Comment successfully added!</p>";
            } else if ($_GET['comment'] == 0) {
                echo "<p>Comment failed to add!</p>";
            }
        }


        ?>

    </div>

</div>