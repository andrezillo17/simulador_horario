<?php
$titulo = "Edición";
require_once("view/cabecera.php");
require_once("log/grupo.php");
require_once("log/formularios.php");

if(isset($_GET["type"])){
    if(!empty($_GET["type"])){
        $tipoEdicion = $_GET["type"];
    }

}else{
    echo "<div class='error'>Lamentablemente no sabemos que editar</div>";
}
if(isset($_GET["id"])){
    if(!empty($_GET["id"])){
        $idType = $_GET["id"];
    }

}else{
    echo "<div class='error'>Lamentablemente no sabemos que editar</div>";
}

//GRUPOS
$objectGrupo =  new Grupos();
if($tipoEdicion==grupos){  
}


//MATERIAS

if($tipoEdicion==materias){
    $lectura = new Lectura("george_elmundon");
    $formulario = new Formularios("grupos","edit.php?materias&edit");
    $materia = $lectura->obtener("select * from electivas where codigo=".$idType."");
    $formulario->edicionMateria($materia[0]["codigo"],$materia[0]["nombre"],$materia[0]["creditos"],$materia[0]["descripcion"]);
    
    if(($tipoEdicion==materias) && isset($_GET["edit"]){
        if(isset($_POST["codigo"]) && isset($_POST["nombre"]) && isset($_POST["creditos"]) && isset($_POST["descripcion"])){
            
        }
    }
}



?>