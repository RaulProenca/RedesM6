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
          <form id="formRentACar">
            <div class="form-group row">
              <label class="col-sm-4 font-weight-bold h2 text-primary"
                >RENT A CAR</label
              >
            </div>
            <div class="form-group row">
              <label
                for="inputMatricula"
                class="col-sm-2 col-form-label font-weight-bold"
                >Matrícula:</label
              >
              <div class="col-sm-2">
                <input type="text" class="form-control" id="inputMatricula" name="inputMatricula"/>
              </div>
            </div>
            <div class="form-group row">
              <label
                for="nDias"
                class="col-sm-2 col-form-label font-weight-bold"
                >Nº de dias:</label
              >
              <div class="col-sm-1">
                <input type="text" class="form-control" id="inputNDias" name="inputNDias" />
              </div>
            </div>
            <div class="form-group row">
              <label
                for="marca"
                class="col-sm-2 col-form-label font-weight-bold"
                >Marca:</label
              >
              <div class="col-sm-4">
                <select id="selectMarca" name="selectMarca" class="form-control">
                  <option value=""></option>
                  <option value="AU">Audi</option>
                  <option value="BM">BMW</option>
                  <option value="MB">Mercedes-Benz</option>
                  <option value="VO">Volvo</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold"
                >Segmento:</label
              >
              <div class="col-sm-4">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="Utilitário/Sedan"
                    name="inputSegmento"
                    id="segUtilitario"
                    checked
                  />
                  <label class="form-check-label" for="segUtilitario"
                    >Utilitário/Sedan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="Carrinha/Combi (+5€/dia)"
                    name="inputSegmento"
                    id="segCarrinha"
                  />
                  <label class="form-check-label" for="segCarrinha"
                    >Carrinha/Combi (+5€/dia)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="SUV/Monovolume (+10€/dia)"
                    name="inputSegmento"
                    id="segSuv"
                  />
                  <label class="form-check-label" for="segSuv"
                    >SUV/Monovolume (+10€/dia)</label
                  >
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold"
                >Extras (15€/cada):</label
              >
              <div class="col-sm-4">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    name="inputExtras[]"
                    id="extra_ar_condicionado"
                    value="Ar condicionado"
                  />
                  <label class="form-check-label" for="extra_ar_condicionado"
                    >Ar condicionado</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    name="inputExtras[]"
                    id="extra_gps"
                    value="GPS"
                  />
                  <label class="form-check-label" for="extra_gps">GPS</label>
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    name="inputExtras[]"
                    id="extra_estofos_pele"
                    value="Estofos em pele"
                  />
                  <label class="form-check-label" for="extra_estofos_pele"
                    >Estofos em pele</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    name="inputExtras[]"
                    id="extra_pintura_metalizada"
                    value="Pintura metalizada"
                  />
                  <label class="form-check-label" for="extra_pintura_metalizada"
                    >Pintura metalizada</label
                  >
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold"
                >Preço Base:</label
              >
              <label class="col-sm-2 col-form-label">25€/dia</label>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                <input type="submit" name="btnCusto" id="btnCusto" class="btn btn-primary" value="Simular">
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="inputRes" name="inputRes" />
              </div>
              <div class="col-sm-4">
                <input type="submit" name="btnAdicionar" id="btnAdicionar" class="btn btn-success"value="Adicionar">
                <input type="submit" name="btnEditar" id="btnEditar" class="btn btn-warning" value="Editar">
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
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <!-- Inserir aqui as linhas da tabela -->

                    
                <!-- <tr>
                        <td>31-HG-24</td>  
                        <td>5</td>  
                        <td>Audi</td>  
                        <td>Utilitário/Sedan</td>  
                        <td>Ar condicionado<br>Estofos em pele<br>Pintura metalizada</td>  
                        <td>170€</td>  
                        <td>
                        <img width="25" src="images/edit.png" alt="edit">  
                        <img width="25" src="images/trashbin.png" alt="trash">
                        </td> 
                    </tr>
                    <tr>
                      <td>54-FG-78</td>  
                      <td>10</td>  
                      <td>Mercedes-Benz</td>  
                      <td>SUV/Monovolume</td>  
                      <td>GPS</td>  
                      <td>365€</td>  
                      <td>
                      <img width="25" src="images/edit.png" alt="edit"> 
                      <img width="25" src="images/trashbin.png" alt="trash">
                      </td> 
                    </tr> -->
                </tbody>
              </table> 
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
