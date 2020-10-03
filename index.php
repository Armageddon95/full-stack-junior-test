<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html class="" lang="en"><head prefix="og: http://ogp.me/ns#">

	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="object" property="og:type">

	<title>Junior full stack test - Laczi Csani Zoltán Botond</title>

	<link rel="stylesheet" media="all" href="css/main.css">
	<body>
		<header class="navbar navbar-gitlab qa-navbar navbar-expand-sm js-navbar">
			<div class="container-fluid">
				<div class="header-content">
					<img class="logo-img" src="images/logo.jpg" alt="">
				 
					 <div class="header-content-middle">
							<div class = "right-top-div">
								<div ></div>
								<div ></div>
								<div ><a href="#">English 
										<svg width="1em" height="1em" style="vertical-align: middle;" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
										</svg>
									</a>
								<a href="#">
									<span class="glyphicon glyphicon-chevron-down"></span>
								</a>
								</div>
								 <div><a href="#">Contact</a></div>
								 <div a href="#">Sitemap</a></div>
							</div>

							<div class = "right-bottom-div">
								<div class="c1">
									<a href="#">Logout 
										<svg width="1em" height="1em" style="vertical-align: middle;" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
										</svg>
									</a>
								</div>
								<div class="c2" >
									<a href="#">My collection 
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
						<a href="index.php" ><img src="images/home_selected.jpg" alt="" width="18" height="18" style="padding: 4px"></a>
					</div>
					<div class="sidebar-div">
						<a href="#" >MPAF</a>
					</div>
					<div class="sidebar-div">
						<a href="#" >VENOUS</a>
					</div>
					<div class="sidebar-div">
						<a href="#">ACS</a>
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

			<form class = "form-signin" action = "login.php" method = "post"> 
				<div class="container">   
					<label class="container-text sign_up" >Please Sign In </label>   <br>
					<label class="container-text" >User name: </label>   
					<input type="text" name="username" required>  
					<label class="container-text" >Password: </label>   
					<input type="password" name="password" required>  
						
					<div class="vertical-center">
						<button type="submit" name = "login">ENTER</button>
					</div>
						

				</div>   
			</form>   
			<?php

			if( ! empty($_SESSION['login_error_msg']))
			{
				?>
				<div class="error-container">  
				Your user name or password was incorrect.<br>Please try it again.
				</div>
			<?php } 
			unset($_SESSION['login_error_msg']);
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
	</body>
</html>