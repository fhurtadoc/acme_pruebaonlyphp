<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('src/views/includes/headers.php');?>
    <script src='src/views/js/home.js'></script>    
</head>
<body>
<?php include_once('src/views/includes/nav.php');?>
<style>
    .continer{
        width: 80%;
        display: flex;
        flex-flow: column;
        justify-content:center;
        margin-left: 10%;
        margin-top: 5%;
    }    
</style>
<div class="continer">
    <div id="accordion">    
    <h3 style="background-color:#0b4eb3; color:white;" >Lista de Vehiculos</h3>
    <div>  
        <table id="list_cars" class="display" style="width:80%; height: 300px;">  
                <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Nombre Propietario</th>
                        <th>Nombre Conductor</th>
                        <th>Color</th>
                    </tr>
                </thead>
            </table> 
        </div>
        <h3 style="background-color:#0b4eb3; color:white;" >Lista de Conductores</h3>
        <div>    
            <table id="list_drivers" class="display" style="width:80%; height: 300px;"> 
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Ciudad</th>
                        <th>Rol</th>
                    </tr>
                </thead>  
            
            </table> 
        </div>
        <h3 style="background-color:#0b4eb3; color:white;" >Lista de Propietarios</h3>
        <div>    
            <table id="list_owners" class="display" style="width:80%; height: 300px;"> 
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Ciudad</th>
                        <th>Rol</th>
                    </tr>
                </thead> 

            </table> 
        </div> 
    </div>
</div>
</body>
</html>