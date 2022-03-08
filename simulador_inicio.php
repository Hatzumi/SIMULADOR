<?php include ("header.php"); ?>

<head>
	<!--Estilos-->
    <title>Portal de trámites y servicios - SAT</title>
	<link rel = "stylesheet" href = "./css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <header>
        <nav class = "navegacion">
            <ul class = "menu">
                <li class = "link-active"><a href = "#">Personas</a></li> |
                    <ul class = "submenu">
                        <li><a href = "#">Asalariados</a></li>
                        <li><a href = "#">Arrendadores</a></li>
                        <li><a href = "#">Empresarios y profesionistas</a></li>
                        <li><a href = "#">Incorporación fiscal</a></li>
                        <li><a href = "#">Otros ingresos</a></li>
                    </ul>
                <li><a href = "#">Empresas</a></li> |
                    <ul class = "submenu">
                        <li><a href = "#">General de ley</a></li>
                        <li><a href = "#">Cooperativas</a></li>
                        <li><a href = "#">Sector primario</a></li>
                        <li><a href = "#">Sin fines de lucro</a></li>
                        <li><a href = "#">Grupos</a></li>
                        <li><a href = "#">Coordinados</a></li>
                    </ul>
                <li><a href = "#">Nuevos Contribuyentes</a></li> |
                <li><a href = "#">Residentes en el extranjero</a></li>
                <li class = "search">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <div class = "logos">
            <div class = "cont">
                <img src = "./imagenes/logos.png" width = "400" alt = "300">
            </div>
            <div class = "trcios">
                <a href = "#">Trámites y servicios</a>
                <span>Para personas físicas</span>
            </div>
            <div class = "icons">
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-compass" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                </button>
            </div>
            <div class = "">
                <button type = "submit" class = "btn btn-success">Buzón Tributario</button>
            </div>
        </div>
    </header>
    <div class = "body">
        <div class = "ictions">
           <div class = "icon-dec">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <span>Declaraciones</span>
            </div>
            <div class = "icon-fac">
                <i class="fa fa-file-text" aria-hidden="true"></i>
                <span>Factura electrónica</span>
            </div>
            <div class = "icon-Trfc">
                <i class="fa fa-window-maximize" aria-hidden="true"></i>
                <span>Trámites del RFC</span>
            </div>
            <div class = "icon-Afis">
                <i class="fa fa-money" aria-hidden="true"></i>
                <span>Adeudos fiscales</span>
            </div>
            <div class = "icon-Dcom">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                <span>Devoluciones y compensaciones</span>
            </div>
            <div class = "icon-Afis">
                <i class="fa fa-television" aria-hidden="true"></i>
                <span>Otros trámites y servicios</span>
            </div>
            <div class = "icon-Afis">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span>Comercio exterior</span>
            </div>
        </div>
        <footer class = "bd-footer py-2 mt-5 bg-light">
            <div class = "container py-2">
                <div class = "row">
                    <div class = "col-3 mb-3">
                        <button class = "btn btn-success">Subasta SAT</button>
                        <button class = "btn btn-success">Buzón Tributario</button>
                    </div>
                    <div class = "col-3 col-lg-10 offset-lg-1 mb-3">
                        <h5>Portal de Trámites y Servicios</h5>
                        <ul class = "list-unstyled">
                            <li class="mb-2"><a href="/">Noticias</a></li>
                            <li class="mb-2"><a href="/">Calendario</a></li>
                            <li class="mb-2"><a href="/">Orientación</a></li>
                            <li class="mb-2"><a href="/">Derechos del Contribuyente</a></li>
                            <li class="mb-2"><a href="/">Datos abiertos</a></li>
                            <li class="mb-2"><a href="/">Aviso de provacidad</a></li>
                            <li class="mb-2"><a href="/">Denuncia a factureras</a></li>
                        </ul>
                    </div>
                    <div class = "col-3 col-lg-10 mb-3">
                        <h5>Buzón Tributario</h5>
                        <ul class = "list-unstyled">
                            <li class="mb-2"><a href="/">Mis notificaciones</a></li>
                            <li class="mb-2"><a href="/">Mis comunicados</a></li>
                            <li class="mb-2"><a href="/">Mis documentos</a></li>
                            <li class="mb-2"><a href="/"></a></li>
                            <li class="mb-2"><a href="/">Habilita tu Buzón Tributario</a></li>
                        </ul>
                    </div>
                    <div class = "col-3 col-lg-10 mb-3">
                        <h5>Enlaces a otros organismos</h5>
                        <ul class = "list-unstyled">
                            <li class="mb-2"><a href="/">Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales</a></li>
                            <li class="mb-2"><a href="/">Sistema de Portales de Obligaciones de Transparencia</a></li>
                            <li class="mb-2"><a href="/">Portal.gob.mx</a></li>
                            <li class="mb-2"><a href="/">Sistema Integral de Denuncias Ciudadanas (SIDEC)</a></li>
                            <li class="mb-2"><a href="/">Portal ADUANAS</a></li>
                        </ul>
                    </div>
                    <div class = "col-3 col-lg-10 mb-3">
                        <h5>Contacto</h5>
                        <ul class = "list-unstyled">
                            <span>Av. Hidalgo 77, Col. Guerrero, C.P. 06300, Ciudad de México.</span>
                            <span>Atención telefónica desde cualquier parte del país:
                                MarcaSAT <li class="mb-2"><a href="/">55 627 22 728</a> y para el exterior del país <li class="mb-2"><a href="/">(+52) 55 627 22 728</a></li>
                            </span>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

<?php include ("footer.php"); ?>