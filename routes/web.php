<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/signup', [UserController::class, 'store'])->name('signup');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

    Route::get('/user/profile/edit', [UserController::class, 'edit'])->name('user.edit');
});


Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate.index');

Route::get('/certificate/download', [CertificateController::class, 'download'])->name('certificate.download');

Route::get('/material', [MaterialController::class, 'index'])->name('material.index');

Route::get('/material/select', [MaterialController::class, 'select'])->name('material.select');

Route::get('/material/form', [MaterialController::class, 'form'])->name('material.form');

Route::get('/material/result', [MaterialController::class, 'result'])->name('material.result');

Route::get('/exam-scheduling', [ScheduleController::class, 'index'])->name('schedule.index');

Route::get('/online-test', [TestController::class, 'index'])->name('test.index');

Route::get('/online-test/select', [TestController::class, 'select'])->name('test.select');

Route::get('/online-test/form', [TestController::class, 'form'])->name('test.form');

Route::get('/online-test/result', [TestController::class, 'result'])->name('test.result');








// Route::get('/get-member/{id}/{name}/{birthdate}/', function ($id = null, $name = null, $birthdate = null) {
//     $dataArray[] = [
//         'memberid' => $id,
//         'membername' => $name,
//         'birthdate' => $birthdate
//     ];

//     return view('get-member',
//         [
//             'dataArray' => $dataArray
//         ]
//     );

// });

// Route::get('/get/{id}/{name}/{birthdate}/',
//         [
//             memberController::class, 'get_member'
//         ]

// );
