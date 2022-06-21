<html>
	<form method='POST' enctype='multipart/form-data' action='123.php'> 
	
<?php

	$db_link= @mysqli_connect('127.0.0.1','cs','cs','cs_data');
	if(!$db_link)
		die("連接不 OK");	
	mysqli_query($db_link,'SET CHARACTER SET unicode');	
	$sql2="SELECT * FROM `customer` where Cid='".$_POST['c_id']." '";
	$result=mysqli_query($db_link,$sql2);
	$row=$result->fetch_array(MYSQLI_ASSOC);
	$user=$row['Cid'];
	if($_POST['password']==""||$_POST['re_password']==""||$_POST['c_id']==""||$_POST['name']=="")
	{
		echo"<script>alert('尚有欄位未輸入');location.href='register.php'</script>";
	}
	else if(($_POST['password'])!=($_POST['re_password']))
		echo"<script>alert('確認密碼錯誤');location.href='register.php'</script>";
	else if($_POST['c_id']==$row['Cid'])
	{
		echo"<script>alert('帳號已被註冊');location.href='register.php'</script>";
	}
	else
	{
		$db_link= @mysqli_connect('127.0.0.1','cs','cs','cs_data');
		if(!$db_link)
			die("連接不 OK");	
		mysqli_query($db_link,'SET CHARACTER SET unicode');	
		if(isset($_POST['send']))
		{	
			$sql="INSERT INTO `customer`(`Name`, `Cid`, `Password`, `Phone`, `E-mail`, `Birthday`, `Address`) VALUES ('".$_POST['name']."','".$_POST['c_id']."','".$_POST['password']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['birthday']."','".$_POST['address']."')";
			$result=mysqli_query($db_link,$sql);
			echo $sql;		
		}
		if($result)	
		{
			echo "query OK<br>";
			echo "123".$sql;
		}
		else
			echo"query 不 OK<br>";
		mysqli_close($db_link);
		echo"<script>alert('註冊成功');location.href='123.php'</script>";
	}	
?>
</form>
</html>