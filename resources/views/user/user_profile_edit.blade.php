@extends('layout.user_master')

@section('title', 'User Profile')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
@endpush

@section('content')


    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


        <!-- Left side columns -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-card mt-5">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="=profile-header d-flex ">
                                <img src="{{asset('assets/img/main_profile.png')}}" id="profileImage" alt="Profile Picture">
                                <div class="image-button">
                                    <input type="file" class="form-control-file" id="profilePicture" name="profile_picture" accept="image/*" onchange="previewImage(event)" style="display:none;">
                                    <button type="button" class="btn btn-secondary ml-1" onclick="document.getElementById('profilePicture').click();">Change Picture</button>
                                </div>
                            </div>
                            <table class="table table-striped table-borderless mt-3">
                                <tbody>
                                    <tr>
                                        <th scope="row">User ID:</th>
                                        <td>00000001</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Full Name:</th>
                                        <td><input type="text" class="form-control" name="full_name" value="Jimmy James"></td>
                                        <td><i class="bi bi-pencil-square"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Registered Date:</th>
                                        <td>2024-April-14</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Country:</th>
                                        <td><input type="text" class="form-control" name="country" value="Cambodia"></td>
                                        <td><i class="bi bi-pencil-square"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone Number:</th>
                                        <td><input type="text" class="form-control" name="phone_number" value="12 345 678"></td>
                                        <td><i class="bi bi-pencil-square"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email:</th>
                                        <td><input type="email" class="form-control" name="email" value="jimmyjames12@gmail.com"></td>
                                        <td><i class="bi bi-pencil-square"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Password:</th>
                                        <td><input type="password" class="form-control" name="password" value="••••••••"></td>
                                        <td><i class="bi bi-pencil-square"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-left mt-3 button">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


@endsection

@push('scripts')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('profileImage');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
