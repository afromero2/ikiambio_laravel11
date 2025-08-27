@extends('layouts.sidebar')
@section('page_title','Nuevo — Occurrence')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Nuevo — Occurrence</h1>

@if($errors->any())
  <div class="alert alert-danger" style="border:1px solid #fecaca;background:#fee2e2;color:#7f1d1d;">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{ $e }</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('occurrence.store') }}" class="card card-body">
  @csrf

  <div class="form-grid">

    <div>
      <label class="label">Occurrenceid</label>
      <input type="text" name="occurrenceID" value="{{ old('occurrenceID', isset($item)? $item->occurrenceID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Record level id</label>
      <input type="number" name="record_level_id" value="{{ old('record_level_id', isset($item)? $item->record_level_id : '') }}" class="input">
    </div>

    <div>
      <label class="label">Catalognumber</label>
      <input type="text" name="catalogNumber" value="{{ old('catalogNumber', isset($item)? $item->catalogNumber : '') }}" class="input">
    </div>

    <div>
      <label class="label">Recordnumber</label>
      <input type="text" name="recordNumber" value="{{ old('recordNumber', isset($item)? $item->recordNumber : '') }}" class="input">
    </div>

    <div>
      <label class="label">Recordedby</label>
      <input type="text" name="recordedBy" value="{{ old('recordedBy', isset($item)? $item->recordedBy : '') }}" class="input">
    </div>

    <div>
      <label class="label">Individualcount</label>
      <input type="number" name="individualCount" value="{{ old('individualCount', isset($item)? $item->individualCount : '') }}" class="input">
    </div>

    <div>
      <label class="label">Organismquantity</label>
      <input type="number" name="organismQuantity" value="{{ old('organismQuantity', isset($item)? $item->organismQuantity : '') }}" class="input">
    </div>

    <div>
      <label class="label">Organismquantitytype *</label>
      <input type="number" name="organismQuantityType" value="{{ old('organismQuantityType', isset($item)? $item->organismQuantityType : '') }}" class="input">
    </div>

    <div>
      <label class="label">Sex *</label>
      <input type="number" name="sex" value="{{ old('sex', isset($item)? $item->sex : '') }}" class="input">
    </div>

    <div>
      <label class="label">Lifestage *</label>
      <input type="number" name="lifeStage" value="{{ old('lifeStage', isset($item)? $item->lifeStage : '') }}" class="input">
    </div>

    <div>
      <label class="label">Reproductivecondition *</label>
      <input type="number" name="reproductiveCondition" value="{{ old('reproductiveCondition', isset($item)? $item->reproductiveCondition : '') }}" class="input">
    </div>

    <div>
      <label class="label">Behavior</label>
      <textarea name="behavior" class="input" rows="3">{{ old('behavior', isset($item)? $item->behavior : '') }}</textarea>
    </div>

    <div>
      <label class="label">Substrate</label>
      <textarea name="substrate" class="input" rows="3">{{ old('substrate', isset($item)? $item->substrate : '') }}</textarea>
    </div>

    <div>
      <label class="label">Establishmentmeans *</label>
      <input type="number" name="establishmentMeans" value="{{ old('establishmentMeans', isset($item)? $item->establishmentMeans : '') }}" class="input">
    </div>

    <div>
      <label class="label">Preparations</label>
      <textarea name="preparations" class="input" rows="3">{{ old('preparations', isset($item)? $item->preparations : '') }}</textarea>
    </div>

    <div>
      <label class="label">Disposition *</label>
      <input type="number" name="disposition" value="{{ old('disposition', isset($item)? $item->disposition : '') }}" class="input">
    </div>

    <div>
      <label class="label">Associatedmedia</label>
      <textarea name="associatedMedia" class="input" rows="3">{{ old('associatedMedia', isset($item)? $item->associatedMedia : '') }}</textarea>
    </div>

    <div>
      <label class="label">Associatedsequences</label>
      <textarea name="associatedSequences" class="input" rows="3">{{ old('associatedSequences', isset($item)? $item->associatedSequences : '') }}</textarea>
    </div>

    <div>
      <label class="label">Associatedtaxa</label>
      <textarea name="associatedTaxa" class="input" rows="3">{{ old('associatedTaxa', isset($item)? $item->associatedTaxa : '') }}</textarea>
    </div>

    <div>
      <label class="label">Othercatalognumbers</label>
      <textarea name="otherCatalogNumbers" class="input" rows="3">{{ old('otherCatalogNumbers', isset($item)? $item->otherCatalogNumbers : '') }}</textarea>
    </div>

    <div>
      <label class="label">Occurrenceremarks</label>
      <textarea name="occurrenceRemarks" class="input" rows="3">{{ old('occurrenceRemarks', isset($item)? $item->occurrenceRemarks : '') }}</textarea>
    </div>

    <div>
      <label class="label">Organismid</label>
      <input type="text" name="organismID" value="{{ old('organismID', isset($item)? $item->organismID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Locationid</label>
      <input type="text" name="locationID" value="{{ old('locationID', isset($item)? $item->locationID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Taxonid</label>
      <input type="text" name="taxonID" value="{{ old('taxonID', isset($item)? $item->taxonID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Identificationid</label>
      <input type="text" name="identificationID" value="{{ old('identificationID', isset($item)? $item->identificationID : '') }}" class="input">
    </div>
  </div>

  <div style="margin-top:12px;">
    <button class="btn primary">Guardar</button>
    <a href="{{ route('occurrence.index') }}" class="btn">Cancelar</a>
  </div>
</form>
@endsection
