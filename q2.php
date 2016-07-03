
  
  <html>
<head>
<script type="text/javascript">
 function validate()
{
 var ans=document.forms["form"]["ans2"].value;
 if(ans=="")
{
alert("Please enter value for all the fields");
return false;
}
return true;
}
</script>
</head>
<body>
<?php
    $ans=$_POST['ans'];  
    session_start();
$mysqlport = getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
	$con=mysql_connect($dbhost,"root","") or die('Error connecting to mysql');
	mysql_select_db("k",$con); 
	if($ans=="chennai")
	{
     
echo "Welcome ". $_SESSION["var"]."!!!'";
echo '<center><form name="form" method="POST"  onsubmit="return validate(this);" action="3.php">
<h2>What is the capital of India?</h1><br><br>
<input type="radio" name="ans2" value="delhi"/>Delhi<br>
<input type="radio" name="ans2" value="chennai"/>Chennai<br>
<input type="radio" name="ans2" value="kolkatta"/>Kolkatta<br>
<input type="submit" value="Submit"/>

</form></center>';  
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