<?php
include "class.php";
include "function.php";

session_start();
$tot = "";
$matricula = "";
$marca = "";
$nDias = "";
$exts = array();
$seg = "";
$btnAdicionar = "";
$btnEditar = "disabled";

if (isset($_POST["inputMatricula"]) && isset($_POST["inputNDias"]) && isset($_POST["selectMarca"]) && isset($_POST["inputSegmento"])) {
  if (isset($_POST["btnCusto"])){
    if (!isset($_POST["inputExtras"])){
      $extra = array();
      $tot = simular($_POST["inputNDias"], $_POST["inputSegmento"], $extra);
    } 
    else
      $tot = simular($_POST["inputNDias"], $_POST["inputSegmento"], $_POST["inputExtras"]);
  }else if(isset($_POST["btnEditar"])){
    
    $_SESSION["carros"][$_GET["edit"]] -> setMatricula($_POST["inputMatricula"]);
    $_SESSION["carros"][$_GET["edit"]] -> setNDias($_POST["inputNDias"]);
    $_SESSION["carros"][$_GET["edit"]] -> setMarca($_POST["selectMarca"]);
    $_SESSION["carros"][$_GET["edit"]] -> setSegmento($_POST["inputSegmento"]);

    if (!isset($_POST["inputExtras"])){ 
      $extra = array();
      $tot = simular($_POST["inputNDias"], $_POST["inputSegmento"], $extra);
      $_SESSION["carros"][$_GET["edit"]] -> setExtras("");
    } 
    else{
      $tot = simular($_POST["inputNDias"], $_POST["inputSegmento"], $_POST["inputExtras"]);
      $str = "";
      foreach ($_POST["inputExtras"] as $value) {
        $str .= $value . "<br>";
      }
      $_SESSION["carros"][$_GET["edit"]] -> setExtras($str);
    }
      
    $_SESSION["carros"][$_GET["edit"]] -> setTotal($tot);
    $tot = "";
  }
  else{
    if (!isset($_POST["inputExtras"])){
      $extra = array();
      adicionar($_POST["inputMatricula"], $_POST["inputNDias"], $_POST["selectMarca"], $_POST["inputSegmento"], $extra);
    }else
    adicionar($_POST["inputMatricula"], $_POST["inputNDias"], $_POST["selectMarca"], $_POST["inputSegmento"], $_POST["inputExtras"]);
  }
}elseif (isset($_GET["remove"]))
      remover($_GET["remove"]);
elseif(isset($_GET["edit"])) {   
      $carro = $_SESSION["carros"][$_GET["edit"]];
      $matricula = $carro -> getMatricula();
      $marca = $carro -> getmarca();
      $nDias = $carro -> getNDias();
      $seg = $carro -> getSegmento();
      $exts = explode("<br>", $carro -> getExtras());
      $btnEditar = "enabled";
      $btnAdicionar = "disabled";
  }
else
    $_SESSION["carros"] = array(1 => new Carro("85-FB-51", "10", "Audi", "Utilitário/Sedan", "Ar condicionado<br>Estofos em pele<br>Pintura metalizada", "345€"),2 => new Carro("15-WQ-36", "7", "Mercedes-Benz", "Utilitário/Sedan", "GPS", "225€")); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rent a Car</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
</head>

