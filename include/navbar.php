<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">AFPC</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../registration/index.php">Presentations List</a></li>
            <li><a href="../content/showSpeakers.php">Speakers List</a></li>
            <li><a href="#">Venue List</a></li>
        </ul>

        <div class="nav navbar-right">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <?php endif ?>
                    <?php  if (isset($_SESSION['user'])) : ?>
                        <strong><?php echo $_SESSION['user']['username']; ?></strong>
                        <i style="color: green;"><?php echo ucfirst($_SESSION['user']['user_type']); ?></i>
                        <br>
                        <?php endif ?>
                            <small><a href="index.php?logout='1'" style="color: red;">Logout</a></small>
        </div>
    </div>
</nav>