@extends('layout.user_master')

@section('title', 'Select Material')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/select_material.css')}}">
@endpush

@section('content')

    <div class="pagetitle">
      <h1>Material</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('material.index')}}">Material</a></li>
          <li class="breadcrumb-item active">Beginner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12 d-flex">
            <img class="poster" src="{{asset('assets/img/test_poster.png')}}">
            <div class="material-content">
                <h1>English Materials</h1>
                <h2>Beginner 2024 January</h2>
                <div class="small-text">
                    <div class="line d-flex">
                        <i class="bi bi-calendar-event"></i><p>Published on: April 14, 2024</p>
                    </div>
                    <div class="line d-flex">
                        <i class="bi bi-lightning-charge-fill"></i><p>Material taken: 123,456</p>
                    </div>


                </div>
            </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
        <div class="col-lg-12 card">

                <h2>English Material 1</h2>
            <div class="card-body d-flex">
                <div class="performance-card border-primary">
                    <i class="bi bi-book"></i>
                    <h5>Vocabulary</h5>
                    <p>0%</p>
                    <a href="{{route('material.form')}}" class="btn btn-primary">Take Material</a>
                </div>
                <div class="performance-card border-success">
                    <i class="bi bi-journal-check"></i>
                    <h5>Grammar</h5>
                    <p>0%</p>
                    <a href="{{route('material.form')}}" class="btn btn-success">Take Material</a>
                </div>
                <div class="performance-card border-danger ">
                    <i class="bi bi-headphones"></i>
                    <h5>Listening</h5>
                    <p>0%</p>
                    <a href="{{route('material.form')}}" class="btn btn-danger">Take Material</a>
                </div>
            </div>

            <div class="container ">
                <div class="progress-container">
                    <span class="font-weight-bold" style="color: #4b0082;">Full Material</span>
                    <div class="progress" style="width: 50%; height: 25px; border-radius: 15px; margin: 0 10px; ">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 80%; color: white; background-color: #9B5BDC;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    <a class="start-button" href="{{route('material.form')}}">
                        <i class="bi bi-lightning-fill"></i>
                         Start
                    </a>
                </div>
            </div>

        </div>
      </div>
    </section>


@endsection

@push('scripts')
    <script src="{{asset('assets/js/main.js')}}"></script>
@endpush
