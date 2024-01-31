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

function log_out()
{
    setcookie("user", "", time() - 3600, '/');
    header("Location: index.php?page=login");
}
// $result = mysqli_query($conn, "SELECT * FROM event WHERE eventid = $eventid");
// $eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $organizerid = $eventList[0]['organizerid'];
// $commentResult = mysqli_query($conn, "SELECT * FROM user_organizer_comment WHERE organizerid = $organizerid");
// $commentList = mysqli_fetch_all($commentResult, MYSQLI_ASSOC);
include_once("Includes/navbar.php");

?>

<div>
    <?php include_once("Includes/user/userSidebar.php"); ?>
    <div>
        User-Page
    </div>
    <form method="post">
        <button input="submit" name="logout">Log out</button>
    </form>
</div>



<?php
if (array_key_exists('logout', $_POST)) {
    log_out();
}
?>