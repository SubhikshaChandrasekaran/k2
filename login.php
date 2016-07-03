<html>
<head>
<script type="text/javascript">
 function validate()
{
 var ans=document.forms["form"]["ans"].value;
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
    $user_pass=$_POST['user_pass'];  
    $user_email=$_POST['user_email'];
  
$mysqlport = getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
	$con=mysql_connect($dbhost,"root","") or die('Error connecting to mysql');
	mysql_select_db("k",$con);
  $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysql_query($check_email_query,$con);  
  
    if(mysql_num_rows($run_query)>0)  
    {
		   $qry = "select * from users WHERE user_email='$user_email'";
$result=mysql_query($qry);
$row=mysql_fetch_array($result,MYSQL_ASSOC);
		if($user_email==$row['user_email']&&$user_pass==$row['user_pass'])
			
			{
		session_start();
  $_SESSION["var"] = $row['user_name'];


  
echo "Welcome ".$row['user_name']."!!!'";
echo '<center><form name="form" method="POST"  onsubmit="return validate(this);" action="q2.php">
<h2>What is the capital of Tamilnadu?</h1><br><br>
<input type="radio" name="ans" value="chennai"/>Chennai<br>
<input type="radio" name="ans" value="coimbatore"/>Coimbatore<br>
<input type="radio" name="ans" value="trichy"/>Trichy<br>
<input type="submit" value="Submit"/>

</form></center>';
			}  
      
	else
	{
		echo '<center><h1>Invalid Email ID or Password</h1></center>';
		echo '<center><form name="form" method="POST"  action="index.php">
		<input type="submit" value="HOME"/></form></center> 
		';

	}
			
	}	
else
	{
		echo '<center><h1> Email ID not registered.</h1></center>';
		echo '<center><form name="form" method="POST"  action="index.php">
		<input type="submit" value="HOME"/></form></center> 
		';

	}
	



?>
</body>
</html>