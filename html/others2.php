<?php 
	echo "<form method='GET' >";
	$db_link=@mysqli_connect("127.0.0.1","cs","cs","cs_data");
	if(!$db_link)
		die("資料連接失敗"); 
	mysqli_query($db_link,'SET CHARACTER SET unicode'); 
	$sql="SELECT * FROM others_problem ";
	$result=mysqli_query($db_link,$sql); 
	while($row=$result->fetch_assoc())
	{
		$num=$row["num"];
		if(isset($_POST[$num.Y])){
			$ylike=$row['ylike']+1;
			$sql2="UPDATE `others_problem` SET `ylike`=".$ylike." where `num`='".$num."'";
			$result=mysqli_query($db_link,$sql2); 
			echo"<script>alert('謝謝您寶貴的意見');location.href='others.php'</script>";
		}
		if(isset($_POST[$num.N])){
			$nlike=$row['nlike']+1;
			$sql2="UPDATE `others_problem` SET `nlike`=".$nlike." where `num`='".$num."'";
			$result=mysqli_query($db_link,$sql2); 
			echo"<script>location.href='others.php'</script>";
		}				
	}	
	echo "</form>";
?>