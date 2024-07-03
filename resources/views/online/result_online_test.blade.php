@extends('layout.user_master')

@section('title', 'Online Test Result')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/result_online_test.css')}}">
@endpush

@section('content')


    <div class="pagetitle">
      <h1>Online Test Result</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('test.index')}}">Online Test</a></li>
          <li class="breadcrumb-item active">Result</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <h3 class="title fs-4 fw-bold">English Online Test</h3>
            <div class="instruction-content d-flex mt-4 ">
                <div class="col-lg-6 score-content text-center">
                    <h4>Your Score is:</h4>
                    <div class="row d-flex justify-content-center mt-100">

                      <div class="container mt-5">
                        <div class="chart-container">
                            <canvas id="myDoughnutChart"></canvas>
                            <div id="chartCenterText" class="chart-center-text"></div>
                        </div>
                      </div>

                      <p class="lead">Correct Answer <br> 12/15</p>
                      <p class="mb-4">Next Up: English Online Test 2</p>
                      <div class="button-group">
                        <a href="{{route('test.index')}}" class="btn ">Done</a>
                        <a href="{{route('test.select')}}" class="btn ">Continue</a>
                      </div>
                    </div>

                </div>

                <div class="col-lg-6 download-content">
                    <h4>Your Certificate:</h4>
                    <div class="download-body ">
                        <div class="certificate-poster">
                            <img src="{{asset('assets/img/certificate.jpg')}}" alt="">
                        </div>

                        <div class="certificate-content">
                            <h1>CERTIFICATE - English Online Test 2024 March </h1>
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
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="answer-content">
                    <h4>Answer Key:</h4>
                    <div class="row ">
                      <div class="col-md-4 text-left">
                        <div class="answer-key d-flex">
                          <div class="list-group-item border-0 d-flex">
                            <span>1. </span><h6 class="text-primary">A</h6> <h6> : </h6> <h6 class="user-answer">A</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>2. </span><h6 class="text-primary">B</h6> <h6> : </h6> <h6 class="user-answer">B</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>3. </span><h6 class="text-primary">C</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>4. </span><h6 class="text-primary">A</h6> <h6> : </h6> <h6 class="user-answer">A</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>5. </span><h6 class="text-primary">B</h6> <h6> : </h6> <h6 class="user-answer">B</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>6. </span><h6 class="text-primary">C</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>7. </span><h6 class="text-primary">A</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="incorrect">✘</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>8. </span><h6 class="text-primary">B</h6> <h6> : </h6> <h6 class="user-answer">B</h6> <i class="correct">✔</i>
                          </div>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="answer-key d-flex">
                          <div class="list-group-item border-0 d-flex">
                            <span>9. </span><h6 class="text-primary">C</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>10. </span><h6 class="text-primary">A</h6> <h6> : </h6> <h6 class="user-answer">A</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>11. </span><h6 class="text-primary">B</h6> <h6> : </h6> <h6 class="user-answer">B</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>12. </span><h6 class="text-primary">C</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="correct">✔</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>13. </span><h6 class="text-primary">A</h6> <h6> : </h6> <h6 class="user-answer">B</h6> <i class="incorrect">✘</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>14. </span><h6 class="text-primary">B</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="incorrect">✘</i>
                          </div>
                          <div class="list-group-item border-0 d-flex">
                            <span>15. </span><h6 class="text-primary">C</h6> <h6> : </h6> <h6 class="user-answer">C</h6> <i class="correct">✔</i>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
      </div>
    </section>


@endsection

@push('scripts')
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/result_chart.js')}}"></script>
@endpush
