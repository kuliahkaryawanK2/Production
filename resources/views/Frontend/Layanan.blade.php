@extends('Frontend.layouts.app')
@section('content')

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Layanan Kami</h6>
                <h2>Solusi dari <span>Semua Masalah </span><em>Marketing</em> Anda</h2>
                <p>Jasa Marketing merupakan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi cupiditate voluptatum voluptas ipsa nulla eum, in porro. Porro, odio cumque vitae maiores asperiores perspiciatis iste ipsam qui doloribus! Placeat, impedit. <a rel="nofollow" href="" target="_parent">Jasa Marketing</a>.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="images/banner-right-image.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="images/services-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
            <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not permitted to redistribute the template ZIP file on any CSS template collection websites. Please contact us for more information. Thank you for your kind cooperation.</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="first-bar progress-skill-bar">
                <h4>Website Analysis</h4>
                <span>84%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>SEO Reports</h4>
                <span>88%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>Page Optimizations</h4>
                <span>94%</span>
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="c-section">
    <h2 class="c-section__title"><span>Our Services</span></h2>
    <ul class="c-services">
        <li class="c-services__item">
        <h3>Responsive Web Design</h3>
        <p>We leverage the concept of mobile-first design. Through our work, we focus on designing an experience that works across different screen sizes.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Auditing</h3>
        <p>If you are unsure of how your app behaves, we can help by doing a detailed UX audit that will highlight most of the issues in your product. From there, we can take it further and fix all issues.</p>
        </li>
        <li class="c-services__item">
        <h3>Front End Development</h3>
        <p>We are Front End masters with a deep focus on HTML, CSS. The result of our work is a responsive, accessible, and performant websites. Either you have the design ready and want us to code it, or you want us to do both design and code, we&rsquo;re happy to do so.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Consultation</h3>
        <p>If you don&rsquo;t know what kind of service to request from us, don&rsquo;t worry. We can help and see what fits your business and your budget.</p>
        </li>
        <li class="c-services__item">
        <h3>Mobile Apps Design</h3>
        <p>To reach more customers and the goals of your business, a mobile application is necessary these days. We will work on the app design from scratch to final tested prototype.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Research</h3>
        <p>It&rsquo;s important to research deeply for the product you want to build. We help in that by defining the user audience, working on user stories, competitive analysis and much more. </p>
        </li>
    </ul>
    </section>

@endsection
