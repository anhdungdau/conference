<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'conference'); 
$sql = "SELECT * FROM register";

$choice = $_POST['presentationID'];

if (empty($choice)) {
    echo ("You did not select any presentation.");
    }
    else {
        $n = count($choice);
        $value = [];
        $query = ("INSERT INTO register (presentationID, attendeeID) VALUES ");
        
        for ($i=0; $i < $n; $i++) {
            $value .= ("(" .$choice[$i].",".$_SESSION['user']['attendeeID']."),");
    }
    $query .= rtrim($values,",").";";
    }

if (mysqli_query($db, $query)) {
    echo "Records added successfully";
    } else {
        echo "ERROR: Could not able to connect to the database";
}

mysqli_close($db);
?>








