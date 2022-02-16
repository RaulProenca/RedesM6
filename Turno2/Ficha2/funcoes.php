<?php

function imprimir(){

    $str = "<table class='table table-striped text-center'>
    <tr>
        <td>Aluno</td>
        <td>Nota</td>
        <td>Remover</td>
    </tr>";              

    foreach ($_SESSION["notas"] as $key => $value) {
    $str = $str . "<tr>
                <td>$key</td>
                <td>$value</td>
                <td>
                <a href='notas.php?aluno=$key'>
                <img width='30' src='images/trash.png' alt='trash' >
                </a>
                </td>
                </tr>"; 
    }
    $str = $str . "</table>";
    echo $str;
}

function remover($aluno){
    unset($_SESSION["notas"][$aluno]);
}

function media(){

    $media = 0;
    if(count($_SESSION["notas"]) != 0)
        $media = array_sum($_SESSION["notas"])/count($_SESSION["notas"]);
    return $media;

}

function maisAlta(){
    $max = "";
    if(count($_SESSION["notas"]) != 0)
        $max = max($_SESSION["notas"]);
    return $max;
}

function maisBaixa(){
    $min = "";
    if(count($_SESSION["notas"]) != 0)
        $min = min($_SESSION["notas"]);
    return $min;
}

function adicionar($aluno, $nota){
    
    $_SESSION["notas"][$aluno] = $nota;
    
}



?>