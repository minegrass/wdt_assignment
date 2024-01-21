<?php
include_once("Includes/header.php");
function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/mapSection.css'>
    
    ";
};
?>
<div class="map-section-div">
    <div class="rel-div">
        <image src="Includes/svg/mys-map.svg" class="mys-img">
            <div class="round-mask"></div>
    </div>
</div>


<?php include_once("Includes/footer.php"); ?>