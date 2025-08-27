@extends('layouts.sidebar')
@section('page_title','Editar — Record level')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Editar — Record level #{ $item->record_level_id }</h1>

@if($errors->any())
  <div class="alert alert-danger" style="border:1px solid #fecaca;background:#fee2e2;color:#7f1d1d;">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{ $e }</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('record-level.update', $item) }}" class="card card-body">
  @csrf @method('PUT')

  <div class="form-grid">

    <div>
      <label class="label">Type *</label>
      <input type="number" name="type" value="{{ old('type', isset($item)? $item->type : '') }}" class="input">
    </div>

    <div>
      <label class="label">Modified</label>
      <input type="datetime-local" name="modified" value="{{ old('modified', isset($item)? $item->modified : '') }}" class="input">
    </div>

    <div>
      <label class="label">Language</label>
      <input type="text" name="language" value="{{ old('language', isset($item)? $item->language : '') }}" class="input">
    </div>

    <div>
      <label class="label">License *</label>
      <input type="number" name="license" value="{{ old('license', isset($item)? $item->license : '') }}" class="input">
    </div>

    <div>
      <label class="label">Rightsholder *</label>
      <input type="number" name="rightsHolder" value="{{ old('rightsHolder', isset($item)? $item->rightsHolder : '') }}" class="input">
    </div>

    <div>
      <label class="label">Accessrights *</label>
      <input type="number" name="accessRights" value="{{ old('accessRights', isset($item)? $item->accessRights : '') }}" class="input">
    </div>

    <div>
      <label class="label">Bibliographiccitation</label>
      <textarea name="bibliographicCitation" class="input" rows="3">{{ old('bibliographicCitation', isset($item)? $item->bibliographicCitation : '') }}</textarea>
    </div>

    <div>
      <label class="label">References</label>
      <textarea name="references" class="input" rows="3">{{ old('references', isset($item)? $item->references : '') }}</textarea>
    </div>

    <div>
      <label class="label">Institutionid *</label>
      <input type="number" name="institutionID" value="{{ old('institutionID', isset($item)? $item->institutionID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Collectionid *</label>
      <input type="number" name="collectionID" value="{{ old('collectionID', isset($item)? $item->collectionID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Datasetid</label>
      <input type="text" name="datasetID" value="{{ old('datasetID', isset($item)? $item->datasetID : '') }}" class="input">
    </div>

    <div>
      <label class="label">Institutioncode *</label>
      <input type="number" name="institutionCode" value="{{ old('institutionCode', isset($item)? $item->institutionCode : '') }}" class="input">
    </div>

    <div>
      <label class="label">Collectioncode *</label>
      <input type="number" name="collectionCode" value="{{ old('collectionCode', isset($item)? $item->collectionCode : '') }}" class="input">
    </div>

    <div>
      <label class="label">Datasetname</label>
      <input type="text" name="datasetName" value="{{ old('datasetName', isset($item)? $item->datasetName : '') }}" class="input">
    </div>

    <div>
      <label class="label">Ownerinstitutioncode *</label>
      <input type="number" name="ownerInstitutionCode" value="{{ old('ownerInstitutionCode', isset($item)? $item->ownerInstitutionCode : '') }}" class="input">
    </div>

    <div>
      <label class="label">Basisofrecord *</label>
      <input type="number" name="basisOfRecord" value="{{ old('basisOfRecord', isset($item)? $item->basisOfRecord : '') }}" class="input">
    </div>

    <div>
      <label class="label">Informationwithheld</label>
      <textarea name="informationWithheld" class="input" rows="3">{{ old('informationWithheld', isset($item)? $item->informationWithheld : '') }}</textarea>
    </div>

    <div>
      <label class="label">Datageneralizations</label>
      <textarea name="dataGeneralizations" class="input" rows="3">{{ old('dataGeneralizations', isset($item)? $item->dataGeneralizations : '') }}</textarea>
    </div>
  </div>

  <div style="margin-top:12px;">
    <button class="btn primary">Actualizar</button>
    <a href="{{ route('record-level.index') }}" class="btn">Cancelar</a>
  </div>
</form>
@endsection
