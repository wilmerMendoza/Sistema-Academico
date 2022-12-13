<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";
$cod_modular = $_POST['cod_modulari'];
$Ruc = $_POST['Ruc'];
$nombre_institucion = $_POST['nombre_institucion'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$telefono= $_POST['telefono'];
$correo = $_POST['correo'];
$nro_resolucion = $_POST['nro_resolucion'];


$b_datos_institucionales = buscarDatosInstitucionalesByCodModular($conexion, $cod_modular);
$c_r_b_datos_institucionales = mysqli_num_rows($b_datos_institucionales);
if ($c_r_b_datos_institucionales == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO datos_institucionales (cod_modular, Ruc, nombre_institución, departamento, provincia, distrito, direccion, telefono, correo, nro_resolucion) VALUES ('$cod_modular','$Ruc','$nombre_institucion', '$departamento', '$provincia', '$distrito', '$direccion', '$telefono', '$correo', '$nro_resolucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	// registrar usuario
	//$b_id_datos_institucionales = buscarDatosInstitucionalesByCodModular($conexion, $cod_modular);
	//$res_b_datos_institucionales = mysqli_fetch_array($b_id_datos_institucionales);
	//$id_datos_institucionales = $res_b_datos_institucionales['id'];
	//$pass = "@".$dni."#2022";
	//$password_fuerte = password_hash($pass, PASSWORD_DEFAULT);

	//$insertar_usu = "INSERT INTO usuarios_estudiante (id_estudiante, usuario, password) VALUES ('$id_estudiante', '$dni', '$password_fuerte')";
	//$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../estudiante.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
}else{
	echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>