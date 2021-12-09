@extends('layout/layout')

@section('title','Software Trading')

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

  <div class="container software">
      <div class="row">
          <div class="col-lg-6">
              <h2>Software Trading</h2>
              <ul>
                  <li>Keakuratan aplikasi 75%</li>
                  <li>Mendapatkan trik menang dan profit terus</li>
                  <li>Medapatkan informasi pasar bermain trading</li>
                  <li>Open posisi dituntun menggunakan signal dari software</li>
                  <li>Raihlah profit hingga ratusan juta</li>
              </ul>
              <p>Harga software alat bantu trading hanya <b>500 rb</b></p>
          </div>
          <div class="col-lg-6">
              <img src="/img/compress/software.PNG" alt="" class="img-fluid">
          </div>
      </div>

      <div class="metode">
      <h3>Metode Pembayaran</h3> 
      <div style="color: black; font-size: 18px;">
      <p style="color: black; font-size: 24px;">Bank Transfer : BNI/0974818235 <br> Jika sudah melakukan pembayaran silahkan konfirmasi ke Whatsapp di bawah ini: </p>
      <a href="https://api.whatsapp.com/send?phone=+6281274421371&text=Halo, saya%20sudah%20melakukan%20transaksi%20pembelian%20software%20trading%20berikut%20adalah%20screenshot%20pembayaran%20saya" target="_blank">
        <img src="/img/clients/btnWa.png" class="img-fluid d-flex justify-content-center mt-0" alt="" data-aos="zoom-in" data-aos-delay="200">
      </a> 
      </div> 
      </div>
    </div>

@endsection