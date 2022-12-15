<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";

$descripcion   = $_POST [ 'descripcion' ];
$carrera   = $_POST [ 'carrera' ];
$modulo   = $_POST [ 'id_modulo' ];
$semestre   = $_POST [ 'semestre' ];
$creditos   = $_POST [ 'creditos' ];
$horas   = $_POST [ 'horas' ];
$tipo   = $_POST [ 'tipo' ];
$orden   = $_POST [ 'orden' ];


$b_unidad_didactica = buscarUnidadDidacticaByCarrera($conexion, $carrera);
$c_r_b_unidad_didactica = mysqli_num_rows($b_unidad_didactica);
if ($c_r_b_unidad_didactica == 0) { //validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo	id_semestre, creditos, horas, tipo, orden ) VALUES ('$descripcion', '$carrera', '$modulo', '$semestre', '$creditos', '$horas ', '$tipo ', '$orden')";
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