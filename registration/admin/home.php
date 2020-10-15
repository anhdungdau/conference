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
	<title>AdminHomePage</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
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
	
		<h1>Admin - Home Page</h1>	
		<br><br>
		<ol>
            <a href="../../content/addPresentationForm.php">Presentations</a><br><br>
            <a href="../../content/addTopicForm.php">Topics</a><br><br>
            <a href="../../content/addSpeakerForm.php">Speakers</a><br><br>
            <a href="../../content/addVenueForm.php">Venues</a><br><br>
            <a href="../../content/addAttendeeForm.php">Attendees</a>
        </ol>
		
</body>
</html>