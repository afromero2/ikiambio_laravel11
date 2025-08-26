<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\IkiambioUserController as IkiambioUserWeb;

// Landing
Route::get('/', fn () => view('home'))->name('home');

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::resource('ikiambio-users', IkiambioUserWeb::class);

/* ===================== RECORD LEVEL ===================== */
Route::prefix('record-level')->as('record-level.')->group(function () {
    Route::view('/', 'pages.record-level.index')->name('index');

    Route::view('types',                  'pages.record-level.types.index')->name('types.index');
    Route::view('licenses',               'pages.record-level.licenses.index')->name('licenses.index');
    Route::view('rights-holder',          'pages.record-level.rights-holder.index')->name('rights-holder.index');
    Route::view('access-rights',          'pages.record-level.access-rights.index')->name('access-rights.index');
    Route::view('institution-id',         'pages.record-level.institution-id.index')->name('institution-id.index');
    Route::view('collection-id',          'pages.record-level.collection-id.index')->name('collection-id.index');
    Route::view('institution-code',       'pages.record-level.institution-code.index')->name('institution-code.index');
    Route::view('collection-code',        'pages.record-level.collection-code.index')->name('collection-code.index');
    Route::view('owner-institution-code', 'pages.record-level.owner-institution-code.index')->name('owner-institution-code.index');
    Route::view('basis-of-record',        'pages.record-level.basis-of-record.index')->name('basis-of-record.index');
});

/* ======================= OCCURRENCE ====================== */
Route::prefix('occurrence')->as('occurrence.')->group(function () {
    Route::view('/', 'pages.occurrence.index')->name('index');

    Route::view('organism-quantity-type', 'pages.occurrence.organism-quantity-type.index')->name('organism-quantity-type.index');
    Route::view('sex',                    'pages.occurrence.sex.index')->name('sex.index');
    Route::view('life-stage',             'pages.occurrence.life-stage.index')->name('life-stage.index');
    Route::view('reproductive-condition', 'pages.occurrence.reproductive-condition.index')->name('reproductive-condition.index');
    Route::view('establishment-means',    'pages.occurrence.establishment-means.index')->name('establishment-means.index');
    Route::view('disposition',            'pages.occurrence.disposition.index')->name('disposition.index');
});

