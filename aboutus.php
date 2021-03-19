<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
<style>
body {
  background-image: url('backnew1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
			<!-- start header -->
				<div id="header">
					<div id="menu">
				
						<?php
							include("includes/menu1.inc.php");
						?>
						<img src="images\f.png" alt="VIT image" height="270" width="100%">
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><b><u>About Us</u><b></h1>
							<div class="entry" style="height:auto">
								
<b> The main aim of the project is to make the book store system accessible to the users of VIT University. Thus making the project more econonomical and reducing the time consumption. Inorder to overcome the problems of the existing system,we are adding more facilities and making the system online. This project is made by Nalin Gupta, 18BIT0199 to deploy it in Heroku.<b>
 <br/>
 <br><br><br><br><br><br><br><br>
  
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
				
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
