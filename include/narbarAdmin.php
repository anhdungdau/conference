<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="nav navbar-left">
            <h1>Admin - Home Page</h1>
        </div>
        <div class="nav navbar-right">
            <?php  if (isset($_SESSION['user'])) : ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>
                <i style="color: green;"><?php echo ucfirst($_SESSION['user']['user_type']); ?></i>
                <br>
                <?php endif ?>
                    <small><a href="home.php?logout='1'" style="color: red;">Logout</a>&nbsp;</small>
        </div>
    </div>
</nav>