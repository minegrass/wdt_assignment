<?php
$result = $conn->query("SELECT eventid, COUNT(userid) AS user_count FROM user_event_req GROUP BY eventid ORDER BY user_count DESC");
$row = mysqli_fetch_all($result);

?>

<div>
    <div>
        <?php
        foreach ($row as $event) {;
            $eventName = $conn->query("SELECT title FROM event WHERE eventid = $event[0]");
            $eventName = mysqli_fetch_assoc($eventName);
            echo "<h1> " . $event[1] . "  has joined " . $eventName['title'] . "</h1>";
        }




        ?>
    </div>
</div>