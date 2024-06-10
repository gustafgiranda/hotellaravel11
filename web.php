<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomTipe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/get_nomor_kamar/{id}', function($id){
//     SELECT DISTINCT kamar.id_kamar, kamar.harga, nomor_kamar.id_nomor, nomor_kamar.nok
// FROM nomor_kamar
// LEFT JOIN kamar ON kamar.id_kamar = nomor_kamar.id_kamar
// LEFT JOIN reserfasi ON nomor_kamar.id_nomor = reserfasi.id_nomor
// WHERE kamar.id_kamar = $id_tipe AND reserfasi.id_nomor IS NULL
    $rooms = DB::table('rooms')->select(['room_tipes.id', 'room_tipes.harga', 'rooms.id', 'rooms.id_room_tipe'])->leftJoin('room_tipes', 'rooms.id_room_tipe', '=', 'room_tipes.id')->leftJoin('bookings', 'rooms.id', '=', 'bookings.id_room')
    ->where('room_tipes.id', '=', $id)->whereNull('bookings.id_room')->get();

    return $rooms;
});

Route::get('/booking', function(){
    $roomTipes = RoomTipe::all();
    
    return view('booking', compact("roomTipes"));
})->middleware('auth');

Route::post('/booking', [BookingController::class, 'store']);

Route::get('/reserfasi', function(){
    $bookings = Booking::all();
    return view('reserfasi', compact("bookings"));
})->middleware(['auth', 'admin']);

Route::get('/admin', function(){
    return view('admin');
})->middleware(['auth', 'admin']);




Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');

    Route::post('/login', 'loginPost')->name('login.post')->middleware('guest');
    Route::post('/register', 'registerPost')->name('register.post')->middleware('guest');
});