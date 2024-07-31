<html>
<body>
<head>
<title>login_page</title>
<style>
h1{
	color:green;
	background-color:yellow;
	text-align:center;
	margin-top:50px;
	}
#jas{
	width:20vw;
	background-color:red;
	font-size:15px;
	}
#form{
text-align:right;
border:3px solid red;
border-radius:6px;
margin-left:70%;
height:30vh;
}

h2{
color:green;
text-align:center;
margin-left:60%;
	}
h5{
	margin-top:170px;
	text-align:center;
	background-color:black;
	color:white;
	height:5vh;
	padding-top:20px;
	padding-bottom:10px;
	}
input[type=text]:focus{
	background-color:orange;
	outline:none;
	width:auto;
	}

</style>
</head>
<script>  
function validateform(){  
var email = document.myform.email.value;  
var password = document.myform.password.value;  
  
if(email == null || email == ""){  
alert("Email id can't be blank");  
return false;  
}else if(password.length<6){  
alert("Password must be at least 6 characters long.");  
return false;  
}  
}  
</script>  
<body>
	<h1>faculty portal</h1><br><hr><hr>
<div>
<form name="myform" method="POST">
	<h2>Login||staff</h2>
<table id="form">
<tr>
<td>Id: <input type="text" name="id" placeholder="Id"></td></tr>
<tr>
<td>Password: <input type="password" name="pwd" placeholder="Password"></td></tr> 
<td><input type="submit" value="Login" name="jas"></td>
<tr><th><a href="#">forgot Password?</a></th></tr>
</div>
</table>  
</form>
<h5>©2024 -Deprtment of Data Science.All Rights Reserved</h5>
</body>
</html>

<?php
	if(isset($_POST["jas"]))
	{
		$con=mysqli_connect("localhost","root","","faculty");
		if($con)
		{
			$id=$_POST["id"];
			$pwd=$_POST["pwd"];
			$query="Select * from staff where id='$id' and pwd='$pwd'";
			$res=mysqli_query($con,$query);
			if(mysqli_num_rows($res))
			{
				session_start();
				$row=mysqli_fetch_array($res);
				$_SESSION["id"]=$row['id'];
				header("Location: Home.php");
			}
			else
			{
				?>
				<script>
					alert("Please Enter valid ID and Password");
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script>
				alert("Connection to Database Failed");
			</script>
			<?php
		}
	}	
?> 
