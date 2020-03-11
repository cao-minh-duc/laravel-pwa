<?php
namespace CaoMinhDuc\LaravelPwa\Controllers;

use Illuminate\Routing\Controller;

class PWAController extends Controller
{
    public function manifest()
    {
        $manifest = config('laravel-pwa.manifest');
        return response()->json($manifest);
    }

    public function serviceWorker()
    {
      return response()->file(__DIR__.'/../../resources/assets/service-worker.js',[
        'Content-Type' => 'application/javascript'
      ]);
    }
}
