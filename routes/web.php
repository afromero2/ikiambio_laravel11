<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\IkiambioUserController as IkiambioUserWeb;

// Home
Route::get('/', fn () => view('home'))->name('home');

// CRUD ejemplo previo
Route::resource('ikiambio-users', IkiambioUserWeb::class)
    ->parameters(['ikiambio-users' => 'ikiambioUser']);

// ===================== RECORD LEVEL =====================
use App\Http\Controllers\Web\RecordLevel\TypeController;
use App\Http\Controllers\Web\RecordLevel\LicenseController;
use App\Http\Controllers\Web\RecordLevel\RightsHolderController;
use App\Http\Controllers\Web\RecordLevel\AccessRightsController;
use App\Http\Controllers\Web\RecordLevel\InstitutionIdController;
use App\Http\Controllers\Web\RecordLevel\CollectionIdController;
use App\Http\Controllers\Web\RecordLevel\InstitutionCodeController;
use App\Http\Controllers\Web\RecordLevel\CollectionCodeController;
use App\Http\Controllers\Web\RecordLevel\OwnerInstitutionCodeController;
use App\Http\Controllers\Web\RecordLevel\BasisOfRecordController;

/* ---- 1) Rutas compatibles con scaffold (base = nombre tabla en kebab) ---- */
Route::resource('vocab-record-level-type', TypeController::class)
    ->names('vocab-record-level-type')
    ->parameters(['vocab-record-level-type' => 'type']);

Route::resource('vocab-record-level-license', LicenseController::class)
    ->names('vocab-record-level-license')
    ->parameters(['vocab-record-level-license' => 'license']);

Route::resource('vocab-record-level-rights-holder', RightsHolderController::class)
    ->names('vocab-record-level-rights-holder')
    ->parameters(['vocab-record-level-rights-holder' => 'rightsHolder']);

Route::resource('vocab-record-level-access-rights', AccessRightsController::class)
    ->names('vocab-record-level-access-rights')
    ->parameters(['vocab-record-level-access-rights' => 'accessRights']);

Route::resource('vocab-record-level-institution-id', InstitutionIdController::class)
    ->names('vocab-record-level-institution-id')
    ->parameters(['vocab-record-level-institution-id' => 'institutionId']);

Route::resource('vocab-record-level-collection-id', CollectionIdController::class)
    ->names('vocab-record-level-collection-id')
    ->parameters(['vocab-record-level-collection-id' => 'collectionId']);

Route::resource('vocab-record-level-institution-code', InstitutionCodeController::class)
    ->names('vocab-record-level-institution-code')
    ->parameters(['vocab-record-level-institution-code' => 'institutionCode']);

Route::resource('vocab-record-level-collection-code', CollectionCodeController::class)
    ->names('vocab-record-level-collection-code')
    ->parameters(['vocab-record-level-collection-code' => 'collectionCode']);

Route::resource('vocab-record-level-owner-institution-code', OwnerInstitutionCodeController::class)
    ->names('vocab-record-level-owner-institution-code')
    ->parameters(['vocab-record-level-owner-institution-code' => 'ownerInstitutionCode']);

Route::resource('vocab-record-level-basis-of-record', BasisOfRecordController::class)
    ->names('vocab-record-level-basis-of-record')
    ->parameters(['vocab-record-level-basis-of-record' => 'basisOfRecord']);

/* ---- 2) Rutas “bonitas” agrupadas ---- */
Route::prefix('record-level')->as('record-level.')->group(function () {
    Route::resource('types', TypeController::class)
        ->names('types')->parameters(['types' => 'type']);

    Route::resource('licenses', LicenseController::class)
        ->names('licenses')->parameters(['licenses' => 'license']);

    Route::resource('rights-holder', RightsHolderController::class)
        ->names('rights-holder')->parameters(['rights-holder' => 'rightsHolder']);

    Route::resource('access-rights', AccessRightsController::class)
        ->names('access-rights')->parameters(['access-rights' => 'accessRights']);

    Route::resource('institution-id', InstitutionIdController::class)
        ->names('institution-id')->parameters(['institution-id' => 'institutionId']);

    Route::resource('collection-id', CollectionIdController::class)
        ->names('collection-id')->parameters(['collection-id' => 'collectionId']);

    Route::resource('institution-code', InstitutionCodeController::class)
        ->names('institution-code')->parameters(['institution-code' => 'institutionCode']);

    Route::resource('collection-code', CollectionCodeController::class)
        ->names('collection-code')->parameters(['collection-code' => 'collectionCode']);

    Route::resource('owner-institution-code', OwnerInstitutionCodeController::class)
        ->names('owner-institution-code')->parameters(['owner-institution-code' => 'ownerInstitutionCode']);

    Route::resource('basis-of-record', BasisOfRecordController::class)
        ->names('basis-of-record')->parameters(['basis-of-record' => 'basisOfRecord']);
});

