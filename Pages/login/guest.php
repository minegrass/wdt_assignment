<?php
$PageTitle = "Charity Hub - Home";
if (isset($_COOKIE['user'])) { // OR isset($_SESSION['user']), if array
    // Logged In
    header('Location: index.php?page=user/index');
}

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


// $result = mysqli_query($conn, "SELECT * FROM event WHERE eventid = $eventid");
// $eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $organizerid = $eventList[0]['organizerid'];
// $commentResult = mysqli_query($conn, "SELECT * FROM user_organizer_comment WHERE organizerid = $organizerid");
// $commentList = mysqli_fetch_all($commentResult, MYSQLI_ASSOC);
include_once("Includes/navbar.php");

?>

<div>
    <div>
        <h1>Login</h1>
        <form action="api/post/login.php" method="post">
            <!-- login form with username and password -->
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>

        </form>
        <!-- fail pop up -->
        <?php
        if (isset($_GET['fail']) && $_GET['fail'] == "true") {

            echo "<div'>
                Incorrect username or password!
              </div>";
        }

        ?>
    </div>
    <div>
        <a href="?page=register">Doesnt have an account?</a>
    </div>
    <div>
        <a href="?page=login/organizer">Organizer Login</a>
    </div>

</div>