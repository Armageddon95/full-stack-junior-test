<?php
session_start();

		include './connection/sql_connect.php';
		

		$conn = OpenConnection();
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
				
				$username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, $_POST['password']);
				
				$encoded_passw = password_hash($password, PASSWORD_DEFAULT);
				

				$sql = "SELECT * FROM users WHERE username = '$username'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$got_passw = $row['password'];
				  
				$count = mysqli_num_rows($result);


				
				if($count == 1) {
					
					if (password_verify($_POST['password'], $got_passw)) {


						$_SESSION['login_userID'] = $row['ID'];
						 
						header("location: welcome.php");
					}else{
						$_SESSION['login_error_msg'] = "login_error";
						header("Location: index.php");
					}
				}else {
					$_SESSION['login_error_msg'] = "login_error";
					header("Location: index.php");
				}
				

            }
?>
