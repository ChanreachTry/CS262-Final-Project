@extends('layout.user_master')

@section('title', 'Material')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/main_material.css')}}">
@endpush

@section('content')

    <div class="pagetitle">
      <h1>Material</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Material</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-10 ">

          <div class="material-container">
            <div class="search-bar">
              <input type="text"  placeholder="Search...">
              <button class="btn btn-purple">Recently Added</button>
              <div class="dropdown">
                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Most Taken
                </button>
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="#">Beginner</a>
                   <a class="dropdown-item" href="#">Intermediate</a>
                   <a class="dropdown-item" href="#">Advanced</a>
                </div>
              </div>

              <div class="dropdown">
                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Year
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">2024</a>
                  <a class="dropdown-item" href="#">2025</a>
                  <a class="dropdown-item" href="#">2026</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <section class="section">
      <div class="row">
        <div class=" col-lg-12 ">

          <div class="content-container">
            <div class="row">
            <h1>Beginner</h1>

              <div class="side-scroll col-lg-4 d-flex">

                <div class="material-body">
                  <a href="{{route('material.select')}}">
                    <div class="material-img">
                      <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Beginner 2024 January
                    </div>
                  </a>
                </div>

                <div class="material-body">
                  <a href="{{route('material.select')}}">
                    <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Beginner 2024 January
                    </div>
                  </a>
                </div>

                <div class="material-body">
                    <a href="{{route('material.select')}}">
                      <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                      </div>
                      <div class="material-text">
                          English Material <br>
                          Beginner 2024 January
                      </div>
                    </a>
                  </div>

                  <div class="material-body">
                    <a href="{{route('material.select')}}">
                      <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                      </div>
                      <div class="material-text">
                          English Material <br>
                          Beginner 2024 January
                      </div>
                    </a>
                  </div>

                  <div class="material-body">
                    <a href="{{route('material.select')}}">
                      <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                      </div>
                      <div class="material-text">
                          English Material <br>
                          Beginner 2024 January
                      </div>
                    </a>
                  </div>

                  <div class="material-body">
                    <a href="{{route('material.select')}}">
                      <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                      </div>
                      <div class="material-text">
                          English Material <br>
                          Beginner 2024 January
                      </div>
                    </a>
                  </div>

                  <div class="material-body">
                    <a href="{{route('material.select')}}">
                      <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                      </div>
                      <div class="material-text">
                          English Material <br>
                          Beginner 2024 January
                      </div>
                    </a>
                  </div>


              </div>
            </div>
          </div>


          <div class="content-container">
            <div class="row">
            <h1>Intermediate</h1>
              <div class="side-scroll col-lg-4 d-flex">

                <div class="material-body">
                <a href="{{route('material.select')}}">
                    <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Intermediate 2024 January
                    </div>
                  </a>
                </div>

                <div class="material-body">
                  <a href="{{route('material.select')}}">
                    <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Intermediate 2024 January
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>


          <div class="content-container">
            <div class="row">
            <h1>Advance</h1>
              <div class="side-scroll col-lg-4 d-flex">

                <div class="material-body">
                <a href="{{route('material.select')}}">
                    <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Advance 2024 January
                    </div>
                  </a>
                </div>

                <div class="material-body">
                  <a href="{{route('material.select')}}">
                    <div class="material-img">
                        <img src="{{asset('assets/img/test_poster.png')}}" alt="">
                    </div>
                    <div class="material-text">
                        English Material <br>
                        Advance 2024 January
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/materials.js') }}"></script>
@endpush
