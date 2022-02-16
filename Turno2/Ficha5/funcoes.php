<?php

function imprimir(){

    $str = "";
    foreach ($_SESSION["garagem"] as $key => $value) {
    $str = $str . "<tr>
                <td>". $value[0]. "</td>
                <td>". $value[1]. "</td>
                <td>". $value[2]. "</td>
                <td>". $value[3]. "</td>
                <td>". $value[4]. "</td>
                <td>". $value[5]. "</td>
                <td>
                <a href='index.php?edit=$key'>
                <img width='30' src='images/edit.png' alt='edit' >
                </a>
                <a href='index.php?remove=$key'>
                <img width='30' src='images/trashbin.png' alt='trash' >
                </a>
                </td>
                
                </tr>"; 
    }
    echo $str;
}

function simular($ndias, $segmento, $extras){

    $segmento = 0;
    if($segmento=='Carrinha/Combi')
        $segmento = $ndias * 5;
    else if($segmento == 'SUV/Monovolume')
        $segmento = $ndias * 10;

    $totalExtras = count($extras) * 15; 
    $total = $ndias * 25 + $segmento + $totalExtras;

    return $total;
}

?>