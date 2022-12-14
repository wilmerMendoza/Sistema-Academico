<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$resolucion = $_POST['resolucion'];


$b_programa_estudios = buscarProgramaEstudiosByCodigo($conexion, $codigo);
$c_r_b_programa_estudios = mysqli_num_rows($b_programa_estudios);
if ($c_r_b_programa_estudios == 0) {
	
	$insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$codigo ', '$tipo', '$nombre', '$resolucion') ";

	
	$ejec_consulta = mysqli_query( $conexión , $insertar );
	si ( $ejec_consulta ){
		echo " <script>
			alert('Registro del programa Exitoso');
			ventana.ubicacion= '../programa_estudios1.php';
			</script> ";
	} más {
		echo " <script>
			alert('Error al registrar programa');
			ventana.historial.atrás();
			</script>
			";
	}
} más {
	echo " <script>
			alert('El programa ya existe, error al guardar');
			ventana.historial.atrás();
			</script>
			";
}



?>