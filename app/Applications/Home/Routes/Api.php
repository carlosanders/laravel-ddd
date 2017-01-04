<?php

namespace App\Applications\Home\Routes;

use App\Support\Laravel\Http\Routing\RouteFile;

/**
 * Api Routes.
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 */
class Api extends RouteFile
{
    /**
     * Declare API Routes.
     */
    public function routes()
    {
        $this->router->get('/user', function (Request $request) {
            return $request->user();
        })->middleware('auth:api');
    }
}
