
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bingo Online- Juega y Gana</title>
  <!-- site favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <!-- custom select css -->
  <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
  <!-- animate css  -->
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- lightcase css -->
  <link rel="stylesheet" href="assets/css/vendor/lightcase.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <!-- jquery ui css -->
  <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="assets/css/vendor/datepicker.min.css">
  <!-- style main css -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
  <body>

  <div class="preloader">
    <svg class="mainSVG" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
      <defs>   
        <path id="puff" d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
        s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z" fill="#fff"/>
        <circle id="dot"  cx="0" cy="0" r="5" fill="#fff"/>   
      </defs>
      
        <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="130"/>
        <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="80"/>
      
      <g id="mainContainer" >
        <g id="car">
    <path id="carRot" fill="#FFF"  d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
      C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
      C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
      l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"/>      
        </g>
      </g>
    </svg>
  </div>

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->


  <!-- theme-switcher start -->
  <div class="theme-switcher">
    <div class="theme-switcher__icon">
      <i class="las la-cog"></i>
    </div>
  </div>
  <!-- theme-switcher end -->
  <!-- page-wrapper start -->
  <div class="page-wrapper">
      <!-- login modal -->
  <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <div class="account-form-wrapper">
              <form>
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="email" name="login_name" id="login_name" placeholder="Ingrese Email">
                </div>
                <div class="form-group">
                  <label>password <sup>*</sup></label>
                  <input type="password" name="login_pass" id="login_pass" placeholder="Ingrese password">
                </div>
                <div class="d-flex flex-wrap justify-content-between mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-1" id="id-1" checked>
                    <label for="id-1">Recordar Password</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link">Olvido Password?</a>
                </div>
                <div class="form-group text-center mt-5">
                  <a href="indexi.html" class="cmn-btn">Iniciar</a>
                </div>
              </form>
              <p class="text-center mt-4">Tienes Cuenta? <a href="#0" data-bs-toggle="modal" data-bs-target="#signupModal"> Registrar</a></p>
              <div class="divider">
                <span>or</span>
              </div>
              <ul class="social-link-list">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up modal -->
  <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <div class="account-form-wrapper">
              <form>
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="email" name="signup_name" id="signup_name" placeholder="Ingresar Email">
                </div>
                <div class="form-group">
                  <label>password <sup>*</sup></label>
                  <input type="password" name="signup_pass" id="signup_pass" placeholder="Ingresar password">
                </div>
                <div class="d-flex flex-wrap mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-2" id="id-2" checked>
                    <label for="id-2">Acepto</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link ml-1">Términos y Condiciones</a>
                </div>
                <div class="form-group text-center mt-5">
                  <button class="cmn-btn">Crear</button>
                </div>
              </form>
              <p class="text-center mt-4"> Tienes Cuenta? <a href="#0" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar</a></p>
              <div class="divider">
                <span>or</span>
              </div>
              <ul class="social-link-list">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- header-section start  -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <a href="tel:65655655"><i class="las la-phone-volume"></i> Atención al Cliente</a>
              <div class="language">
                <i class="las la-globe-europe"></i>
                <select>
                  <option>Español</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="right">
              <a href="#0" class="user__btn" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="las la-user"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ms-auto">
              <li class="menu_has_children">
                <a href="#0">Salas</a>
                <ul class="sub-menu">
                  <li><a href="index-two.html">Sala Plata</a></li>
                  <li><a href="index-three.html">Sala Dorada</a></li>
                </ul>
              </li>
              <li class="menu_has_children">
                <a href="#0">Nosotros</a>
              </li>
              <li><a href="contact.html">Resultados</a></li>
              <li><a href="contact.html">Preguntas</a></li>
            </ul>
            <div class="nav-right">
              <!--a href="contest.html" class="cmn-btn style--three btn--sm"><img src="assets/images/icon/btn/tag.png" alt="icon" class="me-2"> Comprar</a-->
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->
    <!-- Salas -->
    <section class="position-relative pt-120 pb-120"></section>
      <!-- Fin Salas-->
    <!-- Sala Plata  -->
    <section class="latest-winner-section position-relative pt-120 pb-120">
      <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
      <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div>
      <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
      <div class="container">
      <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
              <div class="section-header text-center">
                <span class="section-sub-title"></span>
                <h2 class="section-title">Bingo Rifa Online</h2>
                <p>Un nuevo estilo de Jugar y Ganar Grandes Premios.</p>
              </div>
            </div>
          </div><!-- row end -->
        <div class="row justify-content-center">
          <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="section-header text-center">
              <span class="section-sub-title">Juega y Gana! Selecciona uno o varios números de tu sala</span>
              <h2 class="section-title">Sala Plata</h2>
              <p>El costo de los números por sala van de 1 Sol hasta 3 Soles. Selecciona el tuyo!</p>
            </div>
          </div>
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="row mb-none-30">
              <div class="col-xl-4 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                  <div class="contest-card__thumbpl">
                    <img src="assets/images/cartones/bingo1.jpeg" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>Comprar</span>
                      <h4 class="number">Ahora</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">Sala I</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
                    </div>
                  </div>
                  <div class="contest-card__footer">
                    <ul class="contest-card__meta">
                      <li>
                        <span>Cerrado</span>
                      </li>
                      <li>
                        <i class="las la-ticket-alt"></i>
                        <span>30</span>
                        <p>Tickets Disponibles</p>
                      </li>
                    </ul>
                  </div>
                </div><!-- contest-card end -->
              </div>
              <div class="col-xl-4 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                  <div class="contest-card__thumbpl">
                    <img src="assets/images/cartones/bingo2.jpeg" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>Comprar</span>
                      <h4 class="number">Ahora</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">Sala II</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
                    </div>
                  </div>
                  <div class="contest-card__footer">
                    <ul class="contest-card__meta">
                      <li>
                        <span>Cerrado</span>
                      </li>
                      <li>
                        <i class="las la-ticket-alt"></i>
                        <span>30</span>
                        <p>Tickets Disponibles</p>
                      </li>
                    </ul>
                  </div>
                </div><!-- contest-card end -->
              </div>
              <div class="col-xl-4 col-md-6 mb-30">
                <div class="contest-card">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                  <div class="contest-card__thumbpl">
                    <img src="assets/images/cartones/bingo3.webp" alt="image">
                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                    <div class="contest-num">
                      <span>Comprar</span>
                      <h4 class="number">Ahora</h4>
                    </div>
                  </div>
                  <div class="contest-card__content">
                    <div class="left">
                      <h5 class="contest-card__name">Sala III</h5>
                    </div>
                    <div class="right">
                      <span class="contest-card__price">$3.99</span>
                    </div>
                  </div>
                  <div class="contest-card__footer">
                    <ul class="contest-card__meta">
                      <li>
                        <span>Cerrado</span>
                      </li>
                      <li>
                        <i class="las la-ticket-alt"></i>
                        <span>30</span>
                        <p>Tickets Disponibles</p>
                      </li>
                    </ul>
                  </div>
                </div><!-- contest-card end -->
              </div>
            </div>
          </div>
        </div><!-- row end -->
      </div>
    </section>
    <!-- Fin Sala Plata  -->
        <!-- Sala Dorada  -->
    <section class="latest-winner-section position-relative pt-120 pb-120">
          <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
          <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div>
          <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="section-header text-center">
                  <span class="section-sub-title">Juega y Gana! Selecciona uno o varios números de tu sala</span>
                  <h2 class="section-title">Sala Dorada</h2>
                  <p>El costo de los números por sala van de 10 Sol hasta 30 Soles. Selecciona el tuyo!</p>
                </div>
              </div>
              <div class="row mb-none-30">
                <div class="col-xl-4 col-md-6 mb-30">
                  <div class="contest-card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                    <div class="contest-card__thumb">
                      <img src="assets/images/cartones/bingo1.jpeg" alt="image">
                      <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                      <div class="contest-num">
                        <span>Comprar</span>
                        <h4 class="number">Ahora</h4>
                      </div>
                    </div>
                    <div class="contest-card__content">
                      <div class="left">
                        <h5 class="contest-card__name">Sala I</h5>
                      </div>
                      <div class="right">
                        <span class="contest-card__price">$3.99</span>
                      </div>
                    </div>
                    <div class="contest-card__footer">
                      <ul class="contest-card__meta">
                        <li>
                          <span>Cerrado</span>
                        </li>
                        <li>
                          <i class="las la-ticket-alt"></i>
                          <span>30</span>
                          <p>Tickets</p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- contest-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                  <div class="contest-card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                    <div class="contest-card__thumb">
                      <img src="assets/images/cartones/bingo2.jpeg" alt="image">
                      <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                      <div class="contest-num">
                        <span>Comprar</span>
                        <h4 class="number">Ahora</h4>
                      </div>
                    </div>
                    <div class="contest-card__content">
                      <div class="left">
                        <h5 class="contest-card__name">Sala II</h5>
                      </div>
                      <div class="right">
                        <span class="contest-card__price">$3.99</span>
                      </div>
                    </div>
                    <div class="contest-card__footer">
                      <ul class="contest-card__meta">
                        <li>
                          <span>Cerrado</span>
                        </li>
                        <li>
                          <i class="las la-ticket-alt"></i>
                          <span>30</span>
                          <p>Tickets </p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- contest-card end -->
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                  <div class="contest-card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="item-link"></a>
                    <div class="contest-card__thumb">
                      <img src="assets/images/cartones/bingo3.webp" alt="image">
                      <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                      <div class="contest-num">
                        <span>Comprar</span>
                        <h4 class="number">Ahora</h4>
                      </div>
                    </div>
                    <div class="contest-card__content">
                      <div class="left">
                        <h5 class="contest-card__name">Sala III</h5>
                      </div>
                      <div class="right">
                        <span class="contest-card__price">$3.99</span>
                      </div>
                    </div>
                    <div class="contest-card__footer">
                      <ul class="contest-card__meta">
                        <li>
                          <span>Cerrado</span>
                        </li>
                        <li>
                          <i class="las la-ticket-alt"></i>
                          <span>30</span>
                          <p>Tickets </p>
                        </li>
                      </ul>
                    </div>
                  </div><!-- contest-card end -->
                </div>
              </div>
            </div><!-- row end -->
          </div>
    </section>
        <!-- Fin Sala Dorada  -->
     <!-- Quienes Somos? -->
     <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden">
      <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
        <img src="assets/images/elements/play-el.png" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-sm-start text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="section-header">
              <span class="section-sub-title">¿Quienes Somos?</span>
              <h2 class="section-title">Bingo Online</h2>
              <p>Una nuevo estilo de ganar, jugando bingo al estilo de rifas online! </p>
            </div>
          </div>
        </div>
        <div class="row mb-none-30 justify-content-xl-start justify-content-center">
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-1.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/1.png" alt="image-icon">
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Pioneros</h3>
                <p>En la nueva modalidad de jugar bingo y rifa en una misma plataforma.</p>
              </div>
            </div><!-- play-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-2.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/2.png" alt="image-icon">
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Experiencia</h3>
                <p>Tenemos XX años en el mercado de sorteos online. </p>
              </div>
            </div><!-- play-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="play-card bg_img" data-background="assets/images/elements/card-bg-3.jpg">
              <div class="play-card__icon">
                <img src="assets/images/icon/play/3.png" alt="image-icon">
              </div>
              <div class="play-card__content">
                <h3 class="play-card__title">Seguridad</h3>
                <p>Garantizamos la entrega de premio en los tiempos pautados.</p>
              </div>
            </div><!-- play-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de Quines Somos? -->

    <!-- Preguntas Frecuentes  -->
    <section class="pb-120">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="section-header text-center">
                  <span class="section-sub-title">Nos preocupamos porque estes informado.</span>
                  <h2 class="section-title">Preguntas Frecuentes</h2>
                  <p>Si tienes dudas, puedes consultar nuestras preguntas frecuentes.</p>
                </div>
              </div>
            </div>
            <div class="row mb-none-30">
              <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="support-card">
                  <div class="support-card__thumb">
                    <img src="assets/images/icon/support/1.png" alt="image">
                  </div>
                  <div class="support-card__content">
                    <h3 class="support-card__title" style="color:#000">Cuando se realiza el sorteo?</h3>
                    <p style="color: #000">Una vez completada la sala (30 números), se inicia con el sorteo.</p>
                  </div>
                </div><!-- support-card end -->
              </div>
              <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="support-card">
                  <div class="support-card__thumb">
                    <img src="assets/images/icon/support/2.png" alt="image">
                  </div>
                  <div class="support-card__content">
                    <h3 class="support-card__title" style="color: #000">Como ganar?</h3>
                    <p style="color: #000">El número ganador es aquel que se repita 5 veces consecutivas. </p>
                  </div>
                </div><!-- support-card end -->
              </div>
            </div>
            <div class="row mb-none-30 mt-30">
              <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="support-card">
                  <div class="support-card__thumb">
                    <img src="assets/images/icon/support/1.png" alt="image">
                  </div>
                  <div class="support-card__content">
                    <h3 class="support-card__title" style="color:#000">Como recargar mi cuenta?</h3>
                    <p style="color: #000">A traves, de nuestras pasarelas de pago y notificando en el módulo de recargar.</p>
                  </div>
                </div><!-- support-card end -->
              </div>
              <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="support-card">
                  <div class="support-card__thumb">
                    <img src="assets/images/icon/support/2.png" alt="image">
                  </div>
                  <div class="support-card__content">
                    <h3 class="support-card__title" style="color: #000">Como saber los resultados?</h3>
                    <p style="color: #000">En caso, de no estar presente a la hora del sorteo. Se puede buscar en el link de resultados. </p>
                  </div>
                </div><!-- support-card end -->
              </div>
            </div>
          </div>
    </section>
    <!-- Fin de Preguntas Frecuentes -->
    
      <!-- footer section start  -->
  <footer class="footer-section">
    <div class="bg-shape--top"><!--img src="assets/images/elements/round-shape-2.png" alt="image"--></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
          <div class="subscribe-area">
            <div class="left">
              <span class="subtitle" style="color:#000">Subscribirse a Rifa</span>
              <h3 class="title" style="color:#000">Beneficios Exclusivos</h3>
            </div>
            <div class="right">
              <form class="subscribe-form">
                <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Ingresar Email">
                <button type="submit">Subscribirse</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-120">
      <div class="row pb-5 align-items-center">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8">
          <ul class="short-links justify-content-lg-end justify-content-center">
            <li><a href="#0">Nosotros</a></li>
            <li><a href="#0">Preguntas</a></li>
            <li><a href="#0">Contacto</a></li>
            <li><a href="#0">Términos y Condiciones</a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row py-5 align-items-center">
        <div class="col-lg-6">
          <p class="copy-right-text text-lg-start text-center mb-lg-0 mb-3" style="color:#fff">Copyright © 2024.Derechos Reservados <a href="index.html">Rifa</a></p>
        </div>
        <div class="col-lg-6">
          <ul class="social-links justify-content-lg-end justify-content-center">
            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
  </div><!-- page-wrapper end -->
  <!-- page-wrapper end -->
  <!-- jQuery library -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- custom select js -->
  <script src="assets/js/vendor/jquery.nice-select.min.js"></script> 
  <!-- lightcase js -->
  <script src="assets/js/vendor/lightcase.js"></script>
  <!-- wow js -->
  <script src="assets/js/vendor/wow.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <!-- countdown js -->
  <script src="assets/js/vendor/jquery.countdown.js"></script>
  <!-- jquery ui js -->
  <script src="assets/js/vendor/jquery-ui.min.js"></script>
  <!-- datepicker js -->
  <script src="assets/js/vendor/datepicker.min.js"></script>
  <script src="assets/js/vendor/datepicker.en.js"></script>
  <!-- preloader -->
  <script src='assets/js/vendor/TweenMax.min.js'></script>
  <script src='assets/js/vendor/MorphSVGPlugin.min.js'></script>
  <script src="assets/js/preloader.js"></script>
  <!-- contact js -->
  <script src="assets/js/contact.js"></script>
  <!-- custom js -->
  <script src="assets/js/app.js"></script>
  </body>
</html>