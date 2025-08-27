<?php

use Illuminate\Support\Facades\Route;

// =================== CONTROLADORES ===================
// Home / Ejemplo
use App\Http\Controllers\Web\IkiambioUserController;

// Record Level
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

// Occurrence
use App\Http\Controllers\Web\Occurrence\OrganismQuantityTypeController;
use App\Http\Controllers\Web\Occurrence\SexController;
use App\Http\Controllers\Web\Occurrence\LifeStageController;
use App\Http\Controllers\Web\Occurrence\ReproductiveConditionController;
use App\Http\Controllers\Web\Occurrence\EstablishmentMeansController;
use App\Http\Controllers\Web\Occurrence\DispositionController;

// Taxon
use App\Http\Controllers\Web\Taxon\TaxonRankController;
use App\Http\Controllers\Web\Taxon\TaxonomicStatusController;

// Identification
use App\Http\Controllers\Web\Identification\TypeStatusController;
use App\Http\Controllers\Web\Identification\VerificationStatusController;

// Location
use App\Http\Controllers\Web\Location\ContinentController;
use App\Http\Controllers\Web\Location\VerbatimSrsController;
use App\Http\Controllers\Web\Location\GeorefStatusController;

// Tblprimers (vocab)
use App\Http\Controllers\Web\Tblprimers\PrimerDirectionController;

// Tblprimers F/R (no vocab)
use App\Http\Controllers\TblprimersfController;
use App\Http\Controllers\TblprimersrController;


// ======================= HOME =======================
Route::get('/', fn () => view('home'))->name('home');

// CRUD ejemplo previo
Route::resource('ikiambio-users', IkiambioUserController::class)
    ->parameters(['ikiambio-users' => 'ikiambioUser']);


// ===================== RECORD LEVEL =====================
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


// ======================= OCCURRENCE ======================
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


// ======================== TAXON ========================
Route::resource('vocab-taxon-taxon-rank', TaxonRankController::class)
    ->names('vocab-taxon-taxon-rank')
    ->parameters(['vocab-taxon-taxon-rank' => 'taxonRank']);

Route::resource('vocab-taxon-taxonomic-status', TaxonomicStatusController::class)
    ->names('vocab-taxon-taxonomic-status')
    ->parameters(['vocab-taxon-taxonomic-status' => 'taxonomicStatus']);


// ==================== IDENTIFICATION ===================
Route::resource('vocab-identification-type-status', TypeStatusController::class)
    ->names('vocab-identification-type-status')
    ->parameters(['vocab-identification-type-status' => 'typeStatus']);

Route::resource('vocab-identification-verification-status', VerificationStatusController::class)
    ->names('vocab-identification-verification-status')
    ->parameters(['vocab-identification-verification-status' => 'verificationStatus']);


// ======================= LOCATION ======================
Route::resource('vocab-location-continent', ContinentController::class)
    ->names('vocab-location-continent')
    ->parameters(['vocab-location-continent' => 'continent']);

Route::resource('vocab-location-verbatim-srs', VerbatimSrsController::class)
    ->names('vocab-location-verbatim-srs')
    ->parameters(['vocab-location-verbatim-srs' => 'verbatimSrs']);

Route::resource('vocab-location-georef-status', GeorefStatusController::class)
    ->names('vocab-location-georef-status')
    ->parameters(['vocab-location-georef-status' => 'georefStatus']);


// ===================== TBLPRIMERS ======================
Route::resource('vocab-tblprimers-primer-direction', PrimerDirectionController::class)
    ->names('vocab-tblprimers-primer-direction')
    ->parameters(['vocab-tblprimers-primer-direction' => 'primerDirection']);

// ===== Tblprimers F/R (fuera de vocab) =====
Route::resource('tblprimersf', TblprimersfController::class)
    ->names('tblprimersf')
    ->parameters(['tblprimersf' => 'tblprimersf']);

Route::resource('tblprimersr', TblprimersrController::class)
    ->names('tblprimersr')
    ->parameters(['tblprimersr' => 'tblprimersr']);
