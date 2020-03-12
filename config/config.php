<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'version' => '0.1.0',
    'manifest' => [
        "name" => "Cao Minh Duc",
        "short_name" => "Cao",
        "theme_color" => "#2196f3",
        "background_color" => "#2196f3",
        "display" => "fullscreen",
        "orientation" => "portrait",
        "scope" => "/",
        "start_url" => "/",
        "icons" => [
          [
            "src" => "vendor/laravel-pwa/icons/icon-72x72.png", 
            "sizes" => "72x72",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-96x96.png",
            "sizes" => "96x96",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-128x128.png",
            "sizes" => "128x128",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-144x144.png",
            "sizes" => "144x144",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-152x152.png",
            "sizes" => "152x152",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-192x192.png",
            "sizes" => "192x192",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-384x384.png",
            "sizes" => "384x384",
            "type" => "image/png"
          ],
          [
            "src" => "vendor/laravel-pwa/icons/icon-512x512.png",
            "sizes" => "512x512",
            "type" => "image/png"
          ]
        ],
        "splash_pages" => null
    ],
    'files-to-cache' => [
        '/',
        'css/app.css'
    ]
];