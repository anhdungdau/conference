<?php 

	// initialize variables
	$title = "";
	$location = "";
    $capacity = "";
	$id = 0;
	$edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'conference');
    
    //if add button is clicked
	if (isset($_POST['add'])) {
		$title = $_POST['title'];
		$location = $_POST['location'];
        $capacity = $_POST['capacity'];
        $query = "INSERT INTO venues (title, location, capacity) VALUES ('$title', '$location','$capacity')";
		mysqli_query($db, $query); 
        session_start();
		echo $_SESSION['msg'] = "A venue has been added"; 
		header('location: addVenueForm.php');
        exit();
	}
    
    //update records
    if (isset($_POST['update'])) {
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $location = mysqli_real_escape_string($db, $_POST['location']);
        $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
        $id = mysqli_real_escape_string($db, $_POST['venueID']);
        mysqli_query($db, "UPDATE venues SET title='$title', location='$location', capacity='$capacity' WHERE venueID=$id");
        session_start();
        $_SESSION['msg'] = "The venue has been updated!"; 
        header('location: addVenueForm.php');
        exit();
        }

    //delete records
    $results = mysqli_query($db,"SELECT * FROM venues");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM venues WHERE venueID=$id");
        session_start();
        $_SESSION['msg'] = "The venue has been deleted!"; 
        header('location: addVenueForm.php');
        exit();
    }

?>
