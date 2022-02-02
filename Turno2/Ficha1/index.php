<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    
    <?php

        $pais = "Portugal";
        function caracter($pais, $indice){
            return substr($pais, $indice - 1, 1);
        }

        echo "O quarto e quinto caracteres da 
              palavra $pais são: " . 
              caracter($pais, 4) . " " . 
              caracter($pais, 5);  

        echo "<br>O nº de caracteres da palavra $pais é: " 
             . strlen($pais); 
    
        echo "<br>A palavra $pais em maiusculas é : " 
             .strtoupper($pais) . "<br>";

        $frase = "Estou a frequentar o curso de PHP na Associação";
        $frase = str_replace("Associação", "Escola", $frase);
        echo $frase;    

        $cores = array("green", "red", "yellow", "blue");
        echo "<br>A segunda cor do array é: " . $cores[1];

        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango");

        $c = array_merge($a, $b);
        foreach ($c as $key => $value) {
            echo "<br> $key => $value"; 
        }
        echo "<br>";
        $c = array_merge($b, $a);
        foreach ($c as $key => $value) {
            echo "<br> $key => $value"; 
        }

        //Ex5
        $jogo = array("WoW" => 3, "GTA" => 4, 
                      "Doom" => 5, "UFO" => 4, "Crysis" => 2);

        $str = "<table>
                    <tr>
                        <td>Jogo</td>
                        <td>Cotação</td>
                    </tr>";              
        
        foreach ($jogo as $key => $value) {
            $str = $str . "<tr>
                             <td>$key</td>
                             <td>$value</td>
                           </tr>"; 
        }
        $str = $str . "</table>";
        echo $str;
        echo "<br>";
        //Ex6
        $jogo = array("WoW" => 3, "GTA" => 4, 
                      "Doom" => 5, "UFO" => 4, "Crysis" => 2);

        $str = "<table>
                    <tr>
                        <td>Jogo</td>
                        <td>Cotação</td>
                    </tr>";              
        
        foreach ($jogo as $key => $value) {
            $str = $str . "<tr>
                             <td>$key</td>
                             <td>";
            for ($i=0; $i < $value ; $i++) { 
                $str = $str . "<img width='20' src='images/star.png'>";
            }
            $str = $str . "</td></tr>"; 
        }
        $str = $str . "</table>";
        echo $str;

    ?>

    

</body>
</html>