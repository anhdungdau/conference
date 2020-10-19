<?php include('../include/session.php'); ?>

<!DOCTYPE html>
<html>
    <?php include('../include/header.php'); ?>
        <body>
            <?php include('../include/navbar.php'); ?>
                <center><h1>Venues List</h1>
                <br><br>
                <table id="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                    <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'conference'); 
                        $sql = "SELECT * FROM venues ORDER BY venueID";
                        $result = mysqli_query($db,$sql);
                        while ($row=mysqli_fetch_array($result)) {                    
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['venueID'];?>
                            </td>
                            <td>
                                <?php echo $row['title'];?>
                            </td>
                            <td>
                                <?php echo $row['location'];?>
                            </td>
                            <td>
                                <?php echo $row['capacity'];?>
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