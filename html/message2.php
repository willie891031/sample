<?php
	
	session_start();
	echo "<form	method ='POST'>";
	
	
	$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
	if(!$db_link)
		die("資料連接失敗");	
	mysqli_query($db_link,'SET CHARACTER SET unicode');	
	if(isset($_POST['csend']))
	{
		mysqli_query($db_link,'SET CHARACTER SET unicode');					
		$sql="INSERT INTO `message`(`Cid`,`C_m`,`Time`,`Date`) VALUES ('".$_SESSION['Cid']."','".$_POST['c_message']."','".date('H:i:s',mktime (date(H)+8))."','".date("Y-m-d")."')";
		$result=mysqli_query($db_link,$sql);
		echo $sql;							
		echo"<script>location.href='message.php'</script>";
	}	
	if(isset($_POST['esend']))
	{
		mysqli_query($db_link,'SET CHARACTER SET unicode');	
		$sql2="INSERT INTO `message`(`Cid`,`Eid`,`C_m`,`Time`,`Date`) VALUES ('".$_SESSION['cc']."','".$_SESSION['Cid']."','".$_POST['c_message']."','".date('H:i:s',mktime (date(H)+8))."','".date("Y-m-d")."')";
		$result2=mysqli_query($db_link,$sql2);	
		echo $sql2;
		echo"<script>location.href='message.php'</script>";
	}
			
	
	if (substr($_SESSION['Cid'],0,2)!="el")
	{
		$sql3="SELECT * FROM `message` WHERE `Cid`='".$_SESSION['Cid']."'";
		$result3=mysqli_query($db_link,$sql3);
		while($row=$result3->fetch_assoc())
		{			
			if($row['Eid']!="")
				echo "<p align='left'>".$row["C_m"]."</p>";
			else
				echo "<p align='right'>".$row["C_m"]."</p>";
		}	
	}
	if (substr($_SESSION['Cid'],0,2)=="el")
	{							
		$sql4="SELECT * FROM `message` WHERE `Cid`='".$_SESSION['cc']."'";
		$result4=mysqli_query($db_link,$sql4);
		while($row=$result4->fetch_assoc())
		{			
			if($row['Eid']!="")
				echo "<p align='right'>".$row["C_m"]."</p>";
			else
				echo "<p align='left'>".$row["C_m"]."</p>";
		}	
	}
	echo "</form>";
?>