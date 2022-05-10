<?php include_once("../../../config.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once(RAIZ.'/src/views/includes/headers.php');?>  
    <link rel="stylesheet" href= <?php echo _DOMAIN.'/src/views/css/style_createCar.css'?>>    
    
</head>
<body>
<?php include_once(RAIZ.'/src/views/includes/nav.php');?>
    
    <form action="#" class="form">
      <h1 class="text-center">Registrar Vehiculo</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Propietario"
        ></div>
        <div class="progress-step" data-title="Vehiculo"></div>
        <div class="progress-step" data-title="Conductor"></div>        
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
      <div class="input-group">
          <label for="cedula_owner">Cedula</label>
          <input type="text" name="cedula_owner" id="cedula_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa la cedula</small>
        </div>
        <div class="input-group">
          <label for="name_owner">Nombre</label>
          <input type="text" name="name_owner" id="name_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu nombre</small>
        </div>
        <div class="input-group">
          <label for="second_name_owner">Segundo Nombre</label>
          <input type="text" name="second_name_owner" id="second_name_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu segundo nombre</small>
        </div>
        <div class="input-group">
          <label for="last_name_owner">Apellido</label>
          <input type="text" name="last_name_owner" id="last_name_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu Apellido</small>
        </div>
        <div class="input-group">
          <label for="address_owner">Direccion</label>
          <input type="text" name="address_owner" id="address_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu Direccion</small>
        </div>
        <div class="input-group">
          <label for="phone_owner">Telefono</label>
          <input type="text" name="phone_owner" id="phone_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu Telefono</small>
        </div>
        <div class="input-group">
          <label for="city_owner">Ciudad</label>
          <input type="text" name="city_owner" id="city_owner" />
          <small id="emailHelp" class="form-text text-muted">ingresa tu Ciudad</small>          
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto" onclick="createCars(1)">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="license">Placa</label>
          <input type="text" name="license" id="license" />
          <small id="emailHelp" class="form-text text-muted">ingresa la placa del vehiculo</small>          
        </div>
        <div class="input-group">
          <label for="brand">Marca</label>
          <input type="text" name="brand" id="brand" />
          <small id="emailHelp" class="form-text text-muted">ingresa la marca del vehiculo</small>          
        </div>
        <div class="input-group">
          <label for="Color">Color</label>
          <input type="text" name="Color" id="Color" />
          <small id="emailHelp" class="form-text text-muted">ingresa el Color del vehiculo</small>          
        </div>
        <div class="input-group">
          <label for="type_car">Tipo</label>
          <div class="content-select">
            <select name="type_car" id="type_car">
              <option value="1">Publico</option>
              <option value="2">Privado</option>
            </select> 
            <small id="emailHelp" class="form-text text-muted">ingresa el tipo del vehiculo</small>                   
          </div>
          
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev" >Previous</a>
          <a href="#" class="btn btn-next" onclick="createCars(2)" >Next</a>
        </div>
      </div>
      <div class="form-step">
          <div id="accordion-resizer" class="ui-widget-content">
            <div id="accordion2">
                <h3 style="background-color:#0b4eb3; color: white;">Crear Conductor para este vehiculo </h3>
                <div>
                        <div class="input-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula" id="cedula" />
                        <small id="emailHelp" class="form-text text-muted">ingresa la cedula</small>
                        </div>
                        <div class="input-group">                                          
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu nombre</small>
                        </div>
                        <div class="input-group">
                        <label for="second_name">Segundo Nombre</label>
                        <input type="text" name="second_name" id="second_name" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu segundo nombre</small>
                        </div>
                        <div class="input-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" name="last_name" id="last_name" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu Apellido</small>
                        </div>
                        <div class="input-group">
                        <label for="address">Direccion</label>
                        <input type="text" name="address" id="address" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu Direccion</small>
                        </div>
                        <div class="input-group">
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" id="phone" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu Telefono</small>
                        </div>
                        <div class="input-group">
                        <label for="city">Ciudad</label>
                        <input type="text" name="city" id="city" />
                        <small id="emailHelp" class="form-text text-muted">ingresa tu Ciudad</small>
                        <a href="#" class="btn" style="color:white; width: 100%;" onclick="createCars(3)">Crear Conductor</a>
                        </div>
                </div>  
                <h3 style="background-color:#0b4eb3; color: white;">Asociar un Conductor a este caso</h3>
                <div class="content-select">                
                    <select name="list_drivers" id="list_drivers">
                        
                    </select>
                </div>  
            </div>     
          </div> 
          <br>    
        <div class="btns-group" id="divsubmit">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next" onclick="createCars()" >Crear Vehiculo</a>          
        </div>
      </div>     
    </form> 
    <script src=<?php echo _DOMAIN.'/src/views/js/crearCars.js'?>></script>      
</body>
