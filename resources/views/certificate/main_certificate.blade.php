@extends('layout.user_master')

@section('title', 'Certificate')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/main_certificate.css')}}">
@endpush

@section('content')



    <div class="pagetitle">
      <h1>Certificate</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Certificate</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12 ">

          <div class="certificate-container">
            <div class="search-bar">
              <input type="text"  placeholder="Search...">
              <button class="btn btn-purple">Recently Got</button>
              <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Difficulty
                </button>
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="#">Beginner</a>
                   <a class="dropdown-item" href="#">Intermediate</a>
                   <a class="dropdown-item" href="#">Advanced</a>
                </div>
              </div>

              <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Year
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">2024</a>
                  <a class="dropdown-item" href="#">2025</a>
                  <a class="dropdown-item" href="#">2026</a>
                </div>
              </div>
            </div>

              <table class="table table-striped table-borderless">
                  <tbody>
                      <tr>
                          <td>English Online Test (Beginner) 2024 (March) Test 1</td>
                          <td class="text-right"><a href="{{route('certificate.download')}}" class="btn btn-link">Get Certificate</a></td>
                      </tr>
                      <tr>
                          <td>English Online Test (Beginner) 2024 (March) Test 2</td>
                          <td class="text-right"><a href="{{route('certificate.download')}}" class="btn btn-link">Get Certificate</a></td>
                      </tr>
                      <tr>
                          <td>English Online Test (Beginner) 2024 (April) Test 1</td>
                          <td class="text-right"><a href="{{route('certificate.download')}}" class="btn btn-link">Get Certificate</a></td>
                      </tr>
                      <tr>
                          <td>English Online Test (Beginner) 2024 (April) Test 2</td>
                          <td class="text-right"><a href="{{route('certificate.download')}}" class="btn btn-link">Get Certificate</a></td>
                      </tr>
                  </tbody>
              </table>
          </div>

        </div>
      </div>
    </section>


    @endsection

    @push('scripts')
        <script src="{{ asset('assets/js/main.js') }}"></script>
    @endpush
