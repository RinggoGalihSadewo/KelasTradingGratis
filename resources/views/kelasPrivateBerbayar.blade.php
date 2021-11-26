@extends('layout/layout')

@section('title','Kelas Private Berbayar')

@section('container')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex align-items-center">
        <a href="{{url('/')}}"><img src="/img/logo.png" class="Logo my-3" alt="Kursus Trading Gratis"></a>
        <h1 style="margin-left: 10px"><a href="{{url('/')}}">Kelas Trading Gratis</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}" style="font-size: 22px;">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <section id="contact" class="contact">
  <div class="container" style="margin-top: 8%">

  <div class="row">

    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="contact-about">
        <h3>Kelas Trading Gratis</h3>
        <div style="color: black; font-size: 18px;">
        <p style="color: black; font-size: 18px;">Kelas Trading Gratis menyediakan fasilitas private berbayar selama 2 minggu full hanya dengan 1.5 juta dan langsung founder atau mentor utama yang memberi materi.</p>
        <p style="color: black; font-size: 18px;">Fasilitas yang akan diberikan selama private 2 minggu adalah : </p>
        <ul style="color: black; font-size: 18px;">
          <li>
            Kelas dimulai dari jam 20.00 WIB - paham via Zoom.
          </li>
          <li>
            Teknik dan strategi jitu dengan short time open dan long time open.
          </li>
          <li>
            Mendapatkan PDF teknik trading minimal 5.
          </li>
          <li>
            Free konsultasi selama 1 bulan mengenai psikologis trading dan money management trading hingga bisa profit konsisten.
          </li>
        </ul>
        </div>
        <br>
        
        <h3>Metode Pembayaran</h3> 
        <div style="color: black; font-size: 18px;">
        <p style="color: black; font-size: 24px;">Bank Transfer : BNI/0974818235</p>
        <p style="color: black; font-size: 20px">Jika sudah melakukan pembayaran silahkan konfirmasi ke Whatsapp di bawah ini: </p>
        <div style="margin-top: 6%;">
        <a href="https://api.whatsapp.com/send?phone=+6281274421371&text=Halo, saya%20mau%20join%20privatenya%20ini%20adalah%20bukti%20screenshot%20pembayaran%20saya" target="_blank">
          <img src="/img/clients/btnWa.png" class="img-fluid d-flex justify-content-center mt-0" alt="" data-aos="zoom-in" data-aos-delay="200">
        </a> 
        </div> 
        </div>
    </div>
  </div>
  
  <div class="col-lg-6 mt-4">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button> 
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/slides/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/slides/slide7.jpg" class="d-block w-100" alt="...">
        </div>7
        <div class="carousel-item">
          <img src="/img/slides/slide8.jpg" class="d-block w-100" alt="...">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>

  </div>

  </div>
  </section><!-- End Contact Section -->

@endsection