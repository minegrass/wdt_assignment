<?php
if (!isset($_COOKIE['user'])) { // OR isset($_SESSION['user']), if array
    // Not Logged in
    header('Location: index.php?page=login');
} else {
    // Logged in
    $user_details = json_decode($_COOKIE['user'], true);
}
