<?php

function imprimir(){

    $str = "<table class='table table-striped text-center'>
    <tr>
        <td>Aluno</td>
        <td>Nota</td>
        <td>Remover</td>
    </tr>";

    foreach ($_SESSION["notas"] as $key => $value) {
        $str = $str."<tr>
                        <td>$key</td>
                        <td>$value</td>
                        <td><a href='notas.php?aluno=$key'> &#128465; </a> </td>
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

    $maior = "";
    if(count($_SESSION["notas"]) != 0)
        $maior = max($_SESSION["notas"]);
    return $maior;
}

function maisBaixa(){
    
    $menor = "";
    if(count($_SESSION["notas"]) != 0)
        $menor = min($_SESSION["notas"]);
    return $menor;

}

function adicionar($aluno, $nota){

    $_SESSION["notas"][$aluno] = $nota;

}




?>

