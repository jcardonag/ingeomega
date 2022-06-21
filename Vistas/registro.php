<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../img/Ingeomega.png" />
	<script type="text/javascript" src="../alert/alertify.js"></script>
  <script type="text/javascript" src="../alert/alertify.min.js"></script>
	     
    <!-- Importanción de diseño de las alertas -->
    <link rel="stylesheet" type="text/css" href="../alert/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../alert/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="../alert/css/alertify.rtl.css">
    <link rel="stylesheet" type="text/css" href="../alert/css/alertify.rtl.min.css">
    <link href="../alert/css/themes/bootstrap.css" rel="stylesheet">
    <link href="../alert/css/themes/bootstrap.min.css" rel="stylesheet">
    <link href="../alert/css/themes/bootstrap.rtl.css" rel="stylesheet">
    <link href="../alert/css/themes/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="../alert/css/themes/default.css" rel="stylesheet">
    <link href="../alert/css/themes/default.min.css" rel="stylesheet">
    <link href="../alert/css/themes/default.rtl.css" rel="stylesheet">
    <link href="../alert/css/themes/default.rtl.min.css" rel="stylesheet">
    <link href="../alert/css/themes/semantic.css" rel="stylesheet">
    <link href="../alert/css/themes/semantic.min.css" rel="stylesheet">
    <link href="../alert/css/themes/semantic.rtl.css" rel="stylesheet">
    <link href="../alert/css/themes/semantic.rtl.min.css" rel="stylesheet">
    
    <!-- Importanción de diseño de disenologin -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"  >
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/css/util.css">
    <link rel="stylesheet" type="text/css" href="../disenologin/css/main.css">

    <title>Registro</title>
</head>
<?php 
	include_once '../Controlador/database.php';
	include_once '../Bootstrap.php';


	if (isset($_POST['register'])){
		if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['preguntarecuper']) >= 1 && strlen($_POST['respuesta']) >= 1){
			$usuario = trim($_POST['usuario']);
			$contrasena = trim($_POST['contrasena']);
			$preguntarecuper = trim($_POST['preguntarecuper']);
			$respuesta = trim($_POST['respuesta']);
			$consulta = "INSERT INTO usuario( usuario, contrasena, preguntarecuper, respuesta, rol ) VALUES ('$usuario','$contrasena', '$preguntarecuper' , '$respuesta', '2')";
			$resultado = mysqli_query($conex,$consulta);
			
			if ($resultado){
	?>
				<center>
            <div class="card-body" style="width: 20rem" >
               <div class="alert alert-primary" role="alert">
                   ¡Te has inscrito correctamente!
               </div>
            </div>
        </center>
	<?php
			 }else {
				?>
        <center>
            <div class="card-body" style="width: 20rem" >
               <div class="alert alert-danger" role="alert">
                     ¡Lo sentimos ha ocurrido un error!
               </div>
            </div>
        </center>
				<?php
			}

		} 

	} 


 ?>
			
<body oncopy="return false" onpaste="return false">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(../disenologin/images/elec-03.jpg);">
          <span class="login100-form-title-1">
            Registro
          </span>
        </div>
<form  method="POST" class="form-signin" name="form1" onSubmit="return comprobarClave(this)">
	<center>
		<div class="card-body" style="width: 20rem" >
			<input class="form-control" type="text" name="usuario" placeholder="Usuario" onkeypress="return soloLetras(event)" required autofocus>
			<br>
			<input class="form-control" id="contrasena" type="password" name="contrasena" placeholder="Contraseña" required autofocus>
			<br>
			<input class="form-control" id="concontrasena" type="password" name="concontrasena" placeholder="Confirmar Contraseña"required autofocus>
			<br>
			  <div class="form-group">
			      <select id="preguntarecuper" name="preguntarecuper" class="form-control" required autofocus>
			        	<option value="">Pregunta De Recuperación</option>
			        	<option value="¿Nombre de su primera mascota?">¿Nombre de su primera mascota?</option>
			        	<option value="¿Nombre de su abuela?">¿Nombre de su abuela?</option>
			        	<option value="¿Ciudad que le gustaría visitar?">¿Ciudad que le gustaría visitar?</option>
			      </select>
			  </div>
			<input class="form-control" type="text" name="respuesta" placeholder="Respuesta" required autofocus>
			<br>

			 <button class="btn btn-lg btn-primary btn-block" name="register" type="submit" onclick="valida_envia()">Regístrate</button>
			 <br>
			<a  class="btn btn-secondary" href="../Index.php" role="button">Volver</a>
			</div>
	</center>

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

 
<script  type="text/javascript">
      //--------------Números-------------
    function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
    alertify.alert('Expresión invalida', 'Solo Números.', function(){ (''); });
        return false;
      }
}

     //--------------Letras-------------
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
          alertify.alert('Expresión invalida', 'Solo Letras.', function(){ (''); });
            return false;
        }
    }

     //--------------No Ctrol+C - Ctrol+V-------------
window.onload = function() {
  var myInput = document.getElementById('bloquear');
  myInput.onpaste = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }
  
  myInput.oncopy = function(e) {
    e.preventDefault();
    alert("esta acción está prohibida");
  }
}
    
    //--------------Claves iguales-------------
 function comprobarClave(form1){ 
        var contrasena = document.forms['form1'].elements['contrasena']; 
        var concontrasena = document.forms['form1'].elements['concontrasena']; 
 
        if (contrasena.value == concontrasena.value){
              alertify.alert('Registro', 'Registro exitoso.', function(){ alertify.success('Genial!'); });
            return true;
        }
        else{ 
          
              alertify.alert('Registro', 'Las contraseñas no coinciden. ', function(){(''); });
            return false;           
        }
} 


</script>
