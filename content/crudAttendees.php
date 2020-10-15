<?php 

	// initialize variables
	$firstName = "";
	$lastName = "";
    $email = "";
    $phone = "";
    $company = "";
    $username = "";
    $password = "";
    $user_type = "";
	$id = 0;
	$edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'conference');
    
    //if add button is clicked
	if (isset($_POST['add'])) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $query = "INSERT INTO attendees (firstName, lastName, email, phone, company, username, password, user_type) VALUES ('$firstName', '$lastName','$email','$phone','$company','$username', '2ac9cb7dc02b3c0083eb70898e549b63','user')";
		mysqli_query($db, $query); 
        session_start();
		echo $_SESSION['msg'] = "An attendee has been added"; 
		header('location: addAttendeeForm.php');
        exit();
	}
    
    //update records
    if (isset($_POST['update'])) {
        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $company = mysqli_real_escape_string($db, $_POST['company']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $id = mysqli_real_escape_string($db, $_POST['attendeeID']);
        mysqli_query($db, "UPDATE attendees SET firstName='$firstName', lastName='$lastName', email='$email', phone='$phone', company='$company', username='$username' WHERE attendeeID=$id");
        session_start();
        $_SESSION['msg'] = "The attendee has been updated!"; 
        header('location: addAttendeeForm.php');
        exit();
        }

    //delete records
    $results = mysqli_query($db,"SELECT * FROM attendees");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM attendees WHERE attendeeID=$id");
        session_start();
        $_SESSION['msg'] = "The attendee has been deleted!"; 
        header('location: addAttendeeForm.php');
        exit();
    }

?>
