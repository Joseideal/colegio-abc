<link rel="stylesheet" href="./css/cabecera.css">
<nav class="navbar navbar-expand-sm navbar-light">
      <div class="container">
      <a class="navbar-brand" href="#">Colegio abc</a>
      <button class="navbar-toggler collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-current="page">Inicio <span class="visually-hidden"> (actual)</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="acerca.php">Acerca</a></li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="programas.html">Pre-Inscripción</a></li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="contacto.html">Contacto</a></li>
        </ul>
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Iniciar sesion como:</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="ESTUDIANTE.php">ESTUDIANTE</a>
              <a href="DOCENTE.php">DOCENTE</a>
              <a href="ACUDIENTE.php">PADRE DE FAMILIA O ACUDIENTE</a>
              <a href="admin.php">ADMINISTRADOR</a>
            </div>
        </div>
      </div>
    </div>
  </nav>