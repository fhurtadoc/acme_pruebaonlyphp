<?php include_once("../../../config.php");?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?php echo _DOMAIN."index.php"?>>ACME SAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=<?php echo _DOMAIN."src/views/pages/crearCars.php";?>>Crear Vehiculos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo _DOMAIN."/src/views/pages/creaDriver.php";?>>Crear Conductor</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>