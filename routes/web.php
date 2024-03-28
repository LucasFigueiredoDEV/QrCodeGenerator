<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

Route::get('/', function () {
    $qrCode = QrCode::size(300)->generate('https://www.instagram.com/_lulucass/');
    return view('home', compact('qrCode'));
});

// Rota para Home page
Route::get('/home', [QrCodeController::class, 'home'])->name('home');

// Rota para Envio de formulário com informações para a geração de QrCode
Route::get('/gerarQrCode', [QrCodeController::class, 'geradorQrCode'])->name('geradorQrCode');
Route::post('/gerarQrCode', [QrCodeController::class, 'gerarQrCode'])->name('gerarQrCode');

// Rota para mostrar QrCode Gerado
Route::get('/qrCode', [QrCodeController::class, 'qrCode'])->name('qrCode');