<nav class="navbar navbar-default">
    <div class="container-fluid">
       
        <div class="navbar-header">
            <a class="navbar-left" href="../registration/index.php"><img src="../img/logo.png"><h4>Financial Services</h4></a>
        </div>
        
        <ul class="nav navbar-nav">
            <li><a href="../content/registerForm.php">Register for Presentations</a></li>
            <li><a href="../content/showPresentations.php">Presentations List</a></li>
            <li><a href="../content/showTopics.php">Topics List</a></li>
            <li><a href="../content/showSpeakers.php">Speakers List</a></li>
            <li><a href="../content/showAttendees.php">Attendees List</a></li>
            <li><a href="../content/showVenues.php">Venues List</a></li>
        </ul>

        <div class="nav navbar-right">
                    <?php  if (isset($_SESSION['user'])) : ?>
                        <strong><?php echo $_SESSION['user']['username']; ?></strong>
                        <i style="color: green;">(<?php echo ucfirst($_SESSION['user']['user_type']);?>)</i>
                        <br>
                        <?php endif ?>
                            <small><a href="../registration/index.php?logout='1'" style="color: red;">Logout</a></small>
        </div>
    </div>
</nav>