<?php 
    function suma($x, $y) {
        return $x + $y;
    }

    //deberemos de separar dichas variables con el signo &
    //http://www.midominio.com/prueba.php?var1=valor1&var2=valor2&var3=valor3

    //count($trozos);   Dimension de array
    $cadena = file_get_contents("07_suma2.html");
    $trozos = explode("#codeHere#", $cadena);

    /*
    //Para leer desde la url 
    if (isset( $_GET["var1"]) && isset( $_GET["var2"])){
        $val1 = $_GET["var1"];
        $val2 = $_GET["var2"];
        
        echo $trozos[0] ."<h2> LOL". suma($val1,$val2).count($trozos)."<h2>" . $trozos[1];
    }else{
        echo $trozos[0] ."<h2> LOL". suma($val1,$val2).count($trozos)."<h2>" . $trozos[1];
        //si se esta en la mitad del codigo y se quiere tenmiar la ejecucion utilizar die()
    }*/

    if (isset( $_GET["var1"]) && isset( $_GET["var2"])){
        $val1 = $_GET["var1"];
        $val2 = $_GET["var2"];
        
        echo $trozos[0] ."<h2> LOL ". suma($val1,$val2)." <h2>" . $trozos[1];
    }else{
        echo $trozos[0] ."<h2> LOL NO has pasado nada<h2>" . $trozos[1];
        //si se esta en la mitad del codigo y se quiere tenmiar la ejecucion utilizar die()
    }
?>