<?php
$str = "";
if (isset($_POST["txtData"])) {
    $data = $_POST["txtData"];
    if(strtotime($data)){
        $ano = date('Y', strtotime($data)); 
        $anoatual = date('Y');
        $idade = $anoatual - $ano;
        $str = "Eu nasci em $ano, por isso eu tenho $idade anos.";
    }
        
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

                <label for="txtData" class="col-sm-3 col-form-label">
                    Data de nascimento: 
                </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control"
                           name="txtData" id="txtData">
                </div>

                <div class="col-sm-2">
                    <input type="submit" class="btn btn-primary"
                           name="btnSubmit" id="btnSubmit" 
                           value="Escrever">
                </div>
            </div>
        
            <div class="row my-3">
                <label class="col-sm-6 col-form-label">
                    <?php echo $str;?>
                </label>
            </div>
        </form>

    </div>

</body>
</html>