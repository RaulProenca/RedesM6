<?php
$res = "";
if (isset($_POST["txtOp1"]) && isset($_POST["txtOp2"])) {
    if(is_numeric($_POST["txtOp1"]) && is_numeric($_POST["txtOp2"]))
        $res = $_POST["txtOp1"] + $_POST["txtOp2"];
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

                <label for="txtOp1" class="col-sm-2 col-form-label">
                    Operando1
                </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"
                           name="txtOp1" id="txtOp1">
                </div>

                <label for="txtOp2" class="col-sm-2 col-form-label">
                    Operando2
                </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"
                           name="txtOp2" id="txtOp2">
                </div>

                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary"
                           name="btnSubmit" id="btnSubmit">
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