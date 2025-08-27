@extends('layouts.sidebar')
@section('page_title','Detalle — Occurrence')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Detalle — Occurrence #{ $item->id_occ_bd }</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-4">Id occ bd</dt>
      <dd class="col-sm-8">{{ $item->id_occ_bd }}</dd>
      <dt class="col-sm-4">Occurrenceid</dt>
      <dd class="col-sm-8">{{ $item->occurrenceID }}</dd>
      <dt class="col-sm-4">Record level id</dt>
      <dd class="col-sm-8">{{ $item->record_level_id }}</dd>
      <dt class="col-sm-4">Catalognumber</dt>
      <dd class="col-sm-8">{{ $item->catalogNumber }}</dd>
      <dt class="col-sm-4">Recordnumber</dt>
      <dd class="col-sm-8">{{ $item->recordNumber }}</dd>
      <dt class="col-sm-4">Recordedby</dt>
      <dd class="col-sm-8">{{ $item->recordedBy }}</dd>
      <dt class="col-sm-4">Individualcount</dt>
      <dd class="col-sm-8">{{ $item->individualCount }}</dd>
      <dt class="col-sm-4">Organismquantity</dt>
      <dd class="col-sm-8">{{ $item->organismQuantity }}</dd>
      <dt class="col-sm-4">Organismquantitytype</dt>
      <dd class="col-sm-8">{{ $item->organismQuantityType }}</dd>
      <dt class="col-sm-4">Sex</dt>
      <dd class="col-sm-8">{{ $item->sex }}</dd>
      <dt class="col-sm-4">Lifestage</dt>
      <dd class="col-sm-8">{{ $item->lifeStage }}</dd>
      <dt class="col-sm-4">Reproductivecondition</dt>
      <dd class="col-sm-8">{{ $item->reproductiveCondition }}</dd>
      <dt class="col-sm-4">Behavior</dt>
      <dd class="col-sm-8">{{ $item->behavior }}</dd>
      <dt class="col-sm-4">Substrate</dt>
      <dd class="col-sm-8">{{ $item->substrate }}</dd>
      <dt class="col-sm-4">Establishmentmeans</dt>
      <dd class="col-sm-8">{{ $item->establishmentMeans }}</dd>
      <dt class="col-sm-4">Preparations</dt>
      <dd class="col-sm-8">{{ $item->preparations }}</dd>
      <dt class="col-sm-4">Disposition</dt>
      <dd class="col-sm-8">{{ $item->disposition }}</dd>
      <dt class="col-sm-4">Associatedmedia</dt>
      <dd class="col-sm-8">{{ $item->associatedMedia }}</dd>
      <dt class="col-sm-4">Associatedsequences</dt>
      <dd class="col-sm-8">{{ $item->associatedSequences }}</dd>
      <dt class="col-sm-4">Associatedtaxa</dt>
      <dd class="col-sm-8">{{ $item->associatedTaxa }}</dd>
      <dt class="col-sm-4">Othercatalognumbers</dt>
      <dd class="col-sm-8">{{ $item->otherCatalogNumbers }}</dd>
      <dt class="col-sm-4">Occurrenceremarks</dt>
      <dd class="col-sm-8">{{ $item->occurrenceRemarks }}</dd>
      <dt class="col-sm-4">Organismid</dt>
      <dd class="col-sm-8">{{ $item->organismID }}</dd>
      <dt class="col-sm-4">Locationid</dt>
      <dd class="col-sm-8">{{ $item->locationID }}</dd>
      <dt class="col-sm-4">Taxonid</dt>
      <dd class="col-sm-8">{{ $item->taxonID }}</dd>
      <dt class="col-sm-4">Identificationid</dt>
      <dd class="col-sm-8">{{ $item->identificationID }}</dd>
    </dl>

    <div style="margin-top:12px;">
      <a class="btn" href="{{ route('occurrence.edit', $item) }}">Editar</a>
      <a class="btn" href="{{ route('occurrence.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection
