<?php
include "../include/conexion.php";
include "../include/busquedas.php";
include "include/verificar_sesion.php";

$nombre   = $_POST [ 'nombre' ];
$carrera   = $_POST [ 'carrera' ];
$módulo   = $_POST [ 'módulo' ];
$semestre   = $_POST [ 'semestre' ];
$creditos   = $_POST [ 'creditos' ];
$horas   = $_POST [ 'horas' ];
$tipo   = $_POST [ 'tipo' ];
$orden   = $_POST [ 'orden' ];
echo " Nombre: ". $nombre ." CARRERA: ". $carrera ." MÓDULO: ". $módulo ." SEMESTRE: ". $semestre ." CRÉDITOS: ". $créditos ." HORAS: ". $horas ." TIPO: ". $tipo ." ORDEN: ". $orden ;

$sql = " INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo, id_semestre, creditos, horas, tipo, orden ) VALUES (' $nombre ', ' $carrera ', ' $modulo ', ' $semestre ', ' $creditos ' , '$horas ', ' $tipo ', ' $orden ') ";

$ejec = mysqli_query ( $conexión , $sql );
si ( $sql ) {
    echo " <script>
                alert('Registro Exitoso');
                ventana.ubicación= '../unidad_didactica.php'
    			</script> ";
                
} más {
    echo " <script>
        alert('Error al registrar usuario');
        ventana.historial.atrás();
        </script>
        ";
}
?>