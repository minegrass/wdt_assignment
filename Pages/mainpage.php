<?php
$PageTitle = "Main Page";
function customPageHeader(){
    echo "<link rel='stylesheet' type='text/css' href='../Styles/mainpage.css'>";
};

?>
<?php include_once("../Includes/header.php"); ?>
<?php
$result = mysqli_query($conn,"SELECT COUNT(*) AS totalPeople FROM user");
$row = mysqli_fetch_assoc($result);
$totalPeople = $row['totalPeople'];
?>
<h1>This is main page</h1>
<div>
    <h1 class="red">
 Already have <?php echo $totalPeople ?> people joined us!
 </h1>


</div>
<?php include_once("../Includes/footer.php"); ?>