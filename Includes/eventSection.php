<?php


function eventSection($eventList)
{



    echo '
<div class="event-section-div">
   
    <!-- event card section -->
    <div class="eventlist-title">
        <h1>
            Currently <a class="eventlist-text-hot" href="#">Hot</a> Events
            <a class="eventlist-text-near" href="#">
                near you
            </a>
        </h1>

    </div>
    <div class="eventlist-div">';

    foreach ($eventList as $event) {
        eventCard($event['title'], $event['desc_short'], "https://picsum.photos/200/300", "wdt_assignment-main/index.php?page=event&eventid=" . $event['eventid']);
    }



    echo '
    </div>
    <div class="eventlist-circle-div">
        <div>
            <div class="eventlist-circle eventlist-circle-active"></div>
            <div class="eventlist-circle"></div>
            <div class="eventlist-circle"></div>

        </div>

    </div>
    <div class="eventlist-more-div">
        <a href="#" class="eventlist-more-a">View More</a>
    </div>

</div>
<div>
    <!-- about us section -->
</div>
<div>
    <!-- earth section -->
</div>
';
}
