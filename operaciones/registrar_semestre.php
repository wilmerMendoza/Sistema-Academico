<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";
$descripcion = $_POST['descripcion'];
$b_semestre = buscarSemestreById($conexion, $Id);
$c_r_b_semestre = mysqli_num_rows($b_semestre);
if ($c_r_b_estudiante == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO semestre (descripcion) VALUES ('$descripcion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	// registrar usuario
	
	
	if ($ejecutar_insertar) {
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