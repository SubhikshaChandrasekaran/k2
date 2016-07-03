
  <html>
<body>
<?php
    $ans=$_POST['ans3'];  
    session_start();
$mysqlport = getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
	$con=mysql_connect($dbhost,"root","") or die('Error connecting to mysql');
	mysql_select_db("k",$con); 
	if($ans=="rome")
	{
  
echo "Welcome ". $_SESSION["var"]."!!!'";
  echo "All the answers are correct!! Thanks for Participating!!";
		session_destroy();
		echo '<center><form name="form" method="POST" action="index.php">
		<input type="submit" value="HOME"/></form></center> 
		';
    } 
	
	else
		{echo "Wrong answer!! Thanks for Participating!!";
		session_destroy();
		echo '<center><form name="form" method="POST" action="index.php">
		<input type="submit" value="HOME"/></form></center> 
		';
		}
		
	



?>
</body>
</html>