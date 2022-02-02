<?php

   $str = "";
   if(isset($_POST["txtOp1"]) && is_numeric($_POST["txtOp1"])){
        for ($i=1; $i <=10 ; $i++) { 
           $str .=  $_POST["txtOp1"] . " x " . $i . " = " . $_POST["txtOp1"] * $i . "<br>"; 
        } 
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <form action="" method="post">

            <div class="row my-3">
            <label class="col-sm-2 col-form-label">
                <b>TABUADA</b></label>
            </div>
            <div class="row my-3">
            <label class="col-sm-6 col-form-label">
                Insira um número para calcular a tabuada</label>
            </div>

            <div class="row my-3">
                <label class="col-sm-2 col-form-label"
                       for="txtOp1">Insira um número</label>
                <div class="col-sm-2">
                    <input class="form-control" 
                        type="text" name="txtOp1" id="txtOp1" required>
                </div>

                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary"
                           value="Calcular tabuada" name="btnSomar">
                </div>
            </div>

            <div class="row">
                <label class="col-sm-2 col-form-label"
                 name="lblRes">
                <?php echo $str; ?>
                </label>
            </div>
        </form>

    </div>
</body>
</html>