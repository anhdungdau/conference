<?php include('../include/session.php'); ?>

<!DOCTYPE html>
<html>
    <?php include('../include/header.php'); ?>

        <body>
            <?php include('../include/navbar.php'); ?>
                <h1>Welcome to the Australian Financial Pathways Conference (AFPC)</h1>
                <br>
                <div>
                    <h3>Presentations Timetable</h3>
                </div>
                <table id="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Speaker Name</th>
                        <th>Company</th>
                        <th>Start Time</th>
                        <th>Duration</th>
                        <th>Venue</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                    <?php 
                $db = mysqli_connect('localhost', 'root', '', 'conference'); 
                $sql = "SELECT * FROM showpre ORDER BY presentationID";
                $result = mysqli_query($db,$sql);
                while ($row=mysqli_fetch_array($result)) {                    
            ?>
                        <tr>
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
                            <td>
                                <?php echo $row['capacity'];?>
                            </td>
                        </tr>
                        <?php 
        }
        mysqli_close($db);  
        ?>
                </table>
        </body>

</html>