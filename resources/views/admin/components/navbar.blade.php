<div class="header">

    <!-- Logo -->
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{ asset('assets/back/img/diamil_tech_dev.png') }}" width="40" height="40" alt="">
        </a>
    </div>
    <!-- /Logo -->

    <a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Site ecommerce</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="{{ asset('assets/back/img/diamil_tech_dev.png') }}" alt="">
							<span class="status online"></span></span>
                <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="profile.html">Mon profile</a>
                    <a class="dropdown-item" href="settings.html">Parametres</a>
                    <button type="submit" class="dropdown-item">Deconnexion</button>
                </form>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="profile.html">Mon profile</a>
                <a class="dropdown-item" href="settings.html">Parametres</a>
                <button type="submit" class="dropdown-item">Deconnexion</button>
            </form>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
