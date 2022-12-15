<?php 
include('../include/conexion.php');
include('../include/busquedas.php');

$carrera =$_POST['carrera'];
$descripcion = $_POST['descripcion'];
$nro_modulo = $_POST['nro_modulo'];

    $sql = "INSERT INTO modulo_profesional (descripcion, nro_modulo, id_programa_estudio) VALUES('$descripcion', '$nro_modulo', '$carrera')";

    $ejec_sql = mysqli_query($conexion, $sql);

    if ($ejec_sql) {
        echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulo_formativo.php'
    			</script>";
    }else{
        echo "<script>
			alert('El estudiante ya existe, error al guardar');
			window.history.back();
			</script>
			";
    }
?>