<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('welcome', ['page' => 'Bookstore API System']);
})->name('welcome');

Route::get('/authors', function () {
    $author = DB::table('authors')->get();

    return view('author', ['author' => $author, 'page' => 'Authors']);
})->name('authors');

Route::get('/books', function () {
    $book = DB::table('books')
              ->join('book_languages', 'books.language_id', '=', 'book_languages.id')
              ->select('books.id', 'books.title', 'books.isbn13', 'book_languages.language_name', 'books.pages', 'books.publication_date')
              ->get();

    return view('book', ['book' => $book, 'page' => 'Books']);
})->name('books');

Route::get('/book_authors', function () {
  $bookAuthor = DB::table('book_authors')
                  ->join('books', 'book_authors.book_id', '=', 'books.id')
                  ->join('authors', 'book_authors.author_id', '=', 'authors.id')
                  ->select('book_authors.id', 'books.title', 'authors.author_name')
                  ->get();

  return view('book_author', ['bookAuthor' => $bookAuthor, 'page' => 'Book Authors']);
})->name('book_authors');

Route::get('/book_languages', function () {
  $bookLanguage = DB::table('book_languages')
                  ->select('*')
                  ->get();

  return view('book_language', ['bookLanguage' => $bookLanguage, 'page' => 'Book Languages']);
})->name('book_languages');

Route::get('/customers', function () {
  $customer = DB::table('customers')
                  ->select('*')
                  ->get();

  return view('customer', ['customer' => $customer, 'page' => 'Customers']);
})->name('customers');

Route::get('/invoices', function () {
  $invoice = DB::table('invoices')
                  ->join('customers', 'invoices.customer_id', '=', 'customers.id')
                  ->join('books', 'invoices.book_id', '=', 'books.id')
                  ->join('shipping_methods', 'invoices.shipping_method_id', '=', 'shipping_methods.id')
                  ->select('invoices.id', 'customers.name', 'books.title', 'invoices.amount', 'shipping_methods.method_name', 'invoices.order_date')
                  ->get();

  return view('invoice', ['invoice' => $invoice, 'page' => 'Invoices']);
})->name('invoices');

Route::get('/order_histories', function () {
  $order_history = DB::table('order_histories')
                  ->join('invoices', 'order_histories.invoice_id', '=', 'invoices.id')
                  ->join('order_statuses', 'order_histories.status_id', '=', 'order_statuses.id')
                  ->join('customers', 'invoices.customer_id', '=', 'customers.id')
                  ->select('order_histories.id', 'order_histories.invoice_id', 'customers.name', 'order_statuses.status_value')
                  ->get();

  return view('order_history', ['orderHistory' => $order_history, 'page' => 'Order Histories']);
})->name('order_histories');

Route::get('/order_statuses', function () {
  $order_status = DB::table('order_statuses')
                  ->select('*')
                  ->get();

  return view('order_status', ['orderStatus' => $order_status, 'page' => 'Order Statuses']);
})->name('order_statuses');

Route::get('/publishers', function () {
  $publisher = DB::table('publishers')
                  ->select('*')
                  ->get();

  return view('publisher', ['publisher' => $publisher, 'page' => 'Publishers']);
})->name('publishers');

Route::get('/shipping_methods', function () {
  $shipping_method = DB::table('shipping_methods')
                  ->select('*')
                  ->get();

  return view('shipping_method', ['shippingMethod' => $shipping_method, 'page' => 'Shipping Methods']);
})->name('shipping_methods');