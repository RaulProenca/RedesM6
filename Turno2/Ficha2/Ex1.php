<?php

    $login = "luis";
    $pass = "12345";

    if (isset($_POST["txtLogin"]) && isset($_POST["txtPass"])) {
        if($_POST["txtLogin"]==$login && $_POST["txtPass"]==$pass)
            header('Location: main.html');
        else
            header('Location: erro.html');
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

                <label for="txtLogin" class="col-sm-2 col-form-label">
                    Login: 
                </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"
                           name="txtLogin" id="txtLogin">
                </div>
            </div>
        
            <div class="row my-3">

                <label for="txtLogin" class="col-sm-2 col-form-label">
                    Password: 
                </label>
                <div class="col-sm-2">
                    <input type="password" class="form-control"
                        name="txtPass" id="txtPass">
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