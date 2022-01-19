<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Isto é um comentário-->
    <?php
        
        echo "Olá mundo!!<br>";
        echo 'Isto é um teste<br>';
        echo ("Hoje está um belo dia de sol!! <br>");
        //Comentário de linha
        # Comentário de linha
        /*
          Comentário de bloco
        */
        $a = 10;
        $b = true;
        echo gettype($b) . "<br>";
        $b = 15;
        echo gettype($b) . "<br>";
        echo ($a + $b). "<br>";  ;

        //operadores aritmeticos: + - * /

        //$a = $a + 5; 
        $a += 5;

        //$b = $b - 5;
        $b -= 5;

        //$a = $a * 5; 
        $a *= 5;
        echo $a . "<br>";    

        //$b = $b / 5;
        $b /= 5;

        //Exponencial
        // 6 ^ 3
        $c = 6 ** 3;
        echo $c . "<br>";  

        //Resto da divisão inteira
        echo $b % $a . "<br>";  

        //Incremento e decremento
        echo $a++ . " ";
        echo $a . "<br>";
        echo ++$a . " ";
        echo $a . "<br>";

        $b = 15;
        echo $b-- . " ";
        echo $b . "<br>";
        echo --$b . " ";
        echo $b . "<br>";

        //Comparacoes

        $a = 50;
        $b = "50";
        echo ($a == $b) . "<br>"; //1
        
        //spaceship operator
        //a < b ---> -1
        //a = b ---> 0
         //a > b ---> 1
        $b = 51; 
        echo ($a <=> $b) . "<br>";






    ?>
</body>
</html>