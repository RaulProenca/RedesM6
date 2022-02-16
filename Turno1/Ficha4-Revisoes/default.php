<?php
include 'classe.php';
include 'funcoes.php';

session_start();

// $_SESSION["pessoas"] = array(1 => array("Rui Almeida", "Rua Direita Nº7", "Portugal", "M"), 
//                              2 => array("Ana Gomes", "Av. Principal Nº12", "França", "F"));

// $_SESSION["pessoas"] = array(1 => "Rui Almeida,Rua Direita Nº7,Portugal,M", 
//                              2 => "Ana Gomes,Av. Principal Nº12,França,F");

if(isset($_POST["inputNome"]) && isset($_POST["inputMorada"]) 
&& isset($_POST["selectPais"]) && isset($_POST["inputGenero"])){
    adicionar($_POST["inputNome"], $_POST["inputMorada"], $_POST["selectPais"], $_POST["inputGenero"]);
} else if(isset($_GET["pessoa"])){
    remover($_GET["pessoa"]);
}else{
    $_SESSION["pessoas"] = 
    array(1 => new Pessoa("Miguel Balancho", "Rua Direita nº5", "Portugal", "M"),
          2 => new Pessoa("Rita Pereira", "Rua Central nº1", "Cabo Verde", "F"));
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <form action="" method="post">
            <div class="form-group row">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="inputNome" id="inputNome" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMorada" class="col-sm-2 col-form-label">Morada:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="inputMorada" id="inputMorada" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="selectPais" class="col-sm-2 col-form-label">País:</label>
                <div class="col-sm-6">
                    <select class="form-control" id="selectPais" name="selectPais" required>
                        <option value="OP" selected="selected" disabled>Selecione um país</option>
                        <option value="Portugal">Portugal</option>
                        <option value="França">França</option>
                        <option value="Itália">Itália</option>
                        <option value="Inglaterra">Inglaterra</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Género:</label>
                <div class="col-sm-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inputGenero" id="inputGenero1" value="M"
                            checked="checked">
                        <label class="form-check-label" for="inputGenero1">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inputGenero" id="inputGenero2" value="F">
                        <label class="form-check-label" for="inputGenero2">F</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="submit" class="btn btn-primary" id="btnAdicionar" name="btnAdicionar"
                        value="Adicionar">
                </div>
            </div>

        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">País</th>
                    <th scope="col">Género</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                  imprimir();  
                ?>
            </tbody>
        </table>
    </div>



</body>

</html>