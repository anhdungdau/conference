<?php 

session_start();

$value = "";
$result = "";

if (isset($_POST["presentationID"])) {
    foreach ($_POST["presentationID"] as $checkbox) {
        $value .= "(".$checkbox.",".$_SESSION['user']['attendeeID']."),";
    }
}

$result .= rtrim($value,",").";";

$db = mysqli_connect('localhost', 'root', '', 'conference'); 
$query = "INSERT INTO register (presentationID, attendeeID) VALUES $result";

if (mysqli_query($db, $query)) {
    echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to connect to the database";
}

mysqli_close($db);
header( "refresh:3;url=showRegisters.php" );
echo 'You will be redirected to the presentations registered list shortly!';
exit();
?>
