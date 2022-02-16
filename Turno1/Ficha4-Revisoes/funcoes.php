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
                <a href='default.php?pessoa=$key'>
                <img width='30' src='images/trash.png' alt='trash' >
                </a>
                </td>
                </tr>"; 
    }
    $str = $str . "</table>";
    echo $str;
}


function adicionar($nome, $morada, $pais, $genero){

   $key = array_key_last($_SESSION["pessoas"]) + 1; 
   // $_SESSION["pessoas"][$key] = array($nome, $morada, $pais, $genero);
   //$_SESSION["pessoas"][$key] = "$nome,$morada,$pais,$genero";
   $_SESSION["pessoas"][$key] = new Pessoa($nome, $morada, $pais, $genero);
}

function remover($pessoa){
    unset($_SESSION["pessoas"][$pessoa]);
}


?>