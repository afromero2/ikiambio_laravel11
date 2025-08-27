@extends('layouts.sidebar')
@section('page_title','Detalle — Record level')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Detalle — Record level #{ $item->record_level_id }</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-4">Record level id</dt>
      <dd class="col-sm-8">{{ $item->record_level_id }}</dd>
      <dt class="col-sm-4">Type</dt>
      <dd class="col-sm-8">{{ $item->type }}</dd>
      <dt class="col-sm-4">Modified</dt>
      <dd class="col-sm-8">{{ $item->modified }}</dd>
      <dt class="col-sm-4">Language</dt>
      <dd class="col-sm-8">{{ $item->language }}</dd>
      <dt class="col-sm-4">License</dt>
      <dd class="col-sm-8">{{ $item->license }}</dd>
      <dt class="col-sm-4">Rightsholder</dt>
      <dd class="col-sm-8">{{ $item->rightsHolder }}</dd>
      <dt class="col-sm-4">Accessrights</dt>
      <dd class="col-sm-8">{{ $item->accessRights }}</dd>
      <dt class="col-sm-4">Bibliographiccitation</dt>
      <dd class="col-sm-8">{{ $item->bibliographicCitation }}</dd>
      <dt class="col-sm-4">References</dt>
      <dd class="col-sm-8">{{ $item->references }}</dd>
      <dt class="col-sm-4">Institutionid</dt>
      <dd class="col-sm-8">{{ $item->institutionID }}</dd>
      <dt class="col-sm-4">Collectionid</dt>
      <dd class="col-sm-8">{{ $item->collectionID }}</dd>
      <dt class="col-sm-4">Datasetid</dt>
      <dd class="col-sm-8">{{ $item->datasetID }}</dd>
      <dt class="col-sm-4">Institutioncode</dt>
      <dd class="col-sm-8">{{ $item->institutionCode }}</dd>
      <dt class="col-sm-4">Collectioncode</dt>
      <dd class="col-sm-8">{{ $item->collectionCode }}</dd>
      <dt class="col-sm-4">Datasetname</dt>
      <dd class="col-sm-8">{{ $item->datasetName }}</dd>
      <dt class="col-sm-4">Ownerinstitutioncode</dt>
      <dd class="col-sm-8">{{ $item->ownerInstitutionCode }}</dd>
      <dt class="col-sm-4">Basisofrecord</dt>
      <dd class="col-sm-8">{{ $item->basisOfRecord }}</dd>
      <dt class="col-sm-4">Informationwithheld</dt>
      <dd class="col-sm-8">{{ $item->informationWithheld }}</dd>
      <dt class="col-sm-4">Datageneralizations</dt>
      <dd class="col-sm-8">{{ $item->dataGeneralizations }}</dd>
    </dl>

    <div style="margin-top:12px;">
      <a class="btn" href="{{ route('record-level.edit', $item) }}">Editar</a>
      <a class="btn" href="{{ route('record-level.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection
