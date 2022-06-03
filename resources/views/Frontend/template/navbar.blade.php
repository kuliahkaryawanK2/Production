  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ url('/') }}" class="logo">
              <h4>Edu<span>nesia</span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ url('/') }}" class="active {{ (request()->is('/*')) ?'active' : '' }}">Home</a></li>
              <li class="scroll-to-section"><a href="{{ url('tentang') }}" >About Us</a></li>
              <li class="scroll-to-section"><a href="{{ url('layanan') }}">Services</a></li>
              <li class="scroll-to-section"><a href="{{ url('portofolio') }}">Portfolio</a></li>
              <li class="scroll-to-section"><a href="{{ url('blog') }}">Blog</a></li> 
              <li class="scroll-to-section"><a href="{{ url('kontak') }}">Message Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="{{ url('kontak') }}">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- ***** Header Area End ***** -->