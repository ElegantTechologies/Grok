<?php
/*
Grok: (I could get this to live in grok/src/routes.php)
[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
require_once(base_path('vendor/eleganttechnologies/grok/src/routes/web.php'));
*/


Route::get('/grok/grok',function () {return view('grok::groks/grok/index');})->name('grok.grok');
Route::get('/grok/livewire',function () {return view('grok::groks/livewire/index');})->name('grok.livewire');
Route::get('/grok/jetstream',function () {return view('grok::groks/jetstream/index');})->name('grok.jetstream');


Route::get('/grok',function () {return view('grok::index');})->name('grok');
Route::get('/grok',function () {return view('grok::index');})->name('grok');

require_once(__DIR__."/../../../TallAndSassy/TasUiLooks/routes/web.php");
require_once(__DIR__."/../../../TallAndSassy/TasUiGlances/routes/web.php");


//Route::middleware(['auth:sanctum', 'verified'])->get('/grok', function () {
//   return 'hello world';#view('grok::index');
//})->name('grok');
