<?php 
    $numCols = 3;
    $numRows = 50;
    $cumSum = 1;

    $tabla = "";

    for ($i = 1; $i <= $numRows; $i++) {
        if ($i % 2 == 0) {
            $tabla .= "<tr class = 'imEven'>";
        }else{
            $tabla .= "<tr class = 'imOdd'>";
        }
        for ($j = 0; $j < $numCols; $j++) {
            if ($j == 0) {
                $tabla .= "<td>".$i."</td>";
            } elseif ($j  == 1) {
                $tabla .= "<td> Eje num 03 </td>";
            }else{
                $tabla .= "<td>".$cumSum."</td>";
            }
        }
        $cumSum += $i;
        $tabla .= "</tr>";
    }

    //echo "El tamaño es : " . count($trozos);
    $cadena = file_get_contents("05_DymTableColor.html");
    $trozos = explode("#tabla#", $cadena);
    
    echo $trozos[0] . $tabla . $trozos[1];
?>