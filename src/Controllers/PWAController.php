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

      $content = view('laravel-pwa::service-worker',[
        'version' => config('laravel-pwa.version'),
        'filesToCache' => implode(
          ',',
          array_map(function($file){
            return "'$file'";
          },config('laravel-pwa.files-to-cache'))
        )
      ]);
      return response($content)->
        header('Content-Type','application/javascript');
    }
}
