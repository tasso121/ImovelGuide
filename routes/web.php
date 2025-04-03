<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorretorController;

Route::resource('corretores', CorretorController::class)->parameters([
    'corretores' => 'corretor'
]);
Route::get('/', function () {
    return redirect()->route('corretores.index');
});

