<?php 
    $numCols = 2;
    $numRows = 50;

    echo "<div background-color: blue>";
    echo "Mejor utilzar codigo html con marcadores con php";
    echo "<br><br>";
    echo "<table border = 1;>";

    for ($i = 0; $i < $numRows; $i++) { 
        echo "<tr>";
        for ($j = 0; $j < $numCols; $j++) { 
            if (!$j) {
                echo "<td>".$i."</td>";
            } else {
                echo "<td> Eje num 03 </td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
?>