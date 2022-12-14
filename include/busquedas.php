<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
function buscarGeneroById($conexion, $id){
    $sql = "SELECT *FROM genero WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
function buscarCargoById($conexion, $id){
    $sql ="SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaByCodigo($conexion, $codigo){
    $sql = "SELECT * FROM programa_estudios WHERE codigo='$codigo'";
    return mysqli_query($conexion, $sql);
}

function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
function buscarCondicionById($conexion, $id){
    $sql = "SELECT * FROM condicion WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioEstudianteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByNombre($conexion, $nombre){
    $sql = "SELECT * FROM estudiante WHERE apellidos_nombres='$nombre'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarDocentes($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}

function buscarDatosInstitucionales($conexion){
    $sql = "SELECT * FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}

function buscarDatosInstitucionalesByCodModular($conexion, $cod_modular){
    $sql = "SELECT * FROM datos_institucionales WHERE cod_modular='$cod_modular'";
    return mysqli_query($conexion, $sql);
}





?>