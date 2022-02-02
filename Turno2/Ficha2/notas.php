
<?php
session_start();
$_SESSION["users"] = array("anasantos" => "Collaborator",
                "ruialmeida" => "Administrator",
                "tiagogomes" => "Collaborator");

$str = "<table class='table table-striped text-center'>
<tr>
    <td>User</td>
    <td>Authority</td>
    <td>Remove User</td>
</tr>";              

foreach ($_SESSION["users"] as $key => $value) {
$str = $str . "<tr>
            <td>$key</td>
            <td>$value</td>
            <td>
            <a href='users.php?user=$key'>
            <img width='30' src='images/trash.png' alt='trash' >
            </a>
            </td>
            </tr>"; 
}
$str = $str . "</table>";


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
            <div class="col-sm-8">
                <?php 
                  echo $str;  
                ?>
            </div>
        </div>
        

    </div>

</body>
</html>