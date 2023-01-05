<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
  Route::apiResource('customers', CustomerController::class);
  Route::apiResource('invoices', InvoiceController::class);
  Route::apiResource('publishers', PublisherController::class);
  Route::apiResource('authors', AuthorController::class);
  Route::apiResource('book_authors', BookAuthorController::class);
  Route::apiResource('books', BookController::class);
  Route::apiResource('book_languages', BookLanguageController::class);
  Route::apiResource('order_histories', OrderHistoryController::class);
  Route::apiResource('order_statuses', OrderStatusController::class);
  Route::apiResource('shipping_methods', ShippingMethodController::class);
});