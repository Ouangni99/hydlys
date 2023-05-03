<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{ asset('assets/img/logos/logo-booking.png') }}" width="150" class="logo-one" alt="Logo">
            <img src="{{ asset('assets/img/logos/logo-booking.png') }}" width="150" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logos/logo-booking.png') }}" class="logo-one" width="150" alt="Logo">
                    <img src="{{ asset('assets/img/logos/logo-booking.png') }}" class="logo-two" width="150" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('accueil') }}"
                               class="nav-link {{ request()->routeIs('accueil') ? 'active':'' }}">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}"
                               class="nav-link {{ request()->routeIs('about') ? 'active':'' }}">
                                Qui sommes nous
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('booking') }}"
                               class="nav-link {{ request()->routeIs('booking') ? 'active':'' }}">
                                Réservation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('room_list') }}"
                               class="nav-link {{ request()->routeIs('room') ? 'active':'' }}">
                                Nos chambres
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}"
                               class="nav-link {{ request()->routeIs('contact') ? 'active':'' }}">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="{{ route('signup') }}" class="default-btn btn-bg-one border-radius-5">S'inscrire</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
