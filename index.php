<html>
<head>
<title>
K! Second task
</title>
<script type="text/javascript">
 function validate()
{
 var name=document.forms["form"]["user_name"].value;
 var pass=document.forms["form"]["user_pass"].value;
 var email=document.forms["form"]["user_email"].value;
 if(name==""||email==""||pass=="")
{
alert("Please enter value for all the fields");
return false;
}
r = /^[a-zA-Z]+$/;
if(!r.test(name))
{
alert("Name should contain only alphabets");
return false;
}

var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if(atpos<1||(dotpos-atpos<2))
{
alert("Invalid email");
return false;
}
return true;
}
</script>
<script type="text/javascript">
 function validatelogin()
{
 var pass=document.forms["form"]["user_pass"].value;
 var email=document.forms["form"]["user_email"].value;
 if(email==""||pass=="")
{
alert("Please enter value for all the fields");
return false;
}
r = /^[a-zA-Z]+$/;
if(!r.test(name))
{
alert("Name should contain only alphabets");
return false;
}

var atpos=email.indexOf("@");
var dotpos=email.lastIndexOf(".");
if(atpos<1||(dotpos-atpos<2))
{
alert("Invalid email");
return false;
}
return true;
}

</script>

</head>
<body>
<center>
<h1>Register</h1>
<form name="form1" method="POST"  onsubmit="return validate(this);" action="register.php">
<input type="text" name="user_name" placeholder="Username"/><br><br>
<input type="text" name="user_email" placeholder="Email"/><br><br>
<input type="password" name="user_pass" placeholder="Password"/> <br><br>
<input type="Submit" name="register"/>

</form><h1>Login</h1><br>
<form name="form1" method="POST"  onsubmit="return validatelogin(this);" action="login.php">
<input type="text" name="user_email" placeholder="Email"/><br><br>
<input type="password" name="user_pass" placeholder="Password"/> <br><br>
<input type="Submit" name="register"/>

</form>
</center>
</body>
</html>