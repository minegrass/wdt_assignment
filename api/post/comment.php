<?php

if (isset($_POST['submit'])) {
    include_once '../../Includes/DbConnection.php';


    echo "$_POST[comment]+";
    echo "$_POST[userid]+";
    echo "$_POST[organizerid]+";
    echo "$_POST[eventid] event";

    //     // Prepare and bind
    $sql = mysqli_query($conn, "INSERT INTO user_organizer_comment (userid, organizerid, comment,rating) VALUES ( '$_POST[userid]','$_POST[organizerid]',  '$_POST[comment]',$_POST[rating])");
    if (!$sql) {
        die("Error: " . $sql . "<br>" . $conn->error);
    }
    header('Location: ../../index.php?page=comment&eventid=' . $_POST['eventid'] . '&comment=1');
} else {
    // Redirect back to the comment page with an error message
    header('Location: ../../index.php?page=comment&eventid=' . $_POST['eventid']);
}
