<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/css/util.css">
	<link rel="stylesheet" type="text/css" href="../disenologin/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../disenologin/images/elec-01.jpg);">
					<span class="login100-form-title-1">
						Acceso Lectura
					</span>
				</div>

				<form action="#" method="POST" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Se requiere un Usuario">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" placeholder="Ingresar Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Se requiere una Contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="contrasena" placeholder="Ingresar Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="recupcontrasena.php" class="txt1">Recuperar Contraseña</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Ingresar</button>

<?php 
    	include_once '../Controlador/database.php';//Llamamos la conexión a la Base de Datos
    	include_once '../Bootstrap.php';//Llamamos el diseño de Bootstrap

        //Código para hacer la validación de logueo(Inicio de sesión)
    	session_start();
    	$usuario = ['usuario']; //Donde se almacena el usuario digitado
    	$contrasena = ['contrasena'];//Donde se almacena la contraseña digitada
    	$_SESSION['usuario'] = $usuario;

    	$_SESSION['usuario'] = isset($_POST['usuario']);
        //Validación de perfiles a traves del campo rol
    	if (isset($_SESSION['rol'])) {
        	switch ($_SESSION['rol']) { 
            	case 1:
            				//Administrativo - General - Reportes
                	header('location: MenuAdmin.php');
            	break;

            	case 2:
            				//SOFTWARE
            		header('location: MenuSoftware.php');
            	break;
            	case 3:
            			    //Administrativo - calculo y números
                	header('location: MenuAlex.php');
            	break;

            	case 4:
            				//Programadores
            		header('location: MenuProgramadores.php');
            	break;

            default:
        }
    }

    //Código para validar si la contraseña que se digito es igual a la que existe en la BD
    if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuario WHERE usuario = :usuario AND contrasena = :contrasena');
        $query->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){   
            $rol = $row[5];
            
            $_SESSION['rol'] = $rol;
            switch ($_SESSION['rol']) {
                case 1:
            				//Administrativo - General - Reportes
                	header('location: MenuAdmin.php');
            	break;

            	case 2:
            				//SOFTWARE
            		header('location: MenuSoftware.php');
            	break;
            	case 3:
            			    //Administrativo - calculo y números
                	header('location: MenuAle.php');
            	break;

            	case 4:
            				//Programadores
            		header('location: MenuProgramadores.php');
            	break; 

                default:
            }
        }else{
            // no existe el usuario
             ?>
            <center>
                 <div class="card-body" style="width: 20rem" >
                    <div class="alert alert-danger" role="alert">
                        Usuario o contraseña incorrecto
                    </div>
                </div>
            </center>
           <?php
        }
        

    }

 ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="../disenologin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../disenologin/vendor/animsition/js/animsition.min.js"></script>
	<script src="../disenologin/vendor/bootstrap/js/popper.js"></script>
	<script src="../disenologin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../disenologin/vendor/select2/select2.min.js"></script>
	<script src="../disenologin/vendor/daterangepicker/moment.min.js"></script>
	<script src="../disenologin/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../disenologin/vendor/countdowntime/countdowntime.js"></script>
	<script src="../disenologin/js/main.js"></script>

</body>
</html>
