<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location: login.php");
	}
?>
<html>
<head>
<title>upload_page</title>
<style>
h1{
background-color:green;
text-align:center;
color:white;
}
input[type=text]:focus{
	background-color:orange;
	outline:none;
	}
#con{
	background-color:lightblue;
	width:28vw;
	text-align:center;
	}
table{
	border:3px solid blue;
	border-radius:5px;
	}
#CLEAR{
	width:27vw;
	background-color:red;
	font-size:15px;
	}
body{
background-color:pink;
}
</style>	
</head>
<body>
<h1>Publication Details</h1>
<br>
<br>
<hr>
<form method="POST">
<div>
<table>
<tr>
<td><input type="text" name="title" placeholder="Title"</td>
</tr>
<tr>
<td><input type="text" name="jn" placeholder="Journel name"</td>
</tr>
<tr>
<td><input type="text" name="scopus" placeholder="scopus"</td>
</tr>
<tr>
<td><input type="text" name="an" placeholder="Author_Names"</td>
</tr>
<td><input type="submit" value="upload" name="clear"></td>

</table>
</div>
</form>

<?php
	if(isset($_POST["clear"]))
	{
		$title=$_POST["title"];
		$jn=$_POST["jn"];
		$scopus=$_POST["scopus"];
		$an=$_POST["an"];
		$id=$_SESSION['id'];
		$con=mysqli_connect("localhost","root","","faculty");
		if($con)
		{
			$query="Insert into publications values('$id','$title','$jn','$scopus','$an')";
			$res=mysqli_query($con,$query);
			?>

				<script>
				alert("Succesfully Uploaded");
				</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Technical Issue");
			</script>
			<?php
		}
	}
?>
</body>
</html>
