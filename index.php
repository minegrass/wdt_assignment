
<?php
// dont touch anything here
// Check if the 'page' parameter is set in the URL
if (isset($_GET['page'])) {
    // Get the value of 'page'
    $page = $_GET['page'];
    // Check if the file exists
    if (file_exists("./pages/$page.php")) {
        // Include the file
        include "./pages/$page.php";
    } else {
        // Include the 404 page
        include "./pages/404.php";
    }
} else {
    // Include the home page
    include "./pages/home.php";
}

include "./includes/footer.php";
