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

<form action="mensagem.php" method="post">

    <div class="row my-3">
        <label for="txtNome" class="col-sm-2 col-form-label">
            Nome: 
        </label>
        <div class="col-sm-2">
            <input type="text" class="form-control"
                   name="txtNome" id="txtNome">
        </div>
    </div>

    <div class="row my-3">

        <label for="txtSNome" class="col-sm-2 col-form-label">
            Sobrenome: 
        </label>
        <div class="col-sm-2">
            <input type="text" class="form-control"
                   name="txtSNome" id="txtSNome">
        </div>

        
    </div>

    <div class="row my-3">

    <label for="txtIdade" class="col-sm-2 col-form-label">
        Idade: 
    </label>
    <div class="col-sm-2">
        <input type="text" class="form-control"
            name="txtIdade" id="txtIdade">
    </div>


    </div>

    <div class="row my-3">
        <div class="offset-sm-2 col-sm-2">
            <input type="submit" class="btn btn-primary"
                name="btnEnviar" id="btnEnviar" 
                value="Enviar">
        </div>
    </div>
</form>

</div>
</body>
</html>