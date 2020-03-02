<?php 
     $plantillaOut = file_get_contents("18_ListadoPersonas.html");
     $trozos = explode('#fila#', $plantillaOut);

    $firmaslineas = file("personas.data");

    $data = "";

    foreach ($firmaslineas as $persona){
        $firmas_array[]  = json_decode($persona,true);    
    }
    
    foreach ($firmas_array as $key => $value) {
        $aux = $trozos[1];

        $aux = str_replace("#name#", $value['nombre'], $aux);/*
        $aux = str_replace("#ap1#", $value->apellido1, $aux);
        $aux = str_replace("#ap2#", $value->apellido2, $aux);
        $aux = str_replace("#direc#", $value->direccion, $aux);
        $aux = str_replace("#pobla#", $value->poblacion, $aux);
        $aux = str_replace("#provin#", $value->provincia, $aux);
        $aux = str_replace("#telf1#", $value->telefono1, $aux);
        $aux = str_replace("#telf2#", $value->telefono2, $aux);*/

        $data .=  $aux;
    }


    echo $trozos[0].$data.$trozos[2];
 ?>