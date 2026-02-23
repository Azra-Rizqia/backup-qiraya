<header class="site-header site-header--menu-center zubuz-header-section" id="sticky-menu">
    <div class="container">
        <nav class="navbar site-navbar">
            <div class="brand-logo">
                <a href="{{ route('beranda') }}">
                    <img src="assets/images/logo/logo-dark.png" alt="" class="light-version-logo">
                </a>
            </div>
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item">
                            <a href="{{ route('beranda') }}" class="nav-link-item">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tentang') }}" class="nav-link-item">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('program') }}" class="nav-link-item">Program</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link-item">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kontak') }}" class="nav-link-item">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                <a class="zubuz-default-btn zubuz-header-btn pill" href="https://wa.me/6285183861580">
                    <span>Mulai Belajar</span>
                </a>
            </div>
        </nav>
    </div>
</header>