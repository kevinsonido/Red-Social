<?php

session_start();

	include("classes/connect.php");
	include("classes/login.php");

	$email = "";
	$password = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$login = new Login();
		$result = $login->evaluate($_POST);

		if($result != "")
		{

		/*	echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";*/
	    echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'Operación inválida, el puesto ya ha sido vendido.',
              })
             window.location= 'login.php'
    </script>";
		header("Location: login.php");

		}else
		{

			header("Location: profile.php");
			die;
		}


		$email = $_POST['email'];
		$password = $_POST['password'];


	}




?>

<html>

	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<title>Facebook GT | Login</title>
	</head>

	<style>

		#bar{
			height:100px;
			background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
			color: #d9dfeb;
			padding: 4px;
		}

		#signup_button{

			background-color: #42b72a;
			width: 85px;
			text-align: center;
			padding:4px;
			border-radius: 4px;
			float:right;
			color: white;
		}

		#bar2{

			background-color: white;
			width:800px;
			margin:auto;
			margin-top: 50px;
			padding:10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;

		}

		#text{

			height: 40px;
			width: 300px;
			border-radius: 4px;
			border:solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}

		#button{

			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border:none;
			background-color: rgb(59,89,152);
			color: white;
		}
		.contenedor{
			font-family: "Alliance No.1",-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		}

	</style>

	<body class="contenedor" style="font-family: tahoma;background-color: #e9ebee;">

		<div id="bar">

			<div style="font-size: 40px;color:white">Facebook GT</div>
			<a href="signup.php">
			<div id="signup_button">Registrarse</div>
			</a>
		</div>

		<div id="bar2" class="container">

			<form method="post">
				Log in Facebook<br><br>


				<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Correo electrónico"><br><br>
				<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Contraseña"><br><br>

				<button type="submit" id="" value="Log in" class="btn btn-lg btn-primary">Iniciar Sesión</button>
				<br><br>
				<span>¿Aún no tienes cuenta con nosotros?</span>
					<a href="signup.php">
				<button type="submit" class="btn btn-warning" disabled>Registrarse</button>
			</a>
				<br>

			</form>
		</div>


	</body>


</html>
