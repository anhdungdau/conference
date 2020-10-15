<?php 
    
	// initialize variables
	$firstName = "";
	$lastName = "";
    $email = "";
    $phone = "";
    $company = "";
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
        $query = "INSERT INTO speakers (firstName, lastName, email, phone, company) VALUES ('$firstName', '$lastName','$email','$phone','$company')";
		mysqli_query($db, $query); 
		echo $_SESSION['msg'] = "Info added"; 
		header('location: addSpeakerForm.php');
	}
    
    //update records
    if (isset($_POST['update'])) {
        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $company = mysqli_real_escape_string($db, $_POST['company']);
        $id = mysqli_real_escape_string($db, $_POST['speakerID']);
        mysqli_query($db, "UPDATE speakers SET firstName='$firstName', lastName='$lastName', email='$email', phone='$phone', company='$company' WHERE speakerID=$id");
        echo $_SESSION['msg'] = "Info updated!"; 
        header('location: addSpeakerForm.php');
        }

    //delete records
    $results = mysqli_query($db,"SELECT * FROM speakers");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM speakers WHERE speakerID=$id");
        echo $_SESSION['msg'] = "Info deleted!"; 
        header('location: addSpeakerForm.php');
    }

?>