// ======================= OCCURRENCE ======================
use App\Http\Controllers\Web\Occurrence\OrganismQuantityTypeController;
use App\Http\Controllers\Web\Occurrence\SexController;
use App\Http\Controllers\Web\Occurrence\LifeStageController;
use App\Http\Controllers\Web\Occurrence\ReproductiveConditionController;
use App\Http\Controllers\Web\Occurrence\EstablishmentMeansController;
use App\Http\Controllers\Web\Occurrence\DispositionController;

/* ---- 1) Compatibles con scaffold (base = nombre tabla en kebab) ---- */
Route::resource('vocab-occurrence-organism-quantity-type', OrganismQuantityTypeController::class)
    ->names('vocab-occurrence-organism-quantity-type')
    ->parameters(['vocab-occurrence-organism-quantity-type' => 'organismQuantityType']);

Route::resource('vocab-occurrence-sex', SexController::class)
    ->names('vocab-occurrence-sex')
    ->parameters(['vocab-occurrence-sex' => 'sex']);

Route::resource('vocab-occurrence-life-stage', LifeStageController::class)
    ->names('vocab-occurrence-life-stage')
    ->parameters(['vocab-occurrence-life-stage' => 'lifeStage']);

Route::resource('vocab-occurrence-reproductive-condition', ReproductiveConditionController::class)
    ->names('vocab-occurrence-reproductive-condition')
    ->parameters(['vocab-occurrence-reproductive-condition' => 'reproductiveCondition']);

Route::resource('vocab-occurrence-establishment-means', EstablishmentMeansController::class)
    ->names('vocab-occurrence-establishment-means')
    ->parameters(['vocab-occurrence-establishment-means' => 'establishmentMeans']);

Route::resource('vocab-occurrence-disposition', DispositionController::class)
    ->names('vocab-occurrence-disposition')
    ->parameters(['vocab-occurrence-disposition' => 'disposition']);

/* ---- 2) Bonitas agrupadas ---- */
Route::prefix('occurrence')->as('occurrence.')->group(function () {
    Route::resource('organism-quantity-type', OrganismQuantityTypeController::class)
        ->names('organism-quantity-type')->parameters(['organism-quantity-type' => 'organismQuantityType']);

    Route::resource('sex', SexController::class)
        ->names('sex')->parameters(['sex' => 'sex']);

    Route::resource('life-stage', LifeStageController::class)
        ->names('life-stage')->parameters(['life-stage' => 'lifeStage']);

    Route::resource('reproductive-condition', ReproductiveConditionController::class)
        ->names('reproductive-condition')->parameters(['reproductive-condition' => 'reproductiveCondition']);

    Route::resource('establishment-means', EstablishmentMeansController::class)
        ->names('establishment-means')->parameters(['establishment-means' => 'establishmentMeans']);

    Route::resource('disposition', DispositionController::class)
        ->names('disposition')->parameters(['disposition' => 'disposition']);
});



/* use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\IkiambioUserController as IkiambioUserWeb;

Route::get('/', fn () => view('home'))->name('home');

Route::resource('ikiambio-users', IkiambioUserWeb::class);

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

Route::prefix('occurrence')->as('occurrence.')->group(function () {
    Route::view('/', 'pages.occurrence.index')->name('index');

    Route::view('organism-quantity-type', 'pages.occurrence.organism-quantity-type.index')->name('organism-quantity-type.index');
    Route::view('sex',                    'pages.occurrence.sex.index')->name('sex.index');
    Route::view('life-stage',             'pages.occurrence.life-stage.index')->name('life-stage.index');
    Route::view('reproductive-condition', 'pages.occurrence.reproductive-condition.index')->name('reproductive-condition.index');
    Route::view('establishment-means',    'pages.occurrence.establishment-means.index')->name('establishment-means.index');
    Route::view('disposition',            'pages.occurrence.disposition.index')->name('disposition.index');
}); */


