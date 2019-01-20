<?php
/**
 * @var \Illuminate\Routing\Router $router
 */

use App\Http\Actions\AddPoint\AddPointAction;

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

$router->put('/customers/add_point', AddPointAction::class);
