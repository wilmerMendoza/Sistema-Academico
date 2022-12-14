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

function buscarProgramaEstudios($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudiosByCodigo($conexion, $codigo){
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
function buscarUserEstudiante($conexion){
    $sql = "SELECT * FROM usuarios_estudiante";
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
function buscarUserDocente ($conexion){
    $sql = "SELECT*FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}

function buscarDatoInstitucional($conexion){
    $sql = "SELECT * FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
function buscarDInstitiByCodigo($conexion, $codigo){
    $sql = "SELECT*FROM datos_institucionales WHERE cod_modular = '$codigo'";
    return mysqli_query($conexion, $sql);
}

function buscarModulo($conexion){
    $sql = "SELECT*FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}

function buscarUD($conexion){
    $sql = "SELECT*FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}


function buscarPeriodoAcademico( $conexion){
    $sql = "SELECT*FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademicoById( $conexion, $id){
    $sql = "SELECT * FROM periodo_academico WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}


function buscarSemestreById($conexion, $id){
    $sql = "SELECT *FROM semestre WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}


function buscarModuloById ($conexion, $id){
    $sql = "SELECT * FROM modulo_profesional WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarUsuarioDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes  WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}

function buscarPre_p_Acad($conexion){
    $sql = "SELECT * FROM presente_periodo_acad";
    return mysqli_query($conexion, $sql);
}
function buscarPre_p_AcadById($conexion, $id){
    $sql = "SELECT * FROM presente_periodo_acad WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocente ($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}
function buscarUdById ($conexion, $id){
    $sql = "SELECT* FROM unidad_didactica WHERE id ='$id'";
    return mysqli_query($conexion, $sql);
}

?>