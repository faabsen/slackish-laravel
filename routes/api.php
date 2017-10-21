<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function (Router $router) {
    $router->get('/user', function (Request $request) {
        return $request->user();
    });

    $router->get('channels', 'ChannelsController@index');
    $router->resource('channels.messages', 'ChannelMessagesController', ['only' => ['store']]);
});
