<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<small>
						<i style="color: #888;"><?php echo ucfirst($_SESSION['user']['user_type']); ?></i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>
				<?php endif ?>
			</div>
		</div>
		<div>
        <div><h1>Presentations Timetable</h1></div> 
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
                $sql = "SELECT presentations.presentationID, topics.title, CONCAT(speakers.firstName,'',speakers.lastName), speakers.company AS 'Company', presentations.startTime, presentations.duration, venues.title AS 'Venue', venues.location, venues.capacity FROM presentations
                INNER JOIN topics ON presentations.topicID = topics.topicID
                INNER JOIN speakers ON presentations.speakerID = speakers.speakerID
                INNER JOIN venues ON presentations.venueID = venues.venueID;";
                $result = mysqli_query($db,$sql);
            ?>
        <tr>
            <td>
                <?php echo $row['presentations.presentationID'];?>
            </td>
            <td>
                <?php echo $row['topics.title'];?>
            </td>
            <td>
                <?php echo $row['speakers.firstName'].''.$row['speakers.lastName'];?>
            </td>
            <td>
                <?php echo $row['speakers.company'];?>
            </td>
            <td>
                <?php echo $row['presentations.startTime'];?>
            </td>
            <td>
                <?php echo $row['presentations.duration'];?>
            </td>
            <td>
                <?php echo $row['venues.title'];?>
            </td>
            <td>
                <?php echo $row['venues.location'];?>
            </td>
            <td>
                <?php echo $row['venues.capacity'];?>
            </td>
        </tr>
        <?php 
        }
        mysqli_close($con);  
        ?>
    </table>
	    
	    
	    </div>
	</div>
</body>
</html>