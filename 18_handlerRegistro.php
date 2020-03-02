<?php 
    $datos = array (
        "nombre" => $_POST["nombre"],
        "apellido1" => $_POST["apellido1"],
        "apellido2" => $_POST["apellido2"],
        "direccion" => $_POST["direccion"],
        "poblacion" => $_POST["poblacion"],
        "provincia" => $_POST["provincia"],
        "telefono1" => $_POST["telefono1"],
        "telefono2" => $_POST["telefono2"]
    );

    $datosCodificados = json_encode($datos);

    file_put_contents("personas.data",$datosCodificados."\n",FILE_APPEND);

    $data = "";

    $data .= " Se ha registrado Satisfactoriamente ";
    
    $plantillaOut = file_get_contents("18_respuestaRegistro.html");
    $trozos = explode("#codeAqui#", $plantillaOut);
    echo $trozos[0].$data.$trozos[1];
?>