<?php 
	include('../functions.php');
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../admin/home.php');
	}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../admin/home.php">HomePage</a>
                </div>
                <div class="nav navbar-right">
                    <!-- notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <?php endif ?>
                            <?php  if (isset($_SESSION['user'])) : ?>
                                <strong><?php echo $_SESSION['user']['username']; ?></strong>
                                <i style="color: green;"><?php echo ucfirst($_SESSION['user']['user_type']); ?></i>
                                <br>
                                <?php endif ?>
                                    <small><a href="../index.php?logout='1'" style="color: red;">Logout</a></small>
                </div>
            </div>
        </nav>

        <center>
            <h1>Australian Financial Pathways Conference</h1>
            <h1>Admin - Home Page</h1>
            <br>
            <br>

            <div class="container">

                <button onclick="location.href='../../content/addPresentationForm.php'" type="button" class="btn btn-primary btn-md">Presentations</button>
                <button onclick="location.href='../../content/addTopicForm.php'" type="button" class="btn btn-primary btn-md">Topics</button>
                <button onclick="location.href='../../content/addSpeakerForm.php'" type="button" class="btn btn-primary btn-md">Speakers</button>
                <button onclick="location.href='../../content/addVenueForm.php'" type="button" class="btn btn-primary btn-md">Venues</button>
                <button onclick="location.href='../../content/addAttendeeForm.php'" type="button" class="btn btn-primary btn-md">Attendees</button>
            </div>
            
            
            <h3>Presentations Timetable</h3>
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
            
        </center>

    </body>

    </html>
