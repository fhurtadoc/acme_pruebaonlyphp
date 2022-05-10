<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../../../src/views/includes/headers.php');?> 
    <link rel="stylesheet" href="../../../src/views/css/crearDriver.css">
</head>
<body>
    <?php include_once('../../../src/views/includes/nav.php');?> 
    <h3>Crear Conductor </h3>
    <div class="containter">
        <div id="form_driver">
            <div class="form-group">
            <label for="cedula">Cedula</label><br>
            <input type="text" name="cedula" id="cedula" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresa la cedula</small>
            </div>
            <div class="form-group">                                          
            <label for="name">Nombre</label><br>
            <input type="text" name="name" id="name" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresa el Nombre</small>
            </div>
            <div class="form-group">
            <label for="second_name">Segundo Nombre</label><br>
            <input type="text" name="second_name" id="second_name" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresa el Segundo Nombre</small>
            </div>
            <div class="form-group">
            <label for="last_name">Apellido</label><br>
            <input type="text" name="last_name" id="last_name" /><br>
            <small id="emailHelp" class="form-text text-muted">ingrese el Apellido</small>
            </div>
            <div class="form-group">
            <label for="address">Direccion</label><br>
            <input type="text" name="address" id="address" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresa la direccion</small>
            </div>
            <div class="form-group">
            <label for="phone">Telefono</label><br>
            <input type="text" name="phone" id="phone" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresar telefono</small>
            </div>
            <div class="form-group">
            <label for="city">Ciudad</label><br>
            <input type="text" name="city" id="city" /><br>
            <small id="emailHelp" class="form-text text-muted">ingresar la ciudad</small>
            </div>
            <div class="form-group">
            <a  class="btn" >Crear Conductor</a>
            </div>
        </div>     
    </div>
    
</body>