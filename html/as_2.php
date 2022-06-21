<html>
	<?php
	echo
	$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
	if(!$db_link)
		die("資料連接失敗");	
	mysqli_query($db_link,'SET CHARACTER SET unicode');	 
	$sql="SELECT * FROM as_problem ";
	$result=mysqli_query($db_link,$sql); 
	$row=$result->fetch_assoc();
	echo "<form method='POST'>";
	$yes=$POST['Y'];
	ECHO $yes;
	//$row=$result->fetch_array(MYSQLI_ASSOC);
	//echo $row['name'];
	/*if(isset($_POST[$row[num].'Y']))
	{	
		$sql="INSERT INTO `as_problem`(`ylike`) VALUES (".$row['ylike']+1 .") WHERE `num`=".substr($_POST[$row[num].'Y'],0,-1);
	}
	mysqli_close($db_link);*/
	?>
</html>