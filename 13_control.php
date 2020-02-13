<?php 
    $plantillaIn = file_get_contents("13_InInfo.html");
    echo $plantillaIn;

    $data = "";

    if (isset( $_GET["var1"]) && isset( $_GET["var2"]) && isset( $_GET["var3"]) && isset( $_GET["var4"]) ){
        $val1 = $_GET["var1"];
        $val2 = $_GET["var2"];
        $val3 = $_GET["var3"];
        $val4 = $_GET["var4"];
        
        //$data .= "<h2>$val1.<br>.$val2.<br>.$val3.<br>.$val4<h2>";
        $data .= "<h2>  what <h2>";

    }else{
        $data .= "<h2> LOL NO has completado los campos<h2>";
    }
    
    ob_clean();
    $plantillaOut = file_get_contents("13_OutReplay.html");
    $trozos = explode("#codeHere#", $plantillaOut);
    echo $trozos[0].$data.$trozos[1];
?>