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

        //variável constante

        define("PI", 3.14);
        echo PI . "<br>"; 

        //IF
        if ($a >= 40 && $a <= 50) {
            echo "Sou maior que 40 e menor que 50 <br>";
        } else if($a < 40 ){
            echo "Sou menor que 40 <br>";
        } else{
            echo "Sou maior de 50 <br>";
        }
        
        //Switch
        $x = rand(25, 34);
        switch ($x) {
            case 25: echo "Idade = $x"; break;
            case 29: echo "Idade = $x"; break;
            case 30: echo "Idade = $x"; break;
            case 34: echo "Idade = $x"; break; 
            default: echo "Idade não definida!"; break;
        }
        
        echo "<br>";
        //For
        for($i = 1; $i < 16; $i++){
            echo "Número: $i <br>";
        }
        
        //While
        $a = 5;
        while ($a <= 10) {
            echo "*";
            $a++;
        }
        echo "<br>";

        //Do While
        
        do {
            # code...
            echo "&#9827;";
            $a--;
        } while ($a >= 1);

        //functions
        echo "<br>";
        function maior($a , $b){
            if($a >= $b)
                return $a;
            else
                return $b;
        }

        $c = maior (25, 30);
        echo "O número maior é $c <br>";

        //variáveis globais
        $GLOBALS['idade'] = rand(1, 80); 
        function idade(){
            if ($GLOBALS['idade'] >= 18)
                echo "És maior de idade!!<br>";
            else
                echo "Ainda és menor!!<br>";
        }
        idade();

        //Arrays
        $lista = array(12,15,true,'ola');
        array_push($lista,20,35); //Adiciona no final do array
        $lista[] = 99; //Adiciona no final do array
        array_unshift($lista,100);//Adiciona no inicio do array 
        print_r($lista); //Imprime o conteudo do array
        echo "<br>";
        array_shift($lista); //Remove o primeiro elemento do array
        array_pop($lista);//Remove o último elemento do array
        print_r($lista);
        echo "<br>";
        var_dump($lista); //Imprime o conteúdo e 
                          //tipo de dados de cada elemento do array
        echo "<br>";
        echo "Nº Elementos array: ". count($lista); //Nº elementos array
        sort($lista); //Ordena o array
        echo "<br>";
        foreach ($lista as $value) {
            echo $value . " ";
        }
        echo "<br>";
        //Elimina 1 elemento a partir do indice 5
        array_splice($lista, 5, 1); 
        foreach ($lista as $value) {
            echo $value . " ";
        }
        $total = array_sum($lista);//Soma o valores do array
        echo "<br>Total: $total";

        //Array Associativo
        $idades = array("Murillo" => 17, 
                        "Paquete" => 20, 
                        "Rúben" => 18,
                        "Pedro Silva" => 20);
        echo "<br>";

        foreach ($idades as $nome => $idade) {
            echo "Nome: $nome Idade: $idade <br>";
        }                
                        
        echo $idades["Murillo"]; //Imprime a idade do elemento
        echo "<br>";
        //descobre o índice do valor a pesquisar
        echo array_search(17, $idades); 
        echo "<br>";
        //Strings

        $str = "Isto é uma string"; 
        echo $str . "<br>";

        $str = "Guns'n Roses";
        echo $str . "<br>";

        $str = "Hoje fui ao teatro ver a peça \"William Shakespeare\"";
        echo $str . "<br>";

        $str = "Esta bola custa $40";
        echo $str . "<br>";

        //Tamanho de uma string
        echo "Tamanho da string: " . strlen($str) . "<br>";
        
        //Comparar duas strings
        $str1 = "Esta bola custa $40"; 
        if(strcmp($str, $str1) == 0)
            echo "Strings iguais<br>";
        else
            echo "Strings diferentes<br>";

        //Separar strings através de um caracter ou palavra
        $nomes = "Ana,Rui,Miguel,Carla,António";
        $listaNomes = explode(",", $nomes);
        echo $listaNomes[3] . "<br>";
        echo $listaNomes[0] . "<br>";






    ?>


</body>
</html>