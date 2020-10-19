<?php include('../include/session.php'); ?>

<!DOCTYPE html>
<html>
    <?php include('../include/header.php'); ?>
        <body>
            <?php include('../include/navbar.php'); ?>
                <center><h1>List of registered attendees</h1>
                <br><br>
                <table id="table">
                    <tr>
                        <th>ID</th>
                        <th>Attendee</th>
                        <th>Presentation No.</th>
                        <th>Start Time</th>
                    </tr>
                    <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'conference'); 
                        $sql = "SELECT * FROM registration ORDER BY attendeeID";
                        $result = mysqli_query($db,$sql);
                        while ($row=mysqli_fetch_array($result)) {                    
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['attendeeID'];?>
                            </td>
                            <td>
                                <?php echo $row['Attendee'];?>
                            </td>
                            <td>
                                <?php echo $row['presentationID'];?>
                            </td>
                            <td>
                                <?php echo $row['startTime'];?>
                            </td>
                        </tr>
                        <?php 
                            }
                            mysqli_close($db);  
                        ?>
                </table>
            </center>
        </body>
</html>