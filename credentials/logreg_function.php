<?php 
		include 'connection.php';
		$errors = array();
		session_start();

		  if (isset($_POST['btn_submit'])) {
		    
		    $fullname = $_POST['firstname'] . "" . $_POST['lastname'];
		    $contact = $_POST['contact'];
		    $email = $_POST['email'];
		    $vehicle_type = $_POST['vehicle_type'];
		    $plate_no = $_POST['plate_no'];
		    $password = $_POST['password'];
		    $confirmpassword = $_POST['confirmpassword'];
		    $group_id = $_POST['group_id'];

		    $check_duplicate_department = "SELECT contact FROM credentials WHERE contact = '$contact' ";
		    $result = mysqli_query($conn, $check_duplicate_department);

		    $count = mysqli_num_rows($result);

		    if ($count > 0) {
		    	echo "<h5 class = 'alert alert-danger'><center>The contact number ".$contact." is already registered.</center></h5>";
		    	return false;
		    }

			if (count($errors) == 0) {
			    $password = md5($password);
			    $sql = "INSERT INTO credentials (fullname, contact, email, vehicle_type, plate_no, password, confirmpassword, group_id)
			    VALUES ('$fullname', '$contact', '$email', '$vehicle_type', '$plate_no', '$password', '$confirmpassword', '$group_id')";
			    $query = mysqli_query($conn, $sql);

				$_SESSION['success'] = "Congratulations you have successfully registered new account!";
				$_SESSION['fullname'] = $fullname;
				header('location: ./success_registration.php'); //redirect to homepage
				
			}
			mysqli_close($conn);
		  }

		//login from login page
		if (isset($_POST['btn_login'])){
			login();
		}

		function login() {

		include 'connection.php';
		$_SESSION['error'] = "Incorrect username or password!";
		$username=$_POST['username'];
    	$password=$_POST['password'];

	        // attempt login if no errors on form
				$password = md5($password);

				$query = "SELECT * FROM credentials WHERE username='$username' AND password='$password' LIMIT 1";
				$results = mysqli_query($conn, $query);

				if (mysqli_num_rows($results) == 1) { // user found
					// check if user is admin or user
					$logged_in_user = mysqli_fetch_assoc($results);
					if ($logged_in_user['group_id'] == '0') {
						$_SESSION['user'] = $logged_in_user;
						header('location: .././');		  
					}elseif ($logged_in_user['group_id'] == '1') {
						$_SESSION['user'] = $logged_in_user;
						header('location: ../location.php');	
					}
				}			
		}
?>