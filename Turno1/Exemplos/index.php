<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Isto é um comentário -->
    <?php 
        
        echo "Olá Mundo!! <br>";
        echo 'Isto é um echo <br>' ;
        echo ("Já é noite!!<br>");

        //Isto é um comentário de linha
        # Isto é um comentário de linha
        /*
           Isto é um comentário 
           de bloco 
        */

        $a = 25;
        echo gettype($a) . "<br>";
        $a = "Olá Mundo";
        echo gettype($a) . "<br>";
      
        //Operadores aritméticos: + - * /

        $a = 30;
        //$a = $a + 5;
        $a += 5;
        echo $a . "<br>";

        //$a = $a - 5;
        $a -= 5;
        echo $a . "<br>";

        //$a = $a * 5;
        $a *= 5;
        echo $a . "<br>";

        //$a = $a / 5;
        $a /= 5;
        echo $a . "<br>";

        //Exponencial  2^12
         
        echo 2 ** 12 . "<br>";

        //Resto da divisão inteira

        echo 15 % 4 . "<br>";    

        //Incremento e decremento
        $a = 100;
        echo $a++ . "<br>"; 
        echo $a . "<br>"; 

        $a = 100;
        echo ++$a . "<br>"; 
        echo $a . "<br>"; 

        $a = 100;
        echo $a-- . "<br>"; 
        echo $a . "<br>"; 

        $a = 100;
        echo --$a . "<br>"; 
        echo $a . "<br>"; 

        //Comparacoes
        $b = 50;
        $c ='50';
        $a = ($b == $c); //true
        echo $a . "<br>";

        $a = ($b === $c); //false
        echo $a . "<br>";
        
        //Spaceship operator
        //$a > $b --> 1
        //$a = $b --> 0
        //$a < $b --> -1

        $a = 50; 
        $b = 10;
        $c = ($a <=> $b);
        echo $c . "<br>"; 

    ?>


</body>
</html>