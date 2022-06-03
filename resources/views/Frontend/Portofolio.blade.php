@extends('Frontend.layouts.app')
@section('content')

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Portofolio Kami</h6>
                <h2>Solusi dari <span>Semua Masalah </span><em>Marketing</em> Anda</h2>
                <p>Berikut beberapa portofolio kami terkait Design Social Media dan Project Website.</p>
              </div>
            </div>
            <!-- <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="/Frontend/images/banner-right-image.png" alt="team meeting">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>SEO Analysis</h4>
                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
              </div>
              <div class="showed-content">
                <img src="/Frontend/images/portfolio-image.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Website Reporting</h4>
                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
              </div>
              <div class="showed-content">
                <img src="/Frontend/images/portfolio-image.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Performance Tests</h4>
                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
              </div>
              <div class="showed-content">
                <img src="/Frontend/images/portfolio-image.png" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>Data Analysis</h4>
                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
              </div>
              <div class="showed-content">
                <img src="/Frontend/images/portfolio-image.png" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div> -->

  <section class="portfolio-section">
      <div class="container">
<!--         <h2 class="title">Portfolio</h2> -->
        <span class="hr-role"></span>
        <div class="portfolio-tab">
          <ul id="filters" class="clearfix">
              <li class="filter active" data-filter=".snippet, .design, .full-project">all</li>
              <li class="filter" data-filter=".snippet">Snippets</li>
              <li class="filter" data-filter=".design">Design</li>
              <li class="filter" data-filter=".full-project">Full Project</li>
          </ul>
        </div>
        <div class="portfolio-grid">
          <div class="portfolio snippet" data-cat="snippet">
            <div class="portfolio-wrapper first">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Snippet</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
          <div class="portfolio design" data-cat="design">
            <div class="portfolio-wrapper second">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Design</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
          <div class="portfolio full-project" data-cat="full-project">
            <div class="portfolio-wrapper third">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Full Project</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
          <div class="portfolio design" data-cat="design">
            <div class="portfolio-wrapper second">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Design</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
          <div class="portfolio full-project" data-cat="full-project">
            <div class="portfolio-wrapper third">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Full Project</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
          <div class="portfolio snippet" data-cat="snippet">
            <div class="portfolio-wrapper first">
              <div class="portfolio-bg"></div>
              <div class="label">
                <div class="label-text">
                  <h4>Project Name</h4>
                  <span class="text-category">Snippet</span>
                  <a href="#" class="template-btn" target="_blank">View</a>
                </div>
                <div class="label-bg"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="/Frontend/images1/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Proyek <em> Terbaru Kami </em> &amp; Studi Kasus <span>untuk Klien</span></h2>
            <span>Our Portfolio</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>First Project</h4></a>
                    <span>Plot Listing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Two</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>
                    <span>Space Dynamic SEO</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Four</h4></a>
                    <span>Website Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Fifth Project</h4></a>
                    <span>Digital Assets</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Sixth Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>7th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>8th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>9th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Ten</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Eleven</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="/Frontend/images1/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>12th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
