<?php
function imprimir()
{
    $str = "";
    foreach ($_SESSION["carros"] as $key => $value) {
        $str = $str . "<tr>
                        <td>" . $value->getMatricula() . "</td>
                        <td>" . $value->getNDias() . "</td>
                        <td>" . $value->getMarca() . "</td>
                        <td>" . $value->getSegmento() . "</td>
                        <td>" . $value->getExtras() . "</td>
                        <td>" . $value->getTotal() . "</td>
                        <td><a href='index.php?edit=$key'><img width='25' src='img/edit.png' alt='edit'></a>
                        <a href='index.php?remove=$key'><img width='25' src='img/trashbin.png' alt='trash'></a></td>
                       </tr>";
    }
    echo $str;
}

function remover($carro)
{
    unset($_SESSION["carros"][$carro]);
}

function adicionar($matricula, $nDias, $marca, $segmento, $extras)
{
    $key = array_key_last($_SESSION["carros"]) + 1;

    $seg = 0;
    if ($segmento == "SUV/Monovolume (+10€/dia)")
        $seg = 10;
    else
        $seg = 5;

    $total = $nDias * 25 + $seg * $nDias + count($extras) * 15 . "€";

    $extra = "";
    foreach ($extras as $value) {
        $extra .= $value . "<br>";
    }

    $_SESSION["carros"][$key] = new Carro($matricula, $nDias, $marca, $segmento, $extra, $total);
}

function simular($nDias, $segmento, $extras)
{
    $seg = 0;
    if ($segmento == "Carrinha/Combi (+5€/dia)")
        $seg = 5;
    else if($segmento == "SUV/Monovolume (+10€/dia)")
        $seg = 10;

    $total = $nDias * 25 + $seg * $nDias + count($extras) * 15 . "€";

    return $total;
}