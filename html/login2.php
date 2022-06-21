<html>
	<form method='POST'  enctype='multipart/form-data'>
	<?php
	$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
	if(!$db_link)
		die("資料連接失敗");	
	mysqli_query($db_link,'SET CHARACTER SET unicode');	
	//$row=$result->fetch_array(MYSQLI_ASSOC);
	//echo $row['name'];
	if(isset($_POST['send']))
	{	
		if($_POST['account']!=null&&$_POST['password']!=null)
		{
			$sql1="SELECT * FROM `customer` where `Cid`='".$_POST['account']."'and `Password`='".$_POST['password']."'";
			$sql2="SELECT * FROM `employee` where `Eid`='".$_POST['account']."'and `Password`='".$_POST['password']."'";
			$result1=mysqli_query($db_link,$sql1);
			$result2=mysqli_query($db_link,$sql2);			
			echo $sql;			
		}
	else
		{
			echo"<script>alert('請輸入帳號或密碼');location.href='login.php'</script>";
		}	
	}
	if($result)	
		echo "query OK<br>";	
	else
		echo"query 不 OK<br>";	
	if(substr($_POST['account'],0,2)=="el")
	{
		while($row=$result2->fetch_assoc())
		{
			$Cid=$row['Eid'];
			$pwd=$row['Password'];
		}	
	}
	else
	{
		while($row=$result1->fetch_assoc())
		{
			$Cid=$row['Cid'];
			$pwd=$row['Password'];
		}
	}
	session_start();
	if(substr($_POST['account'],0,2)=="el"&&$Cid==$_POST['account'])
	{
		$_SESSION['Password']=$pwd;
		$_SESSION['Cid']=$Cid;
		$_SESSION['account']=$_POST['account'];
		echo"<script>location.href='message.php'</script>";	
	}
	else if($Cid==$_POST['account']&&substr($_POST['account'],0,2)!="el")
	{
		$_SESSION['Password']=$pwd;
		$_SESSION['Cid']=$Cid;
		echo"<script>location.href='123.php'</script>";		
	}
	else
		{
			echo"<script>alert('帳號或密碼錯誤');location.href='login.php'</script>";
		}

	$Cid=$_POST['Cid'];
	$pwd=$_POST['Password'];
	mysqli_close($db_link);
	?>
	</form>
</html>