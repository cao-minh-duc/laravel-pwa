<?php

use Illuminate\Support\Facades\Route;
use CaoMinhDuc\LaravelPwa\Controllers\PWAController;

Route::get('manifest.json',PWAController::class.'@manifest')->name('manifest.json');
Route::get('service-worker.js',PWAController::class.'@serviceWorker')->name('service-worker.js');