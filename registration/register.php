<?php 
    include('functions.php') 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>
    <div class="header">
        <h2>Registration for Australian Financial Pathways Conference</h2>
    </div>
    <form method="post" action="register.php">
           <?php echo display_error(); ?>
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="firstName" value="<?php echo $firstName; ?>">
            </div>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="lastName" value="<?php echo $lastName; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
              <div class="input-group">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>">
            </div>
              <div class="input-group">
                <label>Company</label>
                <input type="text" name="company" value="<?php echo $company; ?>">
            </div>
            <div class="input-group">
                <label>User Name</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_check">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="register_btn">Register</button>
            </div>
            <p>
                Already an antendee? <a href="login.php">Sign in</a>
            </p>
    </form>
</body>
</html>