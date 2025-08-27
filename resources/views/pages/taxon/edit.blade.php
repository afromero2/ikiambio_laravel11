@extends('layouts.sidebar')
@section('page_title','Editar — Taxon')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Editar — Taxon #{ $item->taxonID }</h1>

@if($errors->any())
  <div class="alert alert-danger" style="border:1px solid #fecaca;background:#fee2e2;color:#7f1d1d;">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{ $e }</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('taxon.update', $item) }}" class="card card-body">
  @csrf @method('PUT')

  <div class="form-grid">

    <div>
      <label class="label">Scientificnameid</label>
      <input type="text" name="scientificNameID" value="{{ old('scientificNameID', isset($item)? $item->scientificNameID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Scientificname</label>
      <input type="text" name="scientificName" value="{{ old('scientificName', isset($item)? $item->scientificName : '') }}" class="input">
    </div>

    <div>
      <label class="label">Namepublishedin</label>
      <textarea name="namePublishedIn" class="input" rows="3">{{ old('namePublishedIn', isset($item)? $item->namePublishedIn : '') }}</textarea>
    </div>

    <div>
      <label class="label">Namepublishedinyear</label>
      <input type="number" name="namePublishedInYear" value="{{ old('namePublishedInYear', isset($item)? $item->namePublishedInYear : '') }}" class="input">
    </div>

    <div>
      <label class="label">Higherclassification</label>
      <textarea name="higherClassification" class="input" rows="3">{{ old('higherClassification', isset($item)? $item->higherClassification : '') }}</textarea>
    </div>

    <div>
      <label class="label">Kingdom</label>
      <input type="text" name="kingdom" value="{{ old('kingdom', isset($item)? $item->kingdom : '') }}" class="input">
    </div>

    <div>
      <label class="label">Phylum</label>
      <input type="text" name="phylum" value="{{ old('phylum', isset($item)? $item->phylum : '') }}" class="input">
    </div>

    <div>
      <label class="label">Class</label>
      <input type="text" name="class" value="{{ old('class', isset($item)? $item->class : '') }}" class="input">
    </div>

    <div>
      <label class="label">Order</label>
      <input type="text" name="order" value="{{ old('order', isset($item)? $item->order : '') }}" class="input">
    </div>

    <div>
      <label class="label">Family</label>
      <input type="text" name="family" value="{{ old('family', isset($item)? $item->family : '') }}" class="input">
    </div>

    <div>
      <label class="label">Genus</label>
      <input type="text" name="genus" value="{{ old('genus', isset($item)? $item->genus : '') }}" class="input">
    </div>

    <div>
      <label class="label">Subgenus</label>
      <input type="text" name="subgenus" value="{{ old('subgenus', isset($item)? $item->subgenus : '') }}" class="input">
    </div>

    <div>
      <label class="label">Specificepithet</label>
      <input type="text" name="specificEpithet" value="{{ old('specificEpithet', isset($item)? $item->specificEpithet : '') }}" class="input">
    </div>

    <div>
      <label class="label">Intraspecificepithet</label>
      <input type="text" name="intraspecificEpithet" value="{{ old('intraspecificEpithet', isset($item)? $item->intraspecificEpithet : '') }}" class="input">
    </div>

    <div>
      <label class="label">Taxonrank</label>
      <input type="number" name="taxonRank" value="{{ old('taxonRank', isset($item)? $item->taxonRank : '') }}" class="input">
    </div>

    <div>
      <label class="label">Verbatimtaxonrank</label>
      <input type="text" name="verbatimTaxonRank" value="{{ old('verbatimTaxonRank', isset($item)? $item->verbatimTaxonRank : '') }}" class="input">
    </div>

    <div>
      <label class="label">Scientificnameauthorship</label>
      <textarea name="scientificNameAuthorship" class="input" rows="3">{{ old('scientificNameAuthorship', isset($item)? $item->scientificNameAuthorship : '') }}</textarea>
    </div>

    <div>
      <label class="label">Vernacularname</label>
      <textarea name="vernacularName" class="input" rows="3">{{ old('vernacularName', isset($item)? $item->vernacularName : '') }}</textarea>
    </div>

    <div>
      <label class="label">Taxonomicstatus</label>
      <input type="number" name="taxonomicStatus" value="{{ old('taxonomicStatus', isset($item)? $item->taxonomicStatus : '') }}" class="input">
    </div>

    <div>
      <label class="label">Taxonremarks</label>
      <textarea name="taxonRemarks" class="input" rows="3">{{ old('taxonRemarks', isset($item)? $item->taxonRemarks : '') }}</textarea>
    </div>
  </div>

  <div style="margin-top:12px;">
    <button class="btn primary">Actualizar</button>
    <a href="{{ route('taxon.index') }}" class="btn">Cancelar</a>
  </div>
</form>
@endsection
