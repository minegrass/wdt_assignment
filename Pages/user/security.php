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
$emailbtn = $optionid == 1 ? "<a class='special-font'>Email</a>" : "<a href='?page=user/security&optionid=1'>Email</a>";
$passwordbtn = $optionid == 2 ? "<a class='special-font'>Password</a>" : "<a href='?page=user/security&optionid=2'>Password</a>";
// search all event details from userEventList id

include_once("Includes/navbar.php");
?>

<div>
    Security
    <div>
        <div>
            <?php include_once("Includes/user/userSidebar.php"); ?>
        </div>
        <div>
            <ul>
                <li>
                    <?php echo $emailbtn; ?>
                </li>
                <li>
                    <?php echo $passwordbtn; ?>

                </li>
            </ul>
        </div>
        <div>
            <div>
                <?php
                $optionid == 1 ? include_once("Includes/user/emailForm.php") : include_once("Includes/user/passwordForm.php");
                ?>
            </div>
        </div>
    </div>
</div>