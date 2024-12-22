<header>
    <!-- start navigation -->
    <div class="relative" style="height:120px"></div>
    <nav class="bg-gradient-gray navbar navbar-default bootsnav navbar-top header-dark background-transparent white-link navbar-expand-lg">
        <div class="container-lg nav-header-container">
        
            <div class="col-lg-4 col-md-4 accordion-menu pe-0 pe-md-3">

                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                        <!-- start menu item -->
                        <li class="dropdown megamenu-fw">
                            <a href="/">Incio</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                        <li class="dropdown megamenu-fw">
                            <a href="{{route('nosotros')}}">Nosotros</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                        <li class="dropdown megamenu-fw">
                            <a href="{{route('cobranza')}}">Cobranza</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                     
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 header-logo">
                <a href="/" title="Logo Migo Consultores Jurídicos" class="logo wow animate__fadeInDown">
                    <img src="{{asset('assets/images/logos/migo-logo.webp')}}" alt="Logo Migo Consultores Jurídicos" class="logo-light default">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 accordion-menu pe-md-3">
                <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">

                        <li class="dropdown megamenu-fw">
                            <a href="#cobertura">Cobertura</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                        <li class="dropdown megamenu-fw">
                            <a href="#contacto">Contacto</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>

                        <li class="dropdown megamenu-fw">
                            <a href="#contacto">Clientes</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                     
                    </ul>
                </div>
            </div>

            <div class="col-auto pe-0">
                <div class="header-social-icon d-none d-md-inline-block wow animate__backInRight">
                    <p>Llamanos ahora</p>  
                    <a href="#cobertura">+52 9983596490</a>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navigation --> 
</header>