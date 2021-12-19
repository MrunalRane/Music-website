
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	body{
	margin: 0 auto;
	background-image: url("premium.gif");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.5);
	margin-top: 130px;
}

.container img{
	width: 160px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
	position: center;
}



.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
	</style>
</head>
<body>
	<div class="container">
	<img src="logo.png"/>
	<h1 style="margin-left: 20px; margin-top: 20px; color: white;">AURA</h1>
	<div id="php">
	<div id="bagh">
		<form name="my" method="post"  action="my.php" >
			<div class="form-input">
				<input type="text" name="un" id="user" placeholder="USERNAME"/>	
			</div>
						<div class="form-input">
				<input type="password" name="pw" id="pass" placeholder="PASSWORD"/>
			</div>
		<!-- USERNAME: <input type="text" name="un" id="user"><br><br>
		PASSWORD: <input type="password" name="pw" id="pass"><br><br>
		DELETE: <input type="text" name="dl"><br><br><br> -->
		<!-- <input type="submit" name="sb" value="SUBMIT" style="margin-left: 150px; font-size: 20px; font-family: Comic Sans MS"> -->
		<input type="submit" type="submit" value="SUBMIT" class="btn-login"/>
		
	</form>
	</div>
	</div>
    </div>
	<script type="text/javascript">
	var use=getElementById("user");
	var pas=getElementById('pass');
	if (use==yes) {
		alert("working");
	}
	else{
		alert("maybe working");
	}
	</script>
	<?php 
	error_reporting(0);
	$conn=new mysqli('localhost','root','','mrunal'); 
	if($conn->connect_error)
	{
		die("error <br><br>".$conn->connect_error);
	}
	else{
		// echo "connected successfully <br><br>";
	}

	
	$name=$_REQUEST["un"];
	$pass=$_REQUEST["pw"];
	// echo "name is :___$name<br>";
	// echo "password is :___$pass<br>";
	
	$sql="insert into login(USERNAME,PASSWORD)values('$name','$pass')";
		if($conn->query($sql)){
			// echo "inserted successfully <br><br>";
		}
		else{
			echo "byeeeeee";
		}

	$delete=$_REQUEST['dl'];
	$chris="delete from login where USERNAME='$delete'";
	if($conn->query($chris)){
			// echo "deleted successfully";
		}
		else{
			echo "byeeeeee";
		}
		
    ?>
	

</body>
</html>