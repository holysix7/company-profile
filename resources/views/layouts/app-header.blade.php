@extends('layouts.app-heading')
<header class="header">
  <div class="container">
    <div class="row">
        <div class="col-lg-2">
          <div class="header__logo">
            <a href="#"><img src="{{ asset('template/img/logo.png') }}" alt=""></a>
          </div>
        </div>
        <div class="col-lg-10">
            <div class="header__nav__option">
                <nav class="header__nav__menu mobile-menu">
                  <ul id="custom-tabs-three-tab" role="tablist">
                    <li class="tab-item active">
                      <a class="nav-link tab-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Home</a>
                    </li>
                    <li class="tab-item">
                      <a class="nav-link tab-link" id="custom-tabs-three-about-tab" data-toggle="pill" href="#custom-tabs-three-about" role="tab" aria-controls="custom-tabs-three-about" aria-selected="false">About</a>
                    </li>
                    <li class="tab-item">
                      <a class="nav-link tab-link" id="custom-tabs-three-portfolio-tab" data-toggle="pill" href="#custom-tabs-three-portfolio" role="tab" aria-controls="custom-tabs-three-portfolio" aria-selected="false">Portfolio</a>
                    </li>
                    <li class="tab-item">
                      <a class="nav-link tab-link" id="custom-tabs-three-services-tab" data-toggle="pill" href="#custom-tabs-three-services" role="tab" aria-controls="custom-tabs-three-services" aria-selected="false">Services</a>
                    </li>
                    <li class="tab-item">
                      <a class="nav-link tab-link" id="custom-tabs-three-contact-tab" data-toggle="pill" href="#custom-tabs-three-contact" role="tab" aria-controls="custom-tabs-three-contact" aria-selected="false">Contact</a>
                    </li>
                    {{-- <li><a href="#">Pages</a>
                      <ul class="dropdown">
                        <li><a href="about.html">About</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Contact</a></li> --}}
                  </ul>
                </nav>
                <div class="header__nav__social">
                    {{-- <a href="#"><i class="fa fa-facebook"></i></a> --}}
                    {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
                    {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
                    <a href="https://www.instagram.com/bosmatkabaret/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCUBgcTPAocu03boF9Mr8jrQ" target="_blank"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div id="mobile-menu-wrap"></div>
  </div>
</header>