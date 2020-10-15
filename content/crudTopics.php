<?php 

	// initialize variables
	$title = "";
	$description = "";
	$id = 0;
	$edit_state = false;

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'conference');
    
    //if add button is clicked
	if (isset($_POST['add'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
        $query = "INSERT INTO topics (title, description) VALUES ('$title', '$description')";
		mysqli_query($db, $query); 
        session_start();
		echo $_SESSION['msg'] = "A topic has been added"; 
		header('location: addTopicForm.php');
        exit();
	}
    
    //update records
    if (isset($_POST['update'])) {
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $id = mysqli_real_escape_string($db, $_POST['topicID']);
        mysqli_query($db, "UPDATE topics SET title='$title', description='$description' WHERE topicID=$id");
        session_start();
        $_SESSION['msg'] = "The topic has been updated!"; 
        header('location: addTopicForm.php');
        exit();
        }

    //delete records
    $results = mysqli_query($db,"SELECT * FROM topics");
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM topics WHERE topicID=$id");
        session_start();
        $_SESSION['msg'] = "The topic has been deleted!"; 
        header('location: addTopicForm.php');
        exit();
    }

?>
