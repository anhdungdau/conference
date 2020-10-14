<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'conference');

// variable declaration
    $firstName = "";
    $lastName = "";
    $email = "";
    $phone = "";
    $company = "";
    $username = "";
    $errors = array(); 

// call the register() function if register_btn is clicked
    if (isset($_POST['register_btn'])) {
        register();
    }

// call the login() function if register_btn is clicked
    if (isset($_POST['login_btn'])) {
        login();
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
}

// REGISTER USER
    function register(){
	
// Call these variables with the global keyword to make them available in function
    global $db, $firstName, $lastName, $email, $phone, $company, $username, $errors;

// receive all input values from the form. Call the e() function defined below to escape form values
    $firstName      =  e($_POST['firstName']);
    $lastName       =  e($_POST['lastName']);
    $email          =  e($_POST['email']);
    $phone          =  e($_POST['phone']);
    $company        =  e($_POST['company']);
    $username       =  e($_POST['username']); 
    $password       =  e($_POST['password']);
    $password_check =  e($_POST['password_check']);

// form validation: ensure that the form is correctly filled
    if (empty($firstName)) { 
      array_push($errors, "First Name is required"); 
    }
    if (empty($lastName)) { 
      array_push($errors, "Last Name is required"); 
    }
    if (empty($email)) { 
      array_push($errors, "Email is required"); 
    }
    if (empty($phone)) { 
      array_push($errors, "Phone is required"); 
    }
    if (empty($company)) { 
      array_push($errors, "Company is required"); 
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

// register user if there are no errors in the form
if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database
    $query = "INSERT INTO attendees (firstName, lastName, email, phone, company, username, password) VALUES('$firstName','$lastName','$email','$phone','$company','$username','$password')";
    mysqli_query($db, $query);
    $_SESSION['success']  = "New user successfully created!!";

    // get id of the created user
    $logged_in_user_id = mysqli_insert_id($db);
    $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
    $_SESSION['success']  = "You are now logged in";
    header('location: index.php');				
    }
}

// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grab form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM attendees WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "Admin logged in";
					header('location: admin/home.php');		  
				}
                else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "User logged in";
					header('location: index.php');
				}
			}
            else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

// return user array from their id
function getUserById($userID){
	global $db;
	$query = "SELECT * FROM attendees WHERE userID=" . $userID;
	$result = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;
	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn() {
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

function isAdmin() {
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}