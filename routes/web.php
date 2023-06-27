<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//sayfaya dahil etme

Route::get('/', function () {
    return view('welcome');
});
Route::get('/web',[HomeController::class,'page1'])->name('web');//çağırmak için gerekli- controller-controller içindeki sınfın içindeki fonksiyon
//sonundaki name ile routea isim veriyoruz ve link kısmından ulaşmak için bu ismi kullanıyoruz. web.blade 25. satır



