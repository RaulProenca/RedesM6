<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["txtNome"]) && 
          isset($_POST["txtSNome"]) && 
          isset($_POST["txtIdade"])){
              echo "O seu nome é ". $_POST["txtNome"] . " " 
              . $_POST["txtSNome"] . ". A sua idade é " . 
                $_POST["txtIdade"] . " anos.";
          }
            
    ?>
</body>
</html>