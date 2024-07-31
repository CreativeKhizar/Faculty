<html>
<body>
<head>
<title>login_page</title>
<style>
.login{
    border: 1px solid black;
    width: 400px;
    height: 500px;
    background: url(https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg);
    color: white;
    border-radius: 20px;
    background-size: cover;
    

}
form{
    display: block;
    box-sizing: border-box;
    padding: 60px;
    max-width: 100%;
    height: 100%;
    backdrop-filter:brightness(100%);
    flex-direction: column;
    display: flex;
    gap: 10px;
    
}
h1{
    font-weight: normal;
    font-size: 60px;
    text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
    margin-bottom: 60px;
   /* background-image: linear-gradient(to right red,greeen,blue,yellow);*/
   background-image: linear-gradient(rgb(225, 120, 22),white,green);
   background-clip: text;
   -webkit-text-fill-color: transparent;

   
   
}
label{
    color: rgba(255,255,255,0.5);
text-transform: uppercase;
font-size: 14px;
padding-right:230px;
}
input{
    background: rgba(255,255,255,0.5);
    line-height: 40px;
    border-radius: 20px;
    border: none;
    padding: 0px 20px;
    margin-bottom: 20px;
    color: white;
}
button{
    background: blue;
    border: none;
    border-radius: 40px;
    height: 40px;
    margin: 10px 0px;
    color: white;
    font-size: 15px;
    text-transform: uppercase;

}
label:hover{
    color:  rgb(201, 229, 45);
}
button:hover{
    background-color: white;
    color: blue;
}
input:hover{
    background-color: bisque;
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
  <center>
 <div class="login">
  
  <form>
     <h1>login</h1>
  <label>username</label>
  <input type="text">
  <label>password</label>
  <input type="password">
  <button>submit</button>
</form>

 </div> 
  </center>

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
