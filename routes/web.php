<?php

use Illuminate\Support\Facades\Route;

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
    return view('app.home');
});
Route::get('/products/foldable-fan', function () {
    return view('app.foldable_fan');
})->name("foldable_fan");
Route::get('/pages/reviews', function () {
    return view('app.reviews');
})->name("reviews");
Route::get('/pages/contact', function () {
    return view('app.contact');
})->name("contact");
Route::get('/pages/instruction-manual', function () {
    return view('app.instruction_manual');
})->name("instruction_manual");
Route::get('/pages/about-us', function () {
    return view('app.about_us');
})->name("about_us");
Route::get('/pages/faq', function () {
    return view('app.faqs');
})->name("faqs");
Route::get('/search', function () {
    return view('app.search');
})->name("search");
Route::get('/blogs/articles', function () {
    return view('app.articles');
})->name("articles");
Route::get('/pages/privacy-policy', function () {
    return view('app.privacy_policy');
})->name("privacy_policy");
Route::get('/policies/shipping-policy', function () {
    return view('app.shipping_policy');
})->name("shipping_policy");
Route::get('/policies/terms-of-service', function () {
    return view('app.terms_service');
})->name("terms_service");
Route::get('/policies/refund-policy', function () {
    return view('app.refund_policy');
})->name("refund_policy");
Route::get('/blogs/articles/what-is-the-best-portable-fan-for-camping', function () {
    return view('app.blog01');
})->name("blog01");
Route::get('/blogs/articles/is-it-good-to-sit-under-fan-after-sweating', function () {
    return view('app.blog02');
})->name("blog02");
Route::get('/blogs/articles/when-should-you-not-use-fans', function () {
    return view('app.blog03');
})->name("blog03");
Route::get('/blogs/articles/is-it-healthy-to-have-a-fan-blowing-on-you', function () {
    return view('app.blog04');
})->name("blog04");
