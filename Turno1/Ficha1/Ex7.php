<?php
    $res = "";
    if(isset($_POST["txtOp1"]) && isset($_POST["txtOp2"])){
        if(is_numeric($_POST["txtOp1"]) && is_numeric($_POST["txtOp2"]))
            $res =  $_POST["txtOp1"] + $_POST["txtOp2"];
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
                <label class="col-sm-2 col-form-label text-right"
                       for="txtOp1">Operando 1</label>
                <div class="col-sm-2">
                    <input class="form-control" 
                        type="text" name="txtOp1" id="txtOp1" required>
                </div>

                <label class="col-sm-2 col-form-label text-right"
                       for="txtOp2">Operando 2</label>
                <div class="col-sm-2">
                    <input class="form-control" 
                        type="text" name="txtOp2" id="txtOp2" required>
                </div>

                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary"
                           value="Somar" name="btnSomar">
                </div>
            </div>

            <div class="row">
                <label class="col-sm-2 col-form-label text-right"
                 name="lblRes">
                <?php echo $res; ?>
                </label>
            </div>
        </form>

    </div>
</body>
</html>