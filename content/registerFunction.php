<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'conference');
$sql = "SELECT * FROM showpre ORDER BY presentationID";
$result = mysqli_query($db,$sql); 

$choice = $_POST['presentationID'];
if (empty($choice)) {
echo ("You did not select any presentation.");
}
else {
    $n = count($choice);
    $value = "";
    $query = ("INSERT");

$values = "";

$query = "INSERT INTO register (presentationID, attendeeID) VALUES ";

for ($i=0; $i < $n; $i++) {
    $values .= ("(".$choice[$i].",".$_SESSION['user']['id'].")");
}

$query .= rtrim($values,",").";";
}

if (mysqli_query($db, $query)) {
    echo "Records added successfully";
} else {
    echo "ERROR: Could not able to execute $sql.".mysqli_error($db);
}
mysqli_close($db);



?>