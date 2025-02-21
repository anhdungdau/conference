<?php include('../include/session.php'); ?>

<!DOCTYPE html>
<html>
    <?php include('../include/header.php'); ?>
        <body>
            <?php include('../include/navbar.php'); ?>
                <center><h1>Speakers List</h1>
                <br><br>
                <table id="table">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                    </tr>
                    <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'conference'); 
                        $sql = "SELECT * FROM speakers ORDER BY speakerID";
                        $result = mysqli_query($db,$sql);
                        while ($row=mysqli_fetch_array($result)) {                    
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['speakerID'];?>
                            </td>
                            <td>
                                <?php echo $row['firstName'];?>
                            </td>
                            <td>
                                <?php echo $row['lastName'];?>
                            </td>
                            <td>
                                <?php echo $row['email'];?>
                            </td>
                            <td>
                                <?php echo $row['phone'];?>
                            </td>
                            <td>
                                <?php echo $row['company'];?>
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