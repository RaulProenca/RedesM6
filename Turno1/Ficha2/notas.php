<?php

include 'funcoes.php';
session_start();

if(isset($_POST["txtAluno"]) && isset($_POST["txtNota"])){
    adicionar($_POST["txtAluno"], $_POST["txtNota"] );
}else if(isset($_GET["aluno"])){
    remover($_GET["aluno"]);
}else{
  $_SESSION["notas"] = array("Margarida Santos" => 15,
                   "Ricardo Gomes" => 10,
                   "Rita Cardoso" => 8);  
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">

    <form action="" method="post">

    <div class="row my-3">
        <label for="txtAluno" class="col-sm-2 col-form-label">
            Aluno: 
        </label>
        <div class="col-sm-3">
            <input type="text" class="form-control"
                name="txtAluno" id="txtAluno">
        </div>
    </div>

    <div class="row my-3">

        <label for="txtNota" class="col-sm-2 col-form-label">
            Nota: 
        </label>
        <div class="col-sm-2">
            <input type="text" class="form-control"
                name="txtNota" id="txtNota">
        </div>

        
    </div>

    <div class="row my-3">
        <div class="offset-sm-2 col-sm-2">
            <input type="submit" class="btn btn-primary"
                name="btnEnviar" id="btnEnviar" 
                value="Adicionar">
        </div>
    </div>
    </form>

    <div class="row my-3">
        <div class="offset-sm-2 col-sm-8 my-3">
            <?php
                imprimir();
            ?>
        </div>
    </div>    
    <div class="row my-3">
        <div class="col-sm-4">
            <p><b>Média: <?php echo media(); ?></b></p>
            <p><b>Nota mais alta: <?php echo maisAlta(); ?></b></p>
            <p><b>Nota mais baixa: <?php echo maisBaixa(); ?></b></p>
        </div>
    </div>
</div>
</body>
</html>