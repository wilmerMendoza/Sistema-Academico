<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$resulucion = $_POST['resulucion'];


$b_programa_estudios = buscarProgramaEstudiosByCodigo($conexion, $codigo);
$c_r_b_programa_estudios = mysqli_num_rows($b_programa_estudios);
if ($c_r_b_programa_estudios == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resulucion) VALUES ('$codigo','$tipo','$nombre', '$resulucion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	// registrar usuario
	//$b_id_datos_institucionales = buscarDatosInstitucionalesByCodModular($conexion, $cod_modular);
	//$res_b_datos_institucionales = mysqli_fetch_array($b_id_datos_institucionales);
	//$id_datos_institucionales = $res_b_datos_institucionales['id'];
	//$pass = "@".$dni."#2022";
	//$password_fuerte = password_hash($pass, PASSWORD_DEFAULT);

	//$insertar_usu = "INSERT INTO usuarios_estudiante (id_estudiante, usuario, password) VALUES ('$id_estudiante', '$dni', '$password_fuerte')";
	//$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if  ($ejec_insert_usu){
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