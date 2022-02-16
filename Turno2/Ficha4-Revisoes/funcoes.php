<?php

function imprimir(){

    $str = "";
    foreach ($_SESSION["pessoas"] as $key => $value) {
    $str = $str . "<tr>
                <td>". $value->getNome(). "</td>
                <td>". $value->getMorada(). "</td>
                <td>". $value->getPais(). "</td>
                <td>". $value->getGenero(). "</td>
                <td>
                <a href='default.php?user=$key'>
                <img width='30' src='images/trash.png' alt='trash' >
                </a>
                </td>
                </tr>"; 
    }
    $str = $str . "</table>";
    echo $str;
}


function adicionar($nome, $morada, $pais, $genero){
$indice = array_key_last($_SESSION["pessoas"]) + 1; 
$_SESSION["pessoas"][$indice] = $nome . "," . $morada . "," . $pais . "," . $genero;
    //$_SESSION["pessoas"][$indice] = new Pessoa($nome, $morada, $pais, $genero);
}

function remover($user){
    unset($_SESSION["pessoas"][$user]);
}


?>