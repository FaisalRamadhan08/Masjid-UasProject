  <!-- =========================
        Header
    =========================== -->
  <header class="header header-layout1">
      <div class="header-topbar">
          <div class="container-fluid">
              <div class="row align-items-center">
                  <div class="col-12">
                      <div class="d-flex align-items-center justify-content-between">
                         

                          </div>
                      </div>
                  </div><!-- /.col-12 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container-fluid">
              <a class="navbar-brand" href="/">
                  <img src="{{ url('solatec/assets/images/logo/logo2.png') }}" class="logo" alt="logo">
              </a>
              <button class="navbar-toggler" type="button">
                  <span class="menu-lines"><span></span></span>
              </button>
              <div class="collapse navbar-collapse" id="mainNavigation">
                  <ul class="navbar-nav">
                      <li class="nav__item">
                          <a href="{{ url('/') }}" class="nav__item-link">Beranda</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('about') }}" class="nav__item-link">Tentang Kami</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('gallery') }}" class="nav__item-link">Galeri</a>
                      </li><!-- /.nav-item -->
                      <li class="nav__item">
                          <a href="{{ url('contact') }}" class="nav__item-link">Hubungi Kami</a>
                      </li><!-- /.nav-item -->
                  </ul><!-- /.navbar-nav -->
                  <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
              </div><!-- /.navbar-collapse -->
              <div class="contact__number d-none d-xl-flex align-items-center">
                  <i class="icon-phone"></i>
                  <a href="tel:5565454117">08986039054</a>
              </div>
              <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                  <li>
                      <a href="{{ url('/login') }}"
                          class="btn btn__primary">
                          <span>Login Admin</span>
                          <i class="icon-arrow-right"></i>
                      </a>
                  </li>
              </ul><!-- /.navbar-actions -->
          </div><!-- /.container -->
      </nav><!-- /.navabr -->
  </header><!-- /.Header -->
