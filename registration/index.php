<?php 
	include('functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
    <?php include('../include/header.php'); ?>
        <body>
            <?php include('../include/navbar.php'); ?>
                <h1>Welcome to the Australian Financial Pathways Conference (AFPC)</h1>
                <br>
                <div>
                    <h3>Timetable of Presentations</h3></div>
                <table id="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Speaker Name</th>
                        <th>Company</th>
                        <th>Start Time</th>
                        <th>Duration</th>
                        <th>Venue</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                    <?php 
                $db = mysqli_connect('localhost', 'root', '', 'conference'); 
                $sql = "SELECT * FROM showpre ORDER BY presentationID";
//                $sql = "SELECT presentations.presentationID, topics.title, CONCAT(speakers.firstName,'',speakers.lastName) AS 'Speaker', speakers.company AS 'Company', presentations.startTime, presentations.duration, venues.title AS 'Venue', venues.location, venues.capacity FROM presentations
//                INNER JOIN topics ON presentations.topicID = topics.topicID
//                INNER JOIN speakers ON presentations.speakerID = speakers.speakerID
//                INNER JOIN venues ON presentations.venueID = venues.venueID;";
                $result = mysqli_query($db,$sql);
                while ($row=mysqli_fetch_array($result)) {                    
            ?>
                        <tr>
                            <td>
                                <?php echo $row['presentationID'];?>
                            </td>
                            <td>
                                <?php echo $row['title'];?>
                            </td>
                            <td>
                                <?php echo $row['Speaker'];?>
                            </td>
                            <td>
                                <?php echo $row['Company'];?>
                            </td>
                            <td>
                                <?php echo $row['startTime'];?>
                            </td>
                            <td>
                                <?php echo $row['duration'];?>
                            </td>
                            <td>
                                <?php echo $row['Venue'];?>
                            </td>
                            <td>
                                <?php echo $row['location'];?>
                            </td>
                            <td>
                                <?php echo $row['capacity'];?>
                            </td>
                        </tr>
                        <?php 
        }
        mysqli_close($db);  
        ?>
                </table>
        </body>
</html>