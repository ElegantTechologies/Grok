<?php
/* 
Grok: (I could get this to live in grok/src/routes.php)
[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
require_once(base_path('vendor/eleganttechnologies/grok/src/routes/web.php'));
*/


Route::get('/grok/grok',function () {return view('grok::grok');})->name('grok.grok');
Route::get('/grok/livewire',function () {return view('grok::livewire');})->name('grok.livewire');
Route::get('/grok/tas-ui-looks',function () {return view('tas::groks/index');})->name('grok.tas-ui-looks');
Route::get('/grok/jetstream',function () {return view('grok::jetstream');})->name('grok.jetstream');
Route::get('/grok',function () {return view('grok::index');})->name('grok');
