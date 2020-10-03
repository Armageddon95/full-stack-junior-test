<?php
ob_start();
	   session_start();
	   
	   if(!isset($_SESSION['login_userID'])){
			header('Location: index.php');
		}
	   
		include './connection/sql_connect.php';
			
		$conn = OpenConnection();
	?>
<!DOCTYPE html>
<html class="" lang="en"><head prefix="og: http://ogp.me/ns#">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="object" property="og:type">

	<title>Junior full stack test - Laczi Csani Zoltán Botond</title>

	<link rel="stylesheet" media="all" href="css/main.css">
	<link rel="stylesheet" media="all" href="css/style.css">
	<script src="js/jquery-1.10.2.js"></script> 
	<script src="js/jquery-ui.js"></script> 

	<body>
		<header>
			<div class="container-fluid">
				<div class="header-content">
				 <img class="logo-img" src="images/logo.jpg" alt="" >
				 
					 <div class="header-content-middle">
							<div class = "right-top-div">
								<div></div>
								<div></div>
								<div>
									<a href="#" >English 
										<svg width="1em" height="1em" style="vertical-align: middle;" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
										</svg>
									</a>
								<a href="#">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</a>
								</div>
								 <div ><a href="#" >Contact</a></div>
								 <div ><a href="#" >Sitemap</a></div>
							</div>

							<div class = "right-bottom-div">
								<div ><a href="logout.php" > Logout 
										<svg width="1em" height="1em" style="vertical-align: middle;" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
										</svg>
									</a>
								</div>
								<div>
									<a href="#" >My collection 
										<svg width="1em" height="1em" viewBox="0 0 16 16" style="vertical-align: middle;" class="bi bi-folder-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
										</svg>
									</a>
								</div>
							</div>
					 </div>
				 
					 <div class="header-content-right">
						<img src="images/logo_2.jpg" alt="">
					 </div>
				</div>

				<div class="sidebar">

					<div class="sidebar-div">
						<img href="#" src="images/home.jpg" width="18" height="18" style="padding: 4px">
					</div>
					<div class="sidebar-div">
						<a href="#" class="selected" >MPAF</a>
					</div>
					<div class="sidebar-div">
						<a href="#" >VENOUS</a>
					</div>
					<div class="sidebar-div">
						<a href="#" >ACS</a>
					</div>
					<div class="sidebar-div">
						<a href="#" >KIVAMOXOBAN STUDIES</a>
					</div>
					<div class="sidebar-div-last" >
						<a href="#" >BACKGROUND INFORMATION</a>
					</div>
				</div>

			</div>
		</header>

		<div class="body-container">

				<div class="welcome-container">   
					<?php
							$userID = $_SESSION['login_userID'];
							$sql = "SELECT * FROM lists WHERE userID = '$userID'";
							$result = mysqli_query($conn, $sql);
							$count = mysqli_num_rows($result);
							
							$final_left_list = "DOG, CAT, FROG, COW, SHEEP, LION";
							$final_right_list = "POUND, FISH, FOOT, MILK, SUPER, HEART";
							
							if($count == 0)
							{

					?>

				
				
					<ul id = "ListId-left" class="left-column">
						<li id="left_DOG" class="draggable-left" draggable="true">DOG</li>
						<li id="left_CAT" class="draggable-left" draggable="true">CAT</li>
						<li id="left_FROG" class="draggable-left" draggable="true">FROG</li>
						<li id="left_COW" class="draggable-left" draggable="true">COW</li>
						<li id="left_SHEEP" class="draggable-left" draggable="true">SHEEP</li>
						<li id="left_LION" class="draggable-left" draggable="true">LION</li>
					</ul>
					<ul id = "ListId-right" class="right-column">
						<li id="right_POUND" class="draggable-right" draggable="true">POUND</li>
						<li id="right_FISH" class="draggable-right" draggable="true">FISH</li>
						<li id="right_FOOT" class="draggable-right" draggable="true">FOOT</li>
						<li id="right_MILK" class="draggable-right" draggable="true">MILK</li>
						<li id="right_SUPER" class="draggable-right" draggable="true">SUPER</li>
						<li id="right_HEART" class="draggable-right" draggable="true">HEART</li>
					</ul>	
				</div>	
					
					<?php }else{
							
							$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
							$left_list_array = preg_split("/\,/", $row['left_list']);
							$right_list_array = preg_split("/\,/", $row['right_list']);
							$final_left_list = $row['left_list'];
							$final_right_list = $row['right_list'];
					?>
					
					<ul id = "ListId-left" class="left-column">
					
					<?php
							foreach($left_list_array as $key){
								echo '<li id="left_'.$key.'" class="draggable-left" draggable="true">'.$key.'</li>';
							}
					?>
					</ul>
					<ul id = "ListId-right" class="right-column">
					<?php
							foreach($right_list_array as $key){
								echo '<li id="right_'.$key.'" class="draggable-right" draggable="true">'.$key.'</li>';
							} 
					?>
					</ul>
				</div>
					<?php 
						} 
						
						mysqli_close($conn);
					?>
				
				
					<form  method="post" name="myform" action="save.php">
						<input id="outputvalues-left" type="hidden" name="list_left" value="<?php echo $final_left_list; ?>" >
						<input id="outputvalues-right" type="hidden" name="list_right" value="<?php echo $final_right_list; ?>" >
								
						<button class="save-button" type="submit" name="save" >SAVE</button>
						
					</form>
					
				<?php if($_SESSION['msg'] == "saved") { ?>
					<div class="message-container"> Your list has been sucessful saved.</div>
				<?php }
					unset($_SESSION['msg']);
				?>
		</div>
		<div class="footer">
			<div class="footer-left">
				<a href="#" >Condition of use</a> | <a href="#" >Privacy statement</a> | <a href="#" >Imprint</a>
			</div>

			<div class="footer-right">
				This site is intended to provide information to an international audience outside the USA and UK.
			</div>

		</div>
		<script src="./js/function.js"></script> 
	</body>
</html>