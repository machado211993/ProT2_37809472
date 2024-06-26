<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Aquí añadimos el ícono -->
        <a class="navbar-brand" href="/primer_proyecto">
            <img src="assets/img/logo.png" alt="Logo" style="width: 30px; height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="quienes_somos">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca_de">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="principal">Principal</a>
                </li>

            </ul>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Perfil
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="registro">Registrarse</a></li>
                    <li><a class="dropdown-item" href="login">Login</a></li>
                    <li><a class="dropdown-item" href="principal">Principal</a></li>
                </ul>
            </div>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>