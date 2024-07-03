@extends('layout.user_master')

@section('title', 'User Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/exam_scheduling.css')}}">
@endpush

@section('content')



    <div class="pagetitle">
      <h1>Exam Scheduling</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Scheduling</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <h3 class="title fs-4 text-center fw-bold">Exam Scheduling</h3>
            <p class="text text-center mb-4">Complete the online exam scheduling form accurately.</p>
            <div class="scheduling-container d-flex justify-content-center">

                <form >
                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="col-md-6 form-group">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="col-md-6 form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Address">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="col-md-6 form-group ">
                                <label for="difficult" class="form-label">Difficulty</label>
                                <select class="form-select" id="difficult">
                                  <option selected>None</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="publishedDate" class="form-label">Published Date</label>
                                <input type="date" class="form-control" id="publishedDate" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="col-md-6 form-group ">
                                <label for="difficult" class="form-label">Test Selection</label>
                                <select class="form-select" id="difficult">
                                  <option selected>None</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="publishedDate" class="form-label">Exam Date</label>
                                <input type="datetime-local" class="form-control" id="publishedDate" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>



                </form>
            </div>
        </div>
      </div>
    </section>



@endsection

@push('scripts')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endpush

