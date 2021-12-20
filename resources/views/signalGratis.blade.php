@extends('layout/layout')

@section('title', 'Signal Gratis')

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

  <section>
    <div class="container">
        <div class="row signal">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">  
                <h2 class="fw-bold text-dark">SIGNAL GRATIS</h2>
                <p style="text-align: justify;">Kelas Trading Gratis menyediakan fasilitas signal gratis dengan syarat harus sudah daftar akun Quotex dibawah ini :</p>
                <div style="margin-top: 7%;">     
                <a href="http://quotex-brokeridn.com" target="_blank">
                <h4 class="text-dark text-center">Klik tombol dibawah ini</h4>
                <img src="/img/clients/btnQuotex.png" class="img-fluid d-flex justify-content-center mt-3 animated" alt="" width="100%">
                </a> 
                </div>
                <div style="margin-top: 5%;" class="text-dark">
                <p style="text-align: justify;">Jika kalian sudah mengklik tombol diatas dan jika kalian sudah mempunyai akun Quotex silahkan hapus terlebih dahulu atau diblokir lalu klik tombol diatas untuk mendaftarkan akun Quotex yang baru. Jika sudah mendaftarkan akun Quotex, silahkan deposit dengan minimal Rp.200.000</p>
                <p>Dan kirim screenshot id Quotex dan bukti deposit kalian, lalu konfirmasi ke whatsapp admin dibawah ini :</p>

                <div style="margin-top: 6%;">
                    <a href="https://api.whatsapp.com/send?phone=+6281274421371&text=Halo, saya%20sudah%20mendaftarkan%20akun%20Quotex%20dan%20ini%20bukti%20screenshot%20id%20dan%20jumlah%20deposit%20saya" target="_blank">
                    <img src="/img/clients/btnWa.png" class="img-fluid d-flex justify-content-center mt-0" alt="">
                    </a> 
                </div> 
            </div> 
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <img src="/img/signal.png" alt="" height="auto" width="100%" class="mt-2">
            </div>
        </div>
    </div>
  </section>

@endsection