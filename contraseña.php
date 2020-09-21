<?php
	include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>InBike</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<link rel="stylesheet" type="text/css" href="ingresar.php">
<!--===============================================================================================-->
</head>
<body>
	
	<center>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form  class="login100-form validate-form" method="POST" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="llena este campo">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="llena este campo">
						<span class="label-input100">Documento</span>
						<input class="input100" type="text" name="id_usuario" placeholder="Documento">
						<span class="focus-input100"></span>
					</div>
								

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Recordarme
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvidaste tu contraseña?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="boton1">Ingresar</button>	
					</div> <br>





								
				</form>
			</div>
		</div>
	</div>


				

		   <form action="index.php" method="POST" class="btn btn-primary btn-xl js-scroll-trigger"  data-toggle="modal" data-target="#myModal">
                <button>Volver</button>
                
              </form>




	</center>


	<?php

include("conexion.php");

if(isset($_POST['boton1'])){



	$id_usuario=$_POST['id_usuario'];
	$nombre=$_POST['nombre'];


$resultado=mysqli_query($conexion,"SELECT * FROM login WHERE nombre='$nombre' AND id_usuario='$id_usuario'")or die ("<h2>no se encuentra</h2>");
$total= mysqli_fetch_array($resultado);
$id=$total['id_login'];
if ($total) {

		header("location:inicio.php");
}

else{
echo "algo falló";
}
}

?>


<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
