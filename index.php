
<?php require 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./index.css" rel="stylesheet">
</head>
<body>
  <?php
   $clase = new dbContext();
   $clase->connect_db();
  if(isset($_POST['nombre'])){
    $clase->insert($_POST['nombre'],$_POST['documento'],$_POST['correo'],$_POST['sexo'],$_POST['telefono'],$_POST['direccion'],$_POST['marca'],$_POST['modelo'],$_POST['placa']);
  }
  ?>
    <div class="container" >
        <form class="row g-3 needs-validation" id="formulario" action="" method="POST" novalidate>
            <h1 class="centrado">Formulario de Alquiler de Vehiculo</h1>
            <h4>Datos del Cliente</h4>
            <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
              <label for="nombre" class="form-label">NOMBRE</label>
              <input type="text" name="nombre" class="form-control" id="nombre" required>        
              <div class="invalid-feedback">
                Por favor ingrese su nombre!
               </div>
               <div class="valid-feedback">
                Todo bien!
              </div>
            </div>
            <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="cedula" class="form-label">CEDULA O PASAPORTE</label>
                <input type="text" name="documento" class="form-control" id="cedula"  required>
                <div class="invalid-feedback">
                  Por favor ingrese su Cedula o pasaporte!
                 </div>
                 <div class="valid-feedback">
                  Todo bien!
                </div>
              </div>
            <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
              <label for="correo" class="form-label">EMAIL</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" name="correo" class="form-control" id="correo" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor ingrese un correo!
                </div>
                <div class="valid-feedback">
                  Todo bien!
                </div>
              </div>
            </div>



            <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="sexo" class="form-label">SEXO</label>
                <select class="form-control" name="sexo" id="sexo">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                <div class="invalid-feedback">
                  Por favor su sexo!
                 </div>
                <div class="valid-feedback">
                  Todo bien!
                </div>       
              </div>
             
              <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="telefono" class="form-label">TELEFONO</label>
                <div class="input-group">
                  <input type="telefono" name="telefono" class="form-control" id="telefono" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                   Por favor ingrese su telefono!
                  </div>
                  <div class="valid-feedback">
                    Todo bien!
                  </div>  
                </div>
              </div>
              <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="direccion" class="form-label">DIRECCION</label>
                <div class="input-group">
                  <input type="text" name="direccion" class="form-control" id="direccion" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                   Por favor ingrese su direccion exacta!
                  </div>
                  <div class="valid-feedback">
                    Todo bien!
                  </div>  
                </div>
              </div>
             
             
              <h4>Datos del Vehiculo</h4>

              <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="marca" class="form-label">MARCA</label>
                <input type="text" name="marca" class="form-control" id="marca"  required>
                <div class="invalid-feedback">
                  Por favor ingrese la marca del vehiculo!
                 </div>
                 <div class="valid-feedback">
                  Todo bien!
                </div>  
              </div>
              <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="modelo" class="form-label">MODELO</label>
                <input type="text" name="modelo" class="form-control" id="modelo"  required>
                <div class="invalid-feedback">
                  Por favor ingrese el modelo del vehiculo!
                 </div>
                 <div class="valid-feedback">
                  Todo bien!
                </div>  
              </div>
             
              <div class="col-xs=12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="placa" class="form-label">PLACA</label>
                <div class="input-group">
                  <input type="text" name="placa" class="form-control" id="placa" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                   Por favor ingrese la placa!
                  </div>
                  <div class="valid-feedback">
                    Todo bien!
                  </div>  
                </div>
              </div>

            
            <div class="col-12 centrado">
              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
            </form><br/>
          </form>
          <!--tabla-->
          <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Sexo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                </tr>
            </thead>
            <tbody id="table-content">
              <?php 
             
              $result = $clase->getAllVehicle();
              while($data = $result->fetch_assoc()){
                 echo "
              <tr>
                <td>".$data['id']."</td>
                <td>".$data['nombre']."</td>
                <td>".$data['documento']."</td>
                <td>".$data['correo']."</td>
                <td>".$data['sexo']."</td>
                <td>".$data['telefono']."</td>
                <td>".$data['direccion']."</td>
                <td>".$data['marca']."</td>
                <td>".$data['modelo']."</td>
                <td>".$data['placa']."</td>

               
              </tr>
              ";
                
              }
             
              $datos = $clase->close();
              ?>
            </tbody>
          </table>
          <!--fin tabla-->
          <!--Toast-->

          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Mensaje</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body" style="color: red;">
               
                <h5> Debe ingresar un email con formato valido!</h5>
              </div>
            </div>
          </div>
          <!--fin Toast-->

          <!--Toast de confirmacion-->
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="confirmToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Mensaje</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body" >
                  <h3>Solicitud realizada con exito!</h3>
                
              </div>
            </div>
          </div>
          
          <div id="spinnerDiv" class="overlay">
                <div class="spinner-border" role="status">
                     <span class="sr-only"></span>
                </div>
          </div>
          
          <!--fin toast de confirmacion-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="./index.js?v=3" ></script>
</body>
</html>