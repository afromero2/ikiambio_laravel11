@extends('layouts.sidebar')
@section('page_title','Detalle — Taxon')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Detalle — Taxon #{ $item->taxonID }</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-4">Taxonid</dt>
      <dd class="col-sm-8">{{ $item->taxonID }}</dd>
      <dt class="col-sm-4">Scientificnameid</dt>
      <dd class="col-sm-8">{{ $item->scientificNameID }}</dd>
      <dt class="col-sm-4">Scientificname</dt>
      <dd class="col-sm-8">{{ $item->scientificName }}</dd>
      <dt class="col-sm-4">Namepublishedin</dt>
      <dd class="col-sm-8">{{ $item->namePublishedIn }}</dd>
      <dt class="col-sm-4">Namepublishedinyear</dt>
      <dd class="col-sm-8">{{ $item->namePublishedInYear }}</dd>
      <dt class="col-sm-4">Higherclassification</dt>
      <dd class="col-sm-8">{{ $item->higherClassification }}</dd>
      <dt class="col-sm-4">Kingdom</dt>
      <dd class="col-sm-8">{{ $item->kingdom }}</dd>
      <dt class="col-sm-4">Phylum</dt>
      <dd class="col-sm-8">{{ $item->phylum }}</dd>
      <dt class="col-sm-4">Class</dt>
      <dd class="col-sm-8">{{ $item->class }}</dd>
      <dt class="col-sm-4">Order</dt>
      <dd class="col-sm-8">{{ $item->order }}</dd>
      <dt class="col-sm-4">Family</dt>
      <dd class="col-sm-8">{{ $item->family }}</dd>
      <dt class="col-sm-4">Genus</dt>
      <dd class="col-sm-8">{{ $item->genus }}</dd>
      <dt class="col-sm-4">Subgenus</dt>
      <dd class="col-sm-8">{{ $item->subgenus }}</dd>
      <dt class="col-sm-4">Specificepithet</dt>
      <dd class="col-sm-8">{{ $item->specificEpithet }}</dd>
      <dt class="col-sm-4">Intraspecificepithet</dt>
      <dd class="col-sm-8">{{ $item->intraspecificEpithet }}</dd>
      <dt class="col-sm-4">Taxonrank</dt>
      <dd class="col-sm-8">{{ $item->taxonRank }}</dd>
      <dt class="col-sm-4">Verbatimtaxonrank</dt>
      <dd class="col-sm-8">{{ $item->verbatimTaxonRank }}</dd>
      <dt class="col-sm-4">Scientificnameauthorship</dt>
      <dd class="col-sm-8">{{ $item->scientificNameAuthorship }}</dd>
      <dt class="col-sm-4">Vernacularname</dt>
      <dd class="col-sm-8">{{ $item->vernacularName }}</dd>
      <dt class="col-sm-4">Taxonomicstatus</dt>
      <dd class="col-sm-8">{{ $item->taxonomicStatus }}</dd>
      <dt class="col-sm-4">Taxonremarks</dt>
      <dd class="col-sm-8">{{ $item->taxonRemarks }}</dd>
    </dl>

    <div style="margin-top:12px;">
      <a class="btn" href="{{ route('taxon.edit', $item) }}">Editar</a>
      <a class="btn" href="{{ route('taxon.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection
