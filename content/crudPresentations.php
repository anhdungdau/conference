<?php 

	// initialize variables
	$startTime = "";
	$duration = "";
	$id = 0;
	$edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'conference');
    
    //if add button is clicked
	if (isset($_POST['add'])) {
		$startTime = $_POST['startTime'];
		$duration = $_POST['duration'];
        $query = "INSERT INTO presentations (startTime, duration, capacity) VALUES ('$startTime', '$duration','$capacity')";
		mysqli_query($db, $query); 
        session_start();
		echo $_SESSION['msg'] = "A presentation has been added"; 
		header('duration: addPresentationForm.php');
        exit();
	}
    
    //update records
    if (isset($_POST['update'])) {
        $startTime = mysqli_real_escape_string($db, $_POST['startTime']);
        $duration = mysqli_real_escape_string($db, $_POST['duration']);
        $id = mysqli_real_escape_string($db, $_POST['presentationID']);
        mysqli_query($db, "UPDATE presentations SET startTime='$startTime', duration='$duration' WHERE presentationID=$id");
        session_start();
        $_SESSION['msg'] = "The presentation has been updated!"; 
        header('duration: addPresentationForm.php');
        exit();
        }

    //delete records
    $results = mysqli_query($db,"SELECT * FROM presentations");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM presentations WHERE presentationID=$id");
        session_start();
        $_SESSION['msg'] = "The presentation has been deleted!"; 
        header('duration: addPresentationForm.php');
        exit();
    }

?>
