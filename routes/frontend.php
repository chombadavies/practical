<?php


Route::get('/',[App\Http\Controllers\Frontend\IndexController::class,'home'])->name('home');

Route::group(['prefix'=>'user','middleware' => ['user']],function(){
    
    Route::any('book_appointment/{id}',[App\Http\Controllers\Frontend\IndexController::class, 'bookAppointment'])->name('book.appointment');
    Route::any('booking_submit',[App\Http\Controllers\Frontend\IndexController::class, 'bookingSubmit'])->name('booking.submit');
});

//Auth
Auth::routes(['register'=>false]);
Route::get('user/auth', [App\Http\Controllers\Frontend\IndexController::class, 'userAuth'])->name('user.auth');
Route::post('user/login',[App\Http\Controllers\Frontend\IndexController::class,'loginSubmit'])->name('login.submit');
Route::post('user/register',[App\Http\Controllers\Frontend\IndexController::class,'registerSubmit'])->name('register.submit');
Route::any('user/logout',[App\Http\Controllers\Frontend\IndexController::class,'userLogout'])->name('user.logout');


Route::get('userappointments', [App\Http\Controllers\Frontend\IndexController::class, 'userAppointments'])->name('user.appointments');