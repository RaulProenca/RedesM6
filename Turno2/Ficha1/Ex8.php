<?php
$res = "";
if (isset($_POST["txtOp1"])) {
    if(is_numeric($_POST["txtOp1"])){
        for ($i=1; $i <=10 ; $i++) { 
            $res .= $_POST["txtOp1"] . " * ". $i . " = " . 
                   $_POST["txtOp1"] * $i . "<br>";
        }
        
    }
    else    
        $res = "Insira apenas números nas caixas de texto!!";
    
        
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
                <label class="col-sm-5 col-form-label">
                    TABUADA
                </label>
            </div>
            <div class="row my-3">
                <label class="col-sm-5 col-form-label">
                    Insira um número para calcular a tabuada
                </label>
            </div>
            <div class="row my-3">

                <label for="txtOp1" class="col-sm-2 col-form-label">
                    Insira um número
                </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"
                           name="txtOp1" id="txtOp1">
                </div>

                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary"
                           name="btnSubmit" id="btnSubmit" 
                           value="Calcular tabuada">
                </div>
            </div>
        
            <div class="row my-3">
                <label class="col-sm-2 col-form-label">
                    <?php echo $res;?>
                </label>
            </div>
        </form>

    </div>

</body>
</html>