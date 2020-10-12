<?php
    $sql = 
    $result1 = mysqli_query();
        
?>


$sql = "SELECT presentations.presentationID, topics.title, CONCAT(speakers.firstName,'',speakers.lastName), speakers.company AS 'Company', presentations.startTime, presentations.duration, venues.title AS 'Venue', venues.location, venues.capacity FROM presentations
                INNER JOIN topics ON presentations.topicID = topics.topicID
                INNER JOIN speakers ON presentations.speakerID = speakers.speakerID
                INNER JOIN venues ON presentations.venueID = venues.venueID;";
                $result = mysqli_query($db,$sql);
                while ($row=mysqli_fetch_array($result)) {    