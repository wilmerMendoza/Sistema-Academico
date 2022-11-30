
<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$dni = $_POST['dni'];
$nom_ap = $_POST['nom_ap'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$id_genero = $_POST['id_genero'];
$nivel_educacion = $_POST['nivel_educacion'];
$cond_lab = $_POST['cond_lab'];
$cargo = $_POST['cargo'];

$sql = "UPDATE docente SET dni='$dni', apellidos_nombres='$nom_ap',  fecha_nac='$fecha_nac', direccion='$direccion', correo='$email', telefono='$celular', id_genero='$id_genero', nivel_educacion='$nivel_educacion', cond_laboral='$cond_lab', id_cargo='$id_cargo' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../docentes.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>