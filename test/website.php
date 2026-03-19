<html>
<head>
<title>My Website</title>
</head>
<body>
<h1> welcome to my page</h1>
	<form method="POST">
Name	: <input type="text" name= "fullname">
Email	: <input type="text" name="mail">
password: <input type="password" name="pass">
		  <input type="submit" name="av">
	</form>
	//To connect the database to the webpage in order to get the data//
			<?php 
	$con = mysqli_connect('localhost','root','Casperminek_20','users') ;
				if(isset($_POST['av']))
				{
					$name=$_POST['fullname'];
					$email=$_POST['mail'];
					$password=$_POST['pass'];
						$querry = "INSERT INTO mydata(name,email,password) values ('$name','$email','$password')";
							$execute=mysqli_query($con,$querry);
				}
			?>


</body>








</html>
