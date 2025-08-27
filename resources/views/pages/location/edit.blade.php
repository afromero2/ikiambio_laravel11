@extends('layouts.sidebar')
@section('page_title','Editar — Location')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Editar — Location #{ $item->locationID }</h1>

@if($errors->any())
  <div class="alert alert-danger" style="border:1px solid #fecaca;background:#fee2e2;color:#7f1d1d;">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{ $e }</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('location.update', $item) }}" class="card card-body">
  @csrf @method('PUT')

  <div class="form-grid">

    <div>
      <label class="label">Id inec</label>
      <input type="text" name="id_INEC" value="{{ old('id_INEC', isset($item)? $item->id_INEC : '') }}" class="input">
    </div>

    <div>
      <label class="label">Highergeographyid</label>
      <input type="text" name="higherGeographyID" value="{{ old('higherGeographyID', isset($item)? $item->higherGeographyID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Continent *</label>
      <input type="number" name="continent" value="{{ old('continent', isset($item)? $item->continent : '') }}" class="input">
    </div>

    <div>
      <label class="label">Waterbody</label>
      <input type="text" name="waterBody" value="{{ old('waterBody', isset($item)? $item->waterBody : '') }}" class="input">
    </div>

    <div>
      <label class="label">Islandgroup</label>
      <input type="text" name="islandGroup" value="{{ old('islandGroup', isset($item)? $item->islandGroup : '') }}" class="input">
    </div>

    <div>
      <label class="label">Island</label>
      <input type="text" name="island" value="{{ old('island', isset($item)? $item->island : '') }}" class="input">
    </div>

    <div>
      <label class="label">Country</label>
      <input type="text" name="country" value="{{ old('country', isset($item)? $item->country : '') }}" class="input">
    </div>

    <div>
      <label class="label">Countrycode</label>
      <input type="text" name="countryCode" value="{{ old('countryCode', isset($item)? $item->countryCode : '') }}" class="input">
    </div>

    <div>
      <label class="label">Stateprovince</label>
      <input type="text" name="stateProvince" value="{{ old('stateProvince', isset($item)? $item->stateProvince : '') }}" class="input">
    </div>

    <div>
      <label class="label">County</label>
      <input type="text" name="county" value="{{ old('county', isset($item)? $item->county : '') }}" class="input">
    </div>

    <div>
      <label class="label">Municipality</label>
      <input type="text" name="municipality" value="{{ old('municipality', isset($item)? $item->municipality : '') }}" class="input">
    </div>

    <div>
      <label class="label">Locality</label>
      <input type="text" name="locality" value="{{ old('locality', isset($item)? $item->locality : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimlocality</label>
      <textarea name="verbatimLocality" class="input" rows="3">{{ old('verbatimLocality', isset($item)? $item->verbatimLocality : '') }}</textarea>
    </div>

    <div>
      <label class="label">Verbatimelevation</label>
      <textarea name="verbatimElevation" class="input" rows="3">{{ old('verbatimElevation', isset($item)? $item->verbatimElevation : '') }}</textarea>
    </div>

    <div>
      <label class="label">Verbatimdepth</label>
      <textarea name="verbatimDepth" class="input" rows="3">{{ old('verbatimDepth', isset($item)? $item->verbatimDepth : '') }}</textarea>
    </div>

    <div>
      <label class="label">Locationremarks</label>
      <textarea name="locationRemarks" class="input" rows="3">{{ old('locationRemarks', isset($item)? $item->locationRemarks : '') }}</textarea>
    </div>

    <div>
      <label class="label">Decimallatitude</label>
      <input type="number" name="decimalLatitude" value="{{ old('decimalLatitude', isset($item)? $item->decimalLatitude : '') }}" class="input">
    </div>

    <div>
      <label class="label">Decimallongitude</label>
      <input type="number" name="decimalLongitude" value="{{ old('decimalLongitude', isset($item)? $item->decimalLongitude : '') }}" class="input">
    </div>

    <div>
      <label class="label">Geodeticdatum</label>
      <input type="text" name="geodeticDatum" value="{{ old('geodeticDatum', isset($item)? $item->geodeticDatum : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimlatitude</label>
      <input type="text" name="verbatimLatitude" value="{{ old('verbatimLatitude', isset($item)? $item->verbatimLatitude : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimlongitude</label>
      <input type="text" name="verbatimLongitude" value="{{ old('verbatimLongitude', isset($item)? $item->verbatimLongitude : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimcoordinatesystem</label>
      <input type="text" name="verbatimCoordinateSystem" value="{{ old('verbatimCoordinateSystem', isset($item)? $item->verbatimCoordinateSystem : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimsrs *</label>
      <input type="number" name="verbatimSRS" value="{{ old('verbatimSRS', isset($item)? $item->verbatimSRS : '') }}" class="input">
    </div>

    <div>
      <label class="label">Georeferencedby</label>
      <input type="text" name="georeferencedBy" value="{{ old('georeferencedBy', isset($item)? $item->georeferencedBy : '') }}" class="input">
    </div>

    <div>
      <label class="label">Georeferenceddate</label>
      <input type="date" name="georeferencedDate" value="{{ old('georeferencedDate', isset($item)? $item->georeferencedDate : '') }}" class="input">
    </div>

    <div>
      <label class="label">Georeferenceverificationstatus *</label>
      <input type="number" name="georeferenceVerificationStatus" value="{{ old('georeferenceVerificationStatus', isset($item)? $item->georeferenceVerificationStatus : '') }}" class="input">
    </div>

    <div>
      <label class="label">Georeferenceremarks</label>
      <textarea name="georeferenceRemarks" class="input" rows="3">{{ old('georeferenceRemarks', isset($item)? $item->georeferenceRemarks : '') }}</textarea>
    </div>
  </div>

  <div style="margin-top:12px;">
    <button class="btn primary">Actualizar</button>
    <a href="{{ route('location.index') }}" class="btn">Cancelar</a>
  </div>
</form>
@endsection
