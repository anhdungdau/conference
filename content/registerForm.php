<?php 
    include('../include/session.php'); 
    $db = mysqli_connect('localhost', 'root', '', 'conference'); 
    $sql = "SELECT * FROM showpre ORDER BY presentationID";
    $result = mysqli_query($db,$sql); 
?>

    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conference</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

        <body>
            <?php include('../include/navbar.php'); ?>
                <center><h3>Registration for Presentations</h3>
                <br>
                <br>
                <form id="fm" method="post" action="registerFunction.php">
                    <table id="table">
                        <tr>
                            <th>Register</th>
                            <th>ID</th>
                            <th>Topic</th>
                            <th>Speaker</th>
                            <th>Company</th>
                            <th>Start Time</th>
                            <th>Duration</th>
                            <th>Venue</th>
                            <th>Location</th>
                        </tr>
                        <?php 
                while ($row=mysqli_fetch_array($result)) {                    
            ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="presentationID[]" value="'<?php echo $row['presentationID'];?>'">
                                </td>
                                <td>
                                    <?php echo $row['presentationID'];?>
                                </td>
                                <td>
                                    <?php echo $row['title'];?>
                                </td>
                                <td>
                                    <?php echo $row['Speaker'];?>
                                </td>
                                <td>
                                    <?php echo $row['Company'];?>
                                </td>
                                <td>
                                    <?php echo $row['startTime'];?>
                                </td>
                                <td>
                                    <?php echo $row['duration'];?>
                                </td>
                                <td>
                                    <?php echo $row['Venue'];?>
                                </td>
                                <td>
                                    <?php echo $row['location'];?>
                                </td>
                            </tr>
                            <?php 
        }
        mysqli_close($db);  
        ?>
                    </table>
                    <input type="submit" value="Selected registration">
                </form>
                </center>
        </body>

    </html>