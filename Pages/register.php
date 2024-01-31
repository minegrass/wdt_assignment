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
    <script src='Scripts/register.js'></script>
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
        <h1>Register</h1>

        <div>
            <form id="registerForm" action="api/post/register.php" onsubmit="return registerValidate()" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="name" placeholder="Name" required>
                <input type="date" name="birthdate" placeholder="Birthdate" required>


                <!-- select for gender, option male,female,prefer not to say -->
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">female</option>
                    <option value="none">Prefer not to say</option>
                </select>
                <select name="state">
                    <!-- make options for all states in malaysia -->
                    <option value="johor">Johor</option>
                    <option value="kedah">Kedah</option>
                    <option value="kelantan">Kelantan</option>
                    <option value="melaka">Melaka</option>
                    <option value="negeri-sembilan">Negeri Sembilan</option>
                    <option value="pahang">Pahang</option>
                    <option value="penang">Penang</option>
                    <option value="perak">Perak</option>
                    <option value="perlis">Perlis</option>
                    <option value="sabah">Sabah</option>
                    <option value="sarawak">Sarawak</option>
                    <option value="selangor">Selangor</option>
                    <option value="terengganu">Terengganu</option>
                    <option value="kuala-lumpur">Kuala Lumpur</option>

                </select>
                <input type="submit" value="submit">
            </form>
        </div>

    </div>

</div>