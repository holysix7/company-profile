<body>
  <!-- Page Preloder -->
  <div id="preloder">
      <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  @include('layouts.app-header')
  <!-- Header End -->

    <!-- Services Section Begin -->
    {{-- <section class="services spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="services__title">
                      <div class="section-title">
                          <span>Our services</span>
                          <h2>What We do?</h2>
                      </div>
                      <p>If you hire a videographer of our team you will get a video professional to make a custom
                          video for your business and, once the project is over.</p>
                      <a href="#" class="primary-btn">View all services</a>
                  </div>
              </div>
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="services__item">
                              <div class="services__item__icon">
                                  <img src="{{ asset('template/img/icons/si-1.png') }}" alt="">
                              </div>
                              <h4>Motion graphics</h4>
                              <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                  post production services can put the finishing touches.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="services__item">
                              <div class="services__item__icon">
                                  <img src="{{ asset('template/img/icons/si-2.png') }}" alt="">
                              </div>
                              <h4>Scriptwriting and editing</h4>
                              <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                  post production services can put the finishing touches.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="services__item">
                              <div class="services__item__icon">
                                  <img src="{{ asset('template/img/icons/si-3.png') }}" alt="">
                              </div>
                              <h4>Video distribution</h4>
                              <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                  post production services can put the finishing touches.</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="services__item">
                              <div class="services__item__icon">
                                  <img src="{{ asset('template/img/icons/si-4.png') }}" alt="">
                              </div>
                              <h4>Video hosting</h4>
                              <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                  post production services can put the finishing touches.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section> --}}
    <!-- Services Section End -->

  <div class="tab-content" id="custom-tabs-three-tabContent">
    <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
      @include('layouts.contents.app-home')
    </div>
    <div class="tab-pane fade" id="custom-tabs-three-about" role="tabpanel" aria-labelledby="custom-tabs-three-about-tab">
      @include('layouts.contents.app-about')
    </div>
    <div class="tab-pane fade" id="custom-tabs-three-portfolio" role="tabpanel" aria-labelledby="custom-tabs-three-portfolio-tab">
      @include('layouts.contents.app-portfolio')
    </div>
    <div class="tab-pane fade" id="custom-tabs-three-services" role="tabpanel" aria-labelledby="custom-tabs-three-services-tab">
      @include('layouts.contents.app-services')
    </div>
    <div class="tab-pane fade" id="custom-tabs-three-contact" role="tabpanel" aria-labelledby="custom-tabs-three-contact-tab">
      @include('layouts.contents.app-contact')
    </div>
  </div>
  <!-- Footer Section Begin -->
  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="row">
          <div class="col-md-6">
            <div class="footer__top__logo">
              <a href="#"><img src="{{ asset('template/img/logo.png') }}" alt=""></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer__top__social d-flex justify-content-end">
              {{-- <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a> --}}
              <a href="https://www.instagram.com/bosmatkabaret/" class="d-flex justify-content-center align-items-center" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCUBgcTPAocu03boF9Mr8jrQ" class="d-flex justify-content-center align-items-center" target="_blank"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__option">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer__option__item">
              <h5>About us</h5>
              <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service production company specializing.</p>
              <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3">
            <div class="footer__option__item">
              <h5>Who we are</h5>
              <ul>
                <li><a href="#">Team</a></li>
                <li><a href="#">Carrers</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Locations</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3">
            <div class="footer__option__item">
              <h5>Our work</h5>
              <ul>
                <li><a href="#">Feature</a></li>
                <li><a href="#">Latest</a></li>
                <li><a href="#">Browse Archive</a></li>
                <li><a href="#">Video for web</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="footer__option__item">
              <h5>Newsletter</h5>
              <p>Videoprah is an award-winning, full-service production company specializing.</p>
              <form action="#">
                <input type="text" placeholder="Email">
                <button type="submit"><i class="fa fa-send"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="footer__copyright__text">&copy; Copyright Bosmat Cabaret. All rights reserved 
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('template/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template/js/main.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.tab-item').on('click', function(){
        $('.tab-item').removeClass('active')
        var current = $('.active')
        current[0].className = current[0].className.replace('active', '')
        $(this)[0].className += ' active'
      })
    })
  </script>
</body>