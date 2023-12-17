<?php

use App\Jobs\SlowJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\RoomTypeController;
use App\Http\Controllers\Frontend\FrontendRoomController;

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
sleep(5);
  return view('frontend.index');
});

//Route::get('/', [UserController::class, 'index'])->name('user.index');


Route::get('/dashboard', function () {
  return view('frontend.dashboard.user_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

  Route::get('/profile', [UserController::class, 'UserProfile'])->name('user.profile');
  Route::post('/profile/store', [UserController::class, 'UserStore'])->name('profile.store');
  Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

});

require __DIR__.'/auth.php';



Route::middleware(['auth','roles:admin'])->group(function(){
    
Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.index');

Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');

Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');

Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');


Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

});


Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');


// Admin Group Middleware 
Route::middleware(['auth','roles:admin'])->group(function(){

  /// Team All Route 
 Route::controller(TeamController::class)->group(function(){
 
     Route::get('/all/team', 'AllTeam')->name('all.team');
     Route::get('/add/team', 'AddTeam')->name('add.team');
     Route::post('/team/store', 'StoreTeam')->name('team.store');
     Route::get('/edit/team/{id}', 'EditTeam')->name('edit.team');
     Route::post('/team/update', 'UpdateTeam')->name('team.update');
     Route::get('/delete/team/{id}', 'DeleteTeam')->name('delete.team');
 
 });


   /// Book Area All Route 
   Route::controller(TeamController::class)->group(function(){

    Route::get('/book/area', 'BookArea')->name('book.area');
    Route::post('/book/area/update', 'BookAreaUpdate')->name('book.area.update');


});

 
 
 }); // End Admin Group Middleware 



 Route::controller(RoomTypeController::class)->group(function(){

  Route::get('/room/type/list', 'RoomTypeList')->name('room.type.list');
  Route::get('/add/room/type', 'AddRoomType')->name('add.room.type');
  Route::post('/room/type/store', 'RoomTypeStore')->name('room.type.store'); 
});


Route::controller(RoomController::class)->group(function(){

  Route::get('/edit/room/{id}', 'EditRoom')->name('edit.room');

  Route::post('/update/room/{id}', 'UpdateRoom')->name('update.room');

  Route::get('/multi/image/delete/{id}', 'MultiImageDelete')->name('multi.image.delete');

  Route::post('/store/room/no/{id}', 'StoreRoomNumber')->name('store.room.no');

  Route::get('/edit/roomno/{id}', 'EditRoomNumber')->name('edit.roomno');
  Route::post('/update/roomno/{id}', 'UpdateRoomNumber')->name('update.roomno');
  Route::get('/delete/roomno/{id}', 'DeleteRoomNumber')->name('delete.roomno');
  
});

Route::controller(FrontendRoomController::class)->group(function(){

  Route::get('/rooms', 'AllFrontendRoomList')->name('froom.all');
  Route::get('/room/details/{id}', 'RoomDetailsPage');
  Route::get('/bookings', 'BookingSeach')->name('booking.search');
  Route::get('/search/room/details/{id}', 'SearchRoomDetails')->name('search_room_details');
  Route::get('/check_room_availability', 'CheckRoomAvailability')->name('check_room_availability');

});



// Auth Middleware User must have login for access this route 
Route::middleware(['auth'])->group(function(){

  /// CHECKOUT ALL Route 
Route::controller(BookingController::class)->group(function(){

 Route::get('/checkout', 'Checkout')->name('checkout');
 Route::post('/booking/store/', 'BookingStore')->name('user_booking_store');

});

}); // End Group Auth Middleware


