<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/publishers', [App\Http\Controllers\PublisherAction::class, 'create']);

//Route::get('/users', [App\Http\Controllers\UserAction::class, '__invoke']);

/** 仮実装の仮実装 */
/*
Route::get('customers', function () {});
Route::post('customers', function () {});
Route::get('customers/{customer_id}', function () {});
Route::put('customers/{customer_id}', function () {});
Route::delete('customers/{customer_id}', function () {});
Route::get('reports', function () {});
Route::post('reports', function () {});
Route::get('reports/{report_id}', function () {});
Route::put('reports/{report_id}', function () {});
Route::delete('reports/{report_id}', function () {});
*/

/** 仮実装 */
/*
Route::get('customers', function () {
    return response()->json(\App\Models\Customer::query()->select(['id', 'name'])->get());
});
Route::post('customers', function (\Illuminate\Http\Request $request) {
    //バリデーション実装
    if (!$request->json('name')) {
        return response()
            ->make('', \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
    }
    $customer = new App\Models\Customer();
    $customer->name = $request->json('name');
    $customer->save();
});
*/

/** コントローラを実装 */
Route::get('customers', [ApiController::class, 'getCustomers']);
Route::post('customers', [ApiController::class, 'postCustomers']);
Route::get('customers/{customer_id}', [ApiController::class, 'getCustomer']);
Route::put('customers/{customer_id}', [ApiController::class, 'putCustomer']);
Route::delete('customers/{customer_id}', [ApiController::class, 'deleteCustomer']);
Route::get('reports',[ApiController::class, 'getReports']);
Route::post('reports', [ApiController::class, 'postReport']);
Route::get('reports/{report_id}', [ApiController::class, 'getReport']);
Route::put('reports/{report_id}', [ApiController::class, 'putReport']);
Route::delete('reports/{report_id}', [ApiController::class, 'deleteReport']);
