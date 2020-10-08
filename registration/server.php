<?php
session_start();

// initializing variables
$firstName = "";
$lastName = "";
$email = "";
$phone = "";
$company = "";
$username = "";
$password = "";
$password_check = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'conference');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $company = mysqli_real_escape_string($db, $_POST['company']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_check = mysqli_real_escape_string($db, $_POST['password_check']);

  // form validation: ensure that the form is correctly filled
  // by adding (array_push()) corresponding error into $errors array
  if (empty($firstName)) { 
      array_push($errors, "First Name is required"); 
  }
  if (empty($lastname)) { 
      array_push($errors, "Last Name is required"); 
  }
  if (empty($email)) { 
      array_push($errors, "Username is required"); 
  }
  if (empty($phone)) { 
      array_push($errors, "Username is required"); 
  }
  if (empty($company)) { 
      array_push($errors, "Username is required"); 
  }
  if (empty($username)) { 
      array_push($errors, "Username is required"); 
  }
  if (empty($password)) { 
      array_push($errors, "Password is required"); 
  }
  if ($password != $password_check) {
	array_push($errors, "The passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM attendees WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO attendees (firstName, lastName, email, phone, company, username, password) VALUES('$firstName','$lastName','$email','$phone','$company','$username','$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM attendees WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}
      else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>