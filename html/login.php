<!doctype html>
<html lang="en">
<?php
	session_start();
?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo3.png" type="image/png">
	<title>c嘛購物</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="123.php"><img src="img/logo2.png" height=125 alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="123.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">常見問題</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="A_safe.php">帳號安全</a></li>
									<li class="nav-item"><a class="nav-link" href="return.php">退貨退款</a></li>
									<li class="nav-item"><a class="nav-link" href="order.php">訂單與付款</a></li>
									<li class="nav-item"><a class="nav-link" href="seller.php">賣家相關</a></li>
									<li class="nav-item"><a class="nav-link" href="send.php">寄件物流</a></li>
									<li class="nav-item"><a class="nav-link" href="others.php">其他</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="message.php">Message</a></li>
						</ul>
						<?php
						if ($_SESSION['Cid'] != null)
						{
							echo "<ul class='nav navbar-nav navbar-right'>";
							echo "歡迎".$_SESSION['Cid'];
							echo "</ul>";
							echo "<form method='POST'>";
							echo "<input type='submit' name='signout' value='登出'>";
						}
						else
						{
							echo "<ul class='nav navbar-nav navbar-right'>";
							echo "<li class='nav-item'><a href='login.php' class='primary_btn text-uppercase'>登入</a></li>";
							echo "</ul>";
						}
						if(isset($_POST['signout']))
						{
							unset($_SESSION['Cid']);
							echo"<script>location.href='#'</script>";
						}
						?>
						
						
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	 <?php
	echo '<body style="background-color:#ab58ff">';	
 ?>	
 <form method='POST'  enctype='multipart/form-data'action='login2.php'>
	<table border="0" width="100%">
		<tr>
			<td style="height:950px;width:50%;" align='center' valign="middle"><img src="img/logo1.png" width="100%"></td>
			<td style="height:950px;width:50%;" align='center' valign="middle">
			<form method='POST' action='123.php'>
			<table border='0' align='center'cellpadding='200%' bgcolor="white" width="50%">
			<td>
			<center><h4><font color="black" size='7'>登入</font></h4></center><br>
			<input type='text' name='account' placeholder="使用者名稱/E-Mail" style="font-size:30px"><br><br>
			<input type='password' name='password' placeholder="密碼"  style="font-size:30px"><br><br>
			<center><input type='submit' name='send' value='登入' style="width:350px;height:40px;background-color:#CA8EFF;color:#FFFFFF;font-size:26px"></center><br>
			<a href="reset_password.php">忘記密碼</a>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href="register.php">註冊帳號</a>
			</td>
			</table >
			</form></td>
		</tr>
	</table>
	
	
	<!--================End Home Banner Area =================-->
</FORM>
	
</body>

</html>