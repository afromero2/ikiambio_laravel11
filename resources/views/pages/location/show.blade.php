@extends('layouts.sidebar')
@section('page_title','Detalle — Location')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Detalle — Location #{ $item->locationID }</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-4">Locationid</dt>
      <dd class="col-sm-8">{{ $item->locationID }}</dd>
      <dt class="col-sm-4">Id inec</dt>
      <dd class="col-sm-8">{{ $item->id_INEC }}</dd>
      <dt class="col-sm-4">Highergeographyid</dt>
      <dd class="col-sm-8">{{ $item->higherGeographyID }}</dd>
      <dt class="col-sm-4">Continent</dt>
      <dd class="col-sm-8">{{ $item->continent }}</dd>
      <dt class="col-sm-4">Waterbody</dt>
      <dd class="col-sm-8">{{ $item->waterBody }}</dd>
      <dt class="col-sm-4">Islandgroup</dt>
      <dd class="col-sm-8">{{ $item->islandGroup }}</dd>
      <dt class="col-sm-4">Island</dt>
      <dd class="col-sm-8">{{ $item->island }}</dd>
      <dt class="col-sm-4">Country</dt>
      <dd class="col-sm-8">{{ $item->country }}</dd>
      <dt class="col-sm-4">Countrycode</dt>
      <dd class="col-sm-8">{{ $item->countryCode }}</dd>
      <dt class="col-sm-4">Stateprovince</dt>
      <dd class="col-sm-8">{{ $item->stateProvince }}</dd>
      <dt class="col-sm-4">County</dt>
      <dd class="col-sm-8">{{ $item->county }}</dd>
      <dt class="col-sm-4">Municipality</dt>
      <dd class="col-sm-8">{{ $item->municipality }}</dd>
      <dt class="col-sm-4">Locality</dt>
      <dd class="col-sm-8">{{ $item->locality }}</dd>
      <dt class="col-sm-4">Verbatimlocality</dt>
      <dd class="col-sm-8">{{ $item->verbatimLocality }}</dd>
      <dt class="col-sm-4">Verbatimelevation</dt>
      <dd class="col-sm-8">{{ $item->verbatimElevation }}</dd>
      <dt class="col-sm-4">Verbatimdepth</dt>
      <dd class="col-sm-8">{{ $item->verbatimDepth }}</dd>
      <dt class="col-sm-4">Locationremarks</dt>
      <dd class="col-sm-8">{{ $item->locationRemarks }}</dd>
      <dt class="col-sm-4">Decimallatitude</dt>
      <dd class="col-sm-8">{{ $item->decimalLatitude }}</dd>
      <dt class="col-sm-4">Decimallongitude</dt>
      <dd class="col-sm-8">{{ $item->decimalLongitude }}</dd>
      <dt class="col-sm-4">Geodeticdatum</dt>
      <dd class="col-sm-8">{{ $item->geodeticDatum }}</dd>
      <dt class="col-sm-4">Verbatimlatitude</dt>
      <dd class="col-sm-8">{{ $item->verbatimLatitude }}</dd>
      <dt class="col-sm-4">Verbatimlongitude</dt>
      <dd class="col-sm-8">{{ $item->verbatimLongitude }}</dd>
      <dt class="col-sm-4">Verbatimcoordinatesystem</dt>
      <dd class="col-sm-8">{{ $item->verbatimCoordinateSystem }}</dd>
      <dt class="col-sm-4">Verbatimsrs</dt>
      <dd class="col-sm-8">{{ $item->verbatimSRS }}</dd>
      <dt class="col-sm-4">Georeferencedby</dt>
      <dd class="col-sm-8">{{ $item->georeferencedBy }}</dd>
      <dt class="col-sm-4">Georeferenceddate</dt>
      <dd class="col-sm-8">{{ $item->georeferencedDate }}</dd>
      <dt class="col-sm-4">Georeferenceverificationstatus</dt>
      <dd class="col-sm-8">{{ $item->georeferenceVerificationStatus }}</dd>
      <dt class="col-sm-4">Georeferenceremarks</dt>
      <dd class="col-sm-8">{{ $item->georeferenceRemarks }}</dd>
    </dl>

    <div style="margin-top:12px;">
      <a class="btn" href="{{ route('location.edit', $item) }}">Editar</a>
      <a class="btn" href="{{ route('location.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection
