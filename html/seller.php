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
                            <a href="blog.html">常見問題</a>
                            <a href="single-blog.html">賣家相關</a>
                        </div>
                        <h2>Blog Details Page</h2>
                    </div>
                </div>
            </div>
        </section><center>
		<?php 
			session_start();
			echo "<form method='POST' action='seller2.php'>";
			$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
			if(!$db_link)
				die("資料連接失敗"); 
			mysqli_query($db_link,'SET CHARACTER SET unicode'); 
			$sql="SELECT * FROM sell_problem";
			$result=mysqli_query($db_link,$sql);      
			while($row=$result->fetch_assoc())
			{	
				$y=$row['ylike'];
				$n=$row['nlike'];
				$total=(($y/($y+$n))*100)."%";
				$num=$row["num"];
				echo"<table width='60%'><tr><td><font size='5' font color='black'>";
				echo $row["title"]."</td></tr><tr><td>&nbsp</td></tr>";
				echo"<tr><td><font size='3' font color='black'>";
				echo $row["text"]."</td></tr>"; 
				echo "<tr><td>有回答到你的問題嗎?<br>";
				if (substr($_SESSION['Cid'],0,2)=="el")
				{
					echo  '<br>'.$total;					
				}
				else 
				{
					echo "<input type='submit' name='".$num."Y' value='是'>";
					echo "<input type='submit' name='".$num."N' value='否'>";
					echo "</td></tr>";
				}
					echo "</td></tr>";
					echo "<br><br><br><br>";
			}			
			echo"</form>";
		?>
        <!--================ End Single Blog Banner Area =================-->
    </body>
</html>