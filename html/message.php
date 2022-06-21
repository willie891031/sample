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
                                <li class="nav-item"><a class="nav-link" href="123.php">Home</a></li>
                                <li class="nav-item submenu dropdown active">
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
        
        <!--================ Start Single Blog Banner Area =================-->
	    <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-left">
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="blog.html">Blog</a>
                            <a href="single-blog.html">Blog details</a>
                        </div>
                        <h2>Blog Details Page</h2>
                    </div>
                </div>
            </div>
        </section>
		<center>
		
		<?php
		$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
		if (substr($_SESSION['Cid'],0,2)=="el")
		{
			$sql="SELECT `Cid` FROM `customer`";
			$result=mysqli_query($db_link,$sql);
			while($row=$result->fetch_assoc())
			{
				$cc=$row["Cid"];
				echo "<form method='POST' >";
				echo "<input type='hidden' name='cart' value='".$cc."'>"; 
				echo "<input type='submit' name='".$cc."' value='".$cc."'></form>";
			}
		}
		//無意義 只是為了可以運作
		if (substr($_SESSION['Cid'],0,2)!="el")
		{
			$sql="SELECT `Eid` FROM `employee`";
			$result=mysqli_query($db_link,$sql);
			while($row=$result->fetch_assoc())
			{
				$cc=$row["Cid"];
				echo "<form method='POST' >";
				echo "<input type='hidden' name='cart' value='".$cc."'>"; 
				echo "<input type='hidden' name='".$cc."' value='".$cc."'></form>";
			}
		}
		$_SESSION['cc']=$_POST['cart'];
		echo $_SESSION['cc'];
		echo "<br>";
		echo "<form method='POST' action='message2.php'>";
		echo "<iframe src='message2.php' width='1100' frameborder='1' scrolling='auto'></iframe></br></br></br>";
		if (substr($_SESSION['Cid'],0,2)=="el")
		{
			echo"<input type='text' placeholder='請輸入訊息' name='c_message' style='font-size:20px;height:50px;width:1000px;'>";
			echo"<input type='submit'  style='height:30px;' name='esend' value='送出'>";
		}
		if (substr($_SESSION['Cid'],0,2)!="el" && substr($_SESSION['Cid'],0,2)!="")
		{
			echo"<input type='text' placeholder='請輸入訊息' name='c_message' style='font-size:20px;height:50px;width:1000px;'>";
			echo"<input type='submit'  style='height:30px;' name='csend' value='送出'>";
		}
		
		echo "</form>";
		?>
		
	</center>
        <!--================ End Single Blog Banner Area =================-->
    </body>
</html>
