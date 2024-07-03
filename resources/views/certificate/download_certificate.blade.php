@extends('layout.user_master')

@section('title', 'Cerificate Download')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/download_certificate.css')}}">
@endpush

@section('content')


    <div class="pagetitle">
      <h1>Certificate</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('certificate.index')}}">Certificate</a></li>
          <li class="breadcrumb-item active"> Download</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12 d-flex">

            <div class="certificate-poster">
                <img src="{{asset('assets/img/certificate.jpg')}}" alt="">
            </div>

            <div class="certificate-content">
                <h1>CERTIFICATE</h1>
                <h1>English Online Test 2024 March </h1>
                <h4>Beginner (Test 1)</h4>

                <p>
                  Result: 90%<br>
                  Grade: Excellent<br>
                  Test Taken Date: April 14, 2024
                </p>

                <button class="btn btn-purple"><i class="bi bi-download"></i>Download</button>
            </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <h1 class="other-title">Other Achievement</h1>
            <div class="other-achievement d-flex">
                <div class="small-poster">
                  <div class="poster-img">
                    <img src="{{asset('assets/img/certificate.jpg')}}" alt="">

                  </div>
                  <div class="poster-content">
                    <h1>CERTIFICATE</h1>
                    <h1>English Online Test 2024 March</h1>
                    <h4>Beginner (Test 2)</h4>

                    <p>Result: 90% Grade: Excellent Test Taken Date: April 14, 2024</p>
                  </div>
                </div>

                <div class="small-poster">
                  <div class="poster-img">
                    <img src="{{asset('assets/img/certificate.jpg')}}" alt="">

                  </div>
                  <div class="poster-content">
                    <h1>CERTIFICATE</h1>
                    <h1>English Online Test 2024 March</h1>
                    <h4>Beginner (Test 2)</h4>

                    <p>Result: 90% Grade: Excellent Test Taken Date: April 14, 2024</p>
                  </div>

                </div>

                <div class="small-poster">
                  <div class="poster-img">
                    <img src="{{asset('assets/img/certificate.jpg')}}" alt="">

                  </div>
                  <div class="poster-content">
                    <h1>CERTIFICATE</h1>
                    <h1>English Online Test 2024 March</h1>
                    <h4>Beginner (Test 2)</h4>

                    <p>Result: 90% Grade: Excellent Test Taken Date: April 14, 2024</p>
                  </div>

                </div>
            </div>
        </div>
      </div>
    </section>


@endsection

@push('scripts')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endpush
