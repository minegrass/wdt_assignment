<?php
session_start();

if (isset($_POST['submit'])) {
    // Get the form data
    $eventid = $_POST['eventid'];
    $organizerid = $_POST['organizerid'];
    $userid = $_POST['userid'];
    $comment = $_POST['comment'];

    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO comments (eventid, organizerid, userid, comment) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiis", $eventid, $organizerid, $userid, $comment);

    // Execute the statement
    $stmt->execute();

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Redirect back to the comment page
    header("Location: ../comment.php?comment=success");
    exit();
} else {
    // Redirect back to the comment page with an error message
    header("Location: ../comment.php?error=nosubmit");
    exit();
}
