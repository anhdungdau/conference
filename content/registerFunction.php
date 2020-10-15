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

echo "Registration added successfully!";
header( "refresh:3;url=#" );
echo 'You will be redirected to the Register List shortly';
exit();
mysqli_close($db);

?>


