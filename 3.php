
  <html>
<head>
<script type="text/javascript">
 function validate()
{
 var ans=document.forms["form"]["ans3"].value;
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
    $ans2=$_POST['ans2'];  
    session_start();
$mysqlport = getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
	$con=mysql_connect($dbhost,"root","") or die('Error connecting to mysql');
	mysql_select_db("k",$con); 
	if($ans2=="delhi")
	{

 
echo "Welcome ". $_SESSION["var"]."!!!'";
echo '<center><form name="form" method="POST"  onsubmit="return validate(this);" action="ty.php">
<h2>What is the capital of Italy?</h1><br><br>
<input type="radio" name="ans3" value="rome"/>Rome<br>
<input type="radio" name="ans3" value="chennai"/>Chennai<br>
<input type="radio" name="ans3" value="tokyo"/>Tokyo<br>
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