<body>
  <div class="container">
    <br />
    <div class="card">
      <div class="card-body bg-light">
        <form action="" method="post" id="formRentACar">
          <div class="form-group row">
            <label class="col-sm-4 font-weight-bold h2 text-primary">RENT A CAR</label>
          </div>
          <div class="form-group row">
            <label for="inputMatricula" class="col-sm-2 col-form-label font-weight-bold">Matrícula:</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="inputMatricula" name="inputMatricula" value="<?php echo $matricula; ?>"/>
            </div>
          </div>
          <div class="form-group row">
            <label for="nDias" class="col-sm-2 col-form-label font-weight-bold">Nº de dias:</label>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="inputNDias" name="inputNDias" value="<?php echo $nDias; ?>"/>
            </div>
          </div>
          <div class="form-group row">
            <label for="marca" class="col-sm-2 col-form-label font-weight-bold">Marca:</label>
            <div class="col-sm-4">
              <select id="selectMarca" name="selectMarca" class="form-control">
                <option value="" selected></option>
                <option value="Audi" <?php echo ($marca =="Audi") ? "selected": ""?>>Audi</option>
                <option value="BMW" <?php echo ($marca =="BMW") ? "selected": ""?>>BMW</option>
                <option value="Mercedes-Benz" <?php echo ($marca =="Mercedes-Benz") ? "selected": ""?>>Mercedes-Benz</option>
                <option value="Volvo" <?php echo ($marca =="Volvo") ? "selected": ""?>>Volvo</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Segmento:</label>
            <div class="col-sm-4">
              
              <div class="form-check">
                <?php 
                if ($seg == "Utilitário/Sedan") 
                  echo "<input class='form-check-input' type='radio' value='Utilitário/Sedan' name='inputSegmento' id='segUtilitario' checked/>";
                else
                  echo "<input class='form-check-input' type='radio' value='Utilitário/Sedan' name='inputSegmento' id='segUtilitario'/>";
                ?>
                <label class="form-check-label" for="segUtilitario">Utilitário/Sedan</label>
              </div>
              <div class="form-check">
              <?php 
                if ($seg == "Carrinha/Combi (+5€/dia)") 
                  echo "<input class='form-check-input' type='radio' value='Carrinha/Combi (+5€/dia)' name='inputSegmento' id='segCarrinha' checked/>";
                else
                  echo "<input class='form-check-input' type='radio' value='Carrinha/Combi (+5€/dia)' name='inputSegmento' id='segCarrinha'/>";
                ?>
                <label class="form-check-label" for="segCarrinha">Carrinha/Combi (+5€/dia)</label>
              </div>
              <div class="form-check">
              <?php 
                if ($seg == "SUV/Monovolume (+10€/dia)") 
                  echo "<input class='form-check-input' type='radio' value='SUV/Monovolume (+10€/dia)' name='inputSegmento' id='segSuv' checked/>";
                else
                  echo "<input class='form-check-input' type='radio' value='SUV/Monovolume (+10€/dia)' name='inputSegmento' id='segSuv'/>";
                ?>
                <label class="form-check-label" for="segSuv">SUV/Monovolume (+10€/dia)</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Extras (15€/cada):</label>
            <div class="col-sm-4">
              <div class="form-check">
              <?php 
                if (in_array("Ar condicionado", $exts)) 
                  echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_ar_condicionado' value='Ar condicionado' checked/>";
                else
                echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_ar_condicionado' value='Ar condicionado'/>";
                ?>
                <label class="form-check-label" for="extra_ar_condicionado">Ar condicionado</label>
              </div>
              <div class="form-check">
              <?php 
                if (in_array("GPS", $exts)) 
                  echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_gps' value='GPS' checked/>";
                else
                echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_gps' value='GPS'/>";
                ?>
                <label class="form-check-label" for="extra_gps">GPS</label>
              </div>
              <div class="form-check">
              <?php 
                if (in_array("Estofos em pele", $exts)) 
                  echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_estofos_pele' value='Estofos em pele' checked/>";
                else
                echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_estofos_pele' value='Estofos em pele'/>";
                ?>
                <label class="form-check-label" for="extra_estofos_pele">Estofos em pele</label>
              </div>
              <div class="form-check">
                <?php 
                if (in_array("Pintura metalizada", $exts)) 
                  echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_pintura_metalizada' value='Pintura metalizada' checked/>";
                else
                echo "<input type='checkbox' class='form-check-input' name='inputExtras[]' id='extra_pintura_metalizada' value='Pintura metalizada'/>";
                ?>
                <label class="form-check-label" for="extra_pintura_metalizada">Pintura metalizada</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Preço Base:</label>
            <label class="col-sm-2 col-form-label">25€/dia</label>
          </div>
          <div class="form-group row">
            <div class="col-sm-2">
              <input type="submit" name="btnCusto" id="btnCusto" class="btn btn-primary" value="Simular" onclick="simular()">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="inputRes" name="inputRes" value="<?php echo $tot; ?>"/>
            </div>
            <div class="col-sm-4">
              <input type="submit" name="btnAdicionar" <?php echo $btnAdicionar; ?> id="btnAdicionar" class="btn btn-success" value="Adicionar">
              <input type="submit" name="btnEditar" <?php echo $btnEditar; ?> id="btnEditar" class="btn btn-warning" value="Editar">
            </div>
          </div>
          <div class="form-group row">
            <table class="table table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">Matrícula</th>
                  <th scope="col">Nº Dias</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Segmento</th>
                  <th scope="col">Extras</th>
                  <th scope="col">Total</th>
                  <th scope="col">Remover</th>
                </tr>
              </thead>
              <tbody>
                <?php imprimir(); ?>
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>