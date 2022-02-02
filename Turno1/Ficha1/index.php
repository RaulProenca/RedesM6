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

        //Ex1a
        echo "O quarto e o quinto caracter da 
              palavra $pais são: " . substr($pais, 3, 1) . " " 
                                   . substr($pais, 4, 1);
        echo "<br>";
        echo "O quarto e o quinto caracter da 
              palavra $pais são: " . $pais[3] . " " 
                                   . $pais[4];
        
        //Ex1b
        echo "<br>";
        echo "O nº de caracteres da palavra $pais é ". strlen($pais);
        
        //Ex1c
        echo "<br>";
        echo "A palavra $pais em maiusculas é: " . strtoupper($pais);
        
        //Ex2
        echo "<br>";
        $frase = "Estou a frequentar o curso de PHP na Associação";
        $frase = str_replace("Associação", "Escola", $frase); 
        echo $frase;

        //Ex3
        echo "<br>";
        $cores = array("Vermelho", "Azul", "Verde", "Amarelo");
        echo $cores[1];

        //Ex4
        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango"); 
        
        $c = array_merge($a, $b);
        foreach ($c as $key => $value) {
            echo "<br>$key => $value";
        }
        echo "<br>";
        $c = array_merge($b, $a);
        foreach ($c as $key => $value) {
            echo "<br>$key => $value";
        }

        //Ex5
        $jogo = array("WoW" => 3, "GTA" => 4, 
                      "Doom" => 5, "UFO" => 4, "Crysis" =>2);

        $str = "<table>
                   <tr>
                       <td>Jogo</td>
                       <td>Cotação</td>
                   </tr>";

        foreach ($jogo as $key => $value) {
            $str = $str."<tr><td>$key</td><td>$value</td></tr>";
        }              
        $str = $str . "</table>";
        echo $str;

        //Ex6
        $jogo = array("WoW" => 3, "GTA" => 4, 
                      "Doom" => 5, "UFO" => 4, "Crysis" =>2);

        $str = "<table>
                   <tr>
                       <td>Jogo</td>
                       <td>Cotação</td>
                   </tr>";

        foreach ($jogo as $key => $value) {
            $str = $str."<tr><td>$key</td><td>";
            for ($i=0; $i < $value ; $i++) { 
                $str = $str."<img width='20' 
                             src='images/star.png' alt='star'>";
            }
            $str = $str."</td></tr>";
        }              
        $str = $str . "</table>";
        echo $str;
    ?>
    

</body>
</html>