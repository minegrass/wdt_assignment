<!--Header template for all html pages  -->
<?php
include_once("DbConnection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link type="text/css" rel="stylesheet" href="../Styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Arvo&display=swap" rel="stylesheet">
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
    <title><?php echo (isset($PageTitle) ? $PageTitle : "Charity Hub")?></title>
    
</head>
<body>

