@extends('layout/layout')

@section('title', 'Tour Trading')

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

  </section>

@endsection