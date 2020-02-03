<?php
namespace CaoMinhDuc\LaravelPwa\Controllers;

use Illuminate\Routing\Controller;

class PWAController extends Controller
{
    public function manifest()
    {
        $manifest = [
            "name" => "Hello World",
            "short_name" => "Hello",
            "theme_color" => "#2196f3",
            "background_color" => "#2196f3",
            "display" => "fullscreen",
            "orientation" => "portrait",
            "Scope" => "/",
            "start_url" => "/",
            "icons" => [
              [
                "src" => "images/icons/icon-72x72.png", 
                "sizes" => "72x72",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-96x96.png",
                "sizes" => "96x96",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-128x128.png",
                "sizes" => "128x128",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-144x144.png",
                "sizes" => "144x144",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-152x152.png",
                "sizes" => "152x152",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-192x192.png",
                "sizes" => "192x192",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-384x384.png",
                "sizes" => "384x384",
                "type" => "image/png"
              ],
              [
                "src" => "images/icons/icon-512x512.png",
                "sizes" => "512x512",
                "type" => "image/png"
              ]
            ],
            "splash_pages" => null
        ];
        return response()->json($manifest);
    }

    public function serviceWorker()
    {
      return response()->file(__DIR__.'/../../resources/assets/service-worker.js',[
        'Content-Type' => 'application/javascript'
      ]);
    }
}