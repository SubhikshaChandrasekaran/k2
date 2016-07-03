<html>
<head>
</head>
<body>
<?php
$user_name=$_POST['user_name'];  
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
echo "Email $user_email is already exist in our database, Please try another one!";  
exit();  
    }  
	$qry ="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";	
	$result = mysql_query($qry,$con);
	if($result)
	{
		echo "Registered Successfully!!!";
				session_start();
  $_SESSION["var"] = $user_name;

  
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
		echo '<center><h1> Email ID not registered.</h1></center>';
		echo '<center><form name="form" method="POST"  action="index.php">
		<input type="submit" value="HOME"/></form></center> 
		';

	}
	}
	else
	{
		echo "Sorry!! Please try again.";
	}



?>
</body>
</html>