<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="icon" href="img/u.png">
	<script src="AntiOverflowFontResizer.min.js"></script>
	<title>PraYU</title>
	<link rel="icon" type = "pic"href="../pic/icon.ico">
	<style>
		.lgtbtn {
			background-color: rgba(255,255,255,0); 
			border: none;
			color: rgba(255,255,255,0);
			font-weight: 700;
			transition-duration: 0.3s;
			cursor: pointer;
			line-height: normal;
			text-decoration: none;
		}
		.lgtbtn:hover {
			background-color: #C61038;
			color: #ffffff;
			text-decoration: none;
		}		
		body {
			font-family: "Montserrat";
		}
		.btninnav {
			background-color: #ffffff; 
			border: none;
			transition-duration: 0.3s;
			cursor: pointer;
		}
		.btninnav:hover {
			background-color: #D4DEFA;
		}
	</style>
	<?php  
	if (!isset($_SESSION["user"])) { 
		header('location: ./');
	}
	else if ( $_SESSION["user"] == 'Student' ){
		?>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #233975; height: 80px;">
			<a class="navbar-brand" style="background-color: #ffffff; border-top-right-radius: 50px; border-bottom-right-radius: 50px; float: left; position: absolute; left: 0; width: 140px; height: 65px">
				<img src="img/prayuthlg.png" style="width: 120px; float: right; margin-right: 10%; margin-top: 6%;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 130px;">
				<ul class="navbar-nav">
					<li class="nav-item dot btninnav" id="stdashboard" style="height: 65px; width: 65px; border-radius: 50%">
						<a class="nav-link" href="stdashboard.php"><img src="img/ic_home.png" style="width: 100%"></a>
					</li>
					<li class="nav-item dot btninnav" id="enrolcourse" style="height: 65px; width: 65px; border-radius: 50%; margin-left: 6px;">
						<a class="nav-link" href="enrollableCourse.php"><img src="img/ic_invoice.png" style="width: 100%"></a>
					</li>
				</ul>
				<div class="navbar-nav ml-auto mt-2 mt-lg-0">
					<form class="form-inline" method="post" style="background-color: #ffffff; border-radius: 20px; margin-right: 12px;">
						<i><img src="img/magnifier.png" style="width: 60%; margin-left: 7px;"></i>
						<input type="text" class="form-control" name="search" placeholder="Search (Dummy)" style="border-radius: 20px; border: none; width: 500px">
					</form>
				</div>
				<ul class="navbar-nav">
					<li class="nav-item dot btninnav" id="chatnav" style="height: 65px; width: 65px; border-radius: 50%; margin-right: 6px">
						<a class="nav-link" href="chat.php"><img src="img/ic_message.png" style="width: 100%"></a>
					</li>
				</ul>
				<form class="nav-item dot lgtbtn" style="height: 65px; width: 65px; border-radius: 50%; margin-right: 20px">
					<a href="./logout.php" style="position: relative; text-decoration: none;">
						<div class="dot lgtbtn" style="height: 65px; width: 65px; border-radius: 50%; position: relative; z-index: 3; text-align: center; text-decoration: none; padding-top: 12px;">Log<br>Out</div>
						<img src="<?php echo $_SESSION["profilePhoto"]?>" style="border-radius: 50%; width: 100%; position: relative; top: -65px;">
					</a>
				</form>
			</div>
		</nav>
		<script type="text/javascript">
			if (window.location.href.indexOf("stdashboard") > -1) {
				document.getElementById("stdashboard").style.borderRadius = "0";
				document.getElementById("stdashboard").style.borderTopLeftRadius = "50%";
				document.getElementById("stdashboard").style.borderTopRightRadius = "50%";
				document.getElementById("stdashboard").style.position = "relative";
				document.getElementById("stdashboard").innerHTML += "<div class='btninnav' style='background-color: #ffffff; height: 8px; width: 65px; bottom: 0;'></div>";
			} else if (window.location.href.indexOf("enrollableCourse") > -1) {
				document.getElementById("enrolcourse").style.borderRadius = "0";
				document.getElementById("enrolcourse").style.borderTopLeftRadius = "50%";
				document.getElementById("enrolcourse").style.borderTopRightRadius = "50%";
				document.getElementById("enrolcourse").style.position = "relative";
				document.getElementById("enrolcourse").innerHTML += "<div class='btninnav' style='background-color: #ffffff; height: 8px; width: 65px; bottom: 0;'></div>";
			}
			else if (window.location.href.indexOf("chat") > -1) {
				document.getElementById("chatnav").style.borderRadius = "0";
				document.getElementById("chatnav").style.borderTopLeftRadius = "50%";
				document.getElementById("chatnav").style.borderTopRightRadius = "50%";
				document.getElementById("chatnav").style.position = "relative";
				document.getElementById("chatnav").innerHTML += "<div class='btninnav' style='background-color: #ffffff; height: 8px; width: 65px; bottom: 0;'></div>";
			}
		</script>
	<?php }
	else if ( $_SESSION["user"] == 'Lecturer' ){
		?>
		<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #233975; height: 80px;">
			<a class="navbar-brand" style="background-color: #ffffff; border-top-right-radius: 50px; border-bottom-right-radius: 50px; float: left; position: absolute; left: 0; width: 140px; height: 65px">
				<img src="img/prayuthlg.png" style="width: 120px; float: right; margin-right: 10%; margin-top: 6%;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 130px;">
				<ul class="navbar-nav">
					<li class="nav-item dot btninnav" id="ltdashboard" style="height: 65px; width: 65px; border-radius: 50%">
						<a class="nav-link" href="ltdashboard.php"><img src="img/ic_home.png" style="width: 100%"></a>
					</li>
				</ul>
				<div class="navbar-nav ml-auto mt-2 mt-lg-0">
					<form class="form-inline" method="post" style="background-color: #ffffff; border-radius: 20px; margin-right: 12px;">
						<i><img src="img/magnifier.png" style="width: 60%; margin-left: 7px;"></i>
						<input type="text" class="form-control" name="search" placeholder="Search (Dummy)" style="border-radius: 20px; border: none; width: 500px">
					</form>
				</div>
				<ul class="navbar-nav">
					<li class="nav-item dot btninnav" style="height: 65px; width: 65px; border-radius: 50%; margin-right: 6px">
						<a class="nav-link" href="chat.php"><img src="img/ic_message.png" style="width: 100%"></a>
					</li>
				</ul>
				<form class="nav-item dot lgtbtn" style="height: 65px; width: 65px; border-radius: 50%; margin-right: 20px">
					<a href="./logout.php" style="position: relative; text-decoration: none;">
						<div class="dot lgtbtn" style="height: 65px; width: 65px; border-radius: 50%; position: relative; z-index: 3; text-align: center; text-decoration: none; padding-top: 12px;">Log<br>Out</div>
						<img src="<?php echo $_SESSION["profilePhoto"]?>" style="border-radius: 50%; width: 100%; position: relative; top: -65px;">
					</a>
				</form>
			</div>
		</nav>
		<script type="text/javascript">
			if (window.location.href.indexOf("ltdashboard") > -1) {
				document.getElementById("ltdashboard").style.borderRadius = "0";
				document.getElementById("ltdashboard").style.borderTopLeftRadius = "50%";
				document.getElementById("ltdashboard").style.borderTopRightRadius = "50%";
				document.getElementById("ltdashboard").style.position = "relative";
				document.getElementById("ltdashboard").innerHTML += "<div class='btninnav' style='background-color: #ffffff; height: 8px; width: 65px; bottom: 0;'></div>";
			}
		</script>
	<?php }
	?>
