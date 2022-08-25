
<?php
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login',[App\Http\Controllers\Auth\Admin\LoginController::class, 'adminLogin'])->name('admin.login.form');
    Route::post('/login',[App\Http\Controllers\Auth\Admin\LoginController::class, 'Login'])->name('admin.login');


});


Route::group(['prefix'=>'admin','middleware' => ['admin']],function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('admin');
    Route::resource('services', \App\Http\Controllers\Admin\ServicesController::class);
    Route::any('/fetchservices',[App\Http\Controllers\Admin\ServicesController::class, 'fetchServices']);
    Route::post('/approval/{id}',[\App\Http\Controllers\Admin\ServicesController::class ,'approval']);
  
});