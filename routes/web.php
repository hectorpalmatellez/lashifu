<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $client = new GuzzleHttp\Client();
    $res = $client->get(
        'http://backoffice.despegar.com/shifu/?locale=es_AR',
        [
            'headers' => [
                'X-Client' => ''
            ]
        ]
    );
    $contents = json_decode($res->getBody()->getContents());
    return view('welcome', [
        'header' => $contents->header,
        'footer' => $contents->footer,
        'js'     => $contents->js,
        'css'    => $contents->css
    ]);
});
