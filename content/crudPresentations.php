<?php 

	// initialize variables
	$firstName = "";
	$lastName = "";
	$id = 0;
	$edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'conference');
    
    //if save button is clicked
	if (isset($_POST['save'])) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
        $query = "INSERT INTO speakers (firstName, lastName) VALUES ('$firstName', '$lastName')";
		mysqli_query($db, $query); 
		$_SESSION['msg'] = "Info saved"; 
		header('location: addPresentationForm.php');
	}
    
    //update records
    if (isset($_POST['update'])) {
	$firstName = mysql_real_escape_string($_POST['firstName']);
	$lastName = mysql_real_escape_string($_POST['lastName']);
    $id = mysql_real_escape_string($_POST['speakerID']);

	mysqli_query($db, "UPDATE speakers SET firstName='$firstName', lastName='$lastName' WHERE speakerID=$id");
	$_SESSION['msg'] = "Info updated!"; 
	header('location: addPresentationForm.php');
    }

    //retrieve records
    $results = mysqli_query($db,"SELECT firstName, lastName FROM speakers");


    


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM speakers WHERE speakerID=$id");
	$_SESSION['msg'] = "Info deleted!"; 
	header('location: addPresentationForm.php');
}

?>