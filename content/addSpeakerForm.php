<?php 
	include('../registration/functions.php');
	if (!isAdmin()) {
		$_SESSION['msg'] = "Admin login required!";
		header('location: ../admin/home.php');
        exit();
	}

    include('crudSpeakers.php');

    //fetch the record to be updated
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
        $edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM speakers WHERE speakerID=$id");
        $record = mysqli_fetch_array($rec);
        $firstName = $record['firstName'];
        $lastName = $record['lastName'];
        $email = $record['email'];
        $phone = $record['phone'];
        $company = $record['company'];
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
                    <a class="navbar-brand" href="../registration/admin/home.php">HomePage</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="addPresentationForm.php">Presentations</a></li>
                    <li><a href="addTopicForm.php">Topics</a></li>
                    <li><a href="addSpeakerForm.php">Speakers</a></li>
                    <li><a href="addAttendeeForm.php">Attendees</a></li>
                    <li><a href="addVenueForm.php">Venues</a></li>
                </ul>
                <div class="nav navbar-right">
                    <!-- notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <?php endif ?>
                            <?php  if (isset($_SESSION['user'])) : ?>
                                <strong><?php echo $_SESSION['user']['username']; ?></strong>
                                <i style="color: green;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                                <br>
                                <?php endif ?>
                                    <small><a href="../registration/index.php?logout='1'" style="color: red;">Logout</a></small>
                </div>
            </div>

        </nav>

        <?php if (isset($_SESSION['msg'])):?>
            <div class="msg">
                <?php 
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                ?>
            </div>
            <?php endif ?>

                <?php $results = mysqli_query($db, "SELECT * FROM speakers"); ?>
                    <center>
                        <h1>List of Speakers</h1></center>
                    <table>
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['firstName']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['lastName']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['phone']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['company']; ?>
                                    </td>
                                    <td>
                                        <a href="addSpeakerForm.php?edit=<?php echo $row['speakerID'];?>" class="edit_btn">Edit</a>
                                    </td>
                                    <td>
                                        <a href="crudSpeakers.php?del=<?php echo $row['speakerID']; ?>" class="del_btn">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>

                    <center>
                        <h2>Add a new speaker</h2></center>
                    <form method="post" action="crudSpeakers.php">
                        <input type="hidden" name="speakerID" value="<?php echo $id;?>">
                        <div class="input-group">
                            <label>Firstname</label>
                            <input type="text" name="firstName" value="<?php echo $firstName;?>">
                        </div>
                        <div class="input-group">
                            <label>Lastname</label>
                            <input type="text" name="lastName" value="<?php echo $lastName;?>">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="<?php echo $phone;?>">
                        </div>
                        <div class="input-group">
                            <label>Company</label>
                            <input type="text" name="company" value="<?php echo $company;?>">
                        </div>
                        <div class="input-group">
                            <?php if ($edit_state == true): ?>
                                <button class="btn" type="submit" name="update">Update</button>
                                <?php else: ?>
                                    <button class="btn" type="submit" name="add">Add</button>
                                    <?php endif ?>
                        </div>
                    </form>

    </body>

    </html>
