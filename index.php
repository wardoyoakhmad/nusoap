<?php
	//memulai session
	session_start();
	//cek adanya session
	if(ISSET($_SESSION['username'])){
		
	}
	else{
		header("locaton:login.php");
	}
?>
<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="asset/js/bootstarp-dropdown.js"></script>
<body>
	<div class="navbar navbar fixed-top">
		<div class="row">
			<div class="span2">
				<a class="brand" href="#">&nbsp E-Learning</a>
			</div>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="divider"></li>
					<li class="dropdown offset7">
						<a href="#" class="dropdown-toogle" data-toogle="dropdown">
						<?php
							echo "Anda Login sebagai :";
							echo $_SESSION["username"];
						?>
						<b class="caret"></b></a>
					</li>
					<li>
						<a href="logout.php"><i class="icon-off">
						&nbsp; &nbsp; &nbsp; Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/>
	<div class="container">
		<center><h1>Selamat Datang di ELISA UGM</h1></center>
	</div>
</body>