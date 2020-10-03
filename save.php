<?php
session_start();

		include './connection/sql_connect.php';
		

		$conn = OpenConnection();
		
		if (isset($_POST['save']) && !empty($_POST['list_left']) && !empty($_POST['list_right'])) {
			
			$error = 0;
			
			$userID = $_SESSION['login_userID'];
			$list_left = $_POST['list_left'];
			$list_right = $_POST['list_right'];
			
			
			$sql = "SELECT * FROM lists WHERE userID = '$userID'";
			$result = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($result);
			
			
			if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			
			if($count == 0){
				
				$sql = "INSERT INTO lists (userID, left_list, right_list) VALUES ('$userID', '$list_left', '$list_right')";


				if (mysqli_query($conn, $sql)){
				  $error = 0;
				  echo mysqli_error($conn);
				} else {
				  $error = 1;
				}
				
			}else{
				
				$sql_update = "UPDATE lists SET left_list = '$list_left', right_list = '$list_right' WHERE userID = '$userID'";

				if (mysqli_query($conn, $sql_update)){
				  $error = 0;
				  echo mysqli_error($conn);
				} else {
				  $error = 1;
				}
				
			}
			
			
			
			
			if($error == 0){
				$_SESSION['msg'] = "saved";
				header("location: welcome.php");
			}else{
				$_SESSION['msg'] = "error";
				header("location: welcome.php");
			}
			
		}
		
		mysqli_close($conn);
?>
