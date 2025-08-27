@extends('layouts.sidebar')
@section('page_title','Detalle — Organism')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Detalle — Organism #{ $item->organismID }</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-4">Organismid</dt>
      <dd class="col-sm-8">{{ $item->organismID }}</dd>
      <dt class="col-sm-4">Associatedoccurrences</dt>
      <dd class="col-sm-8">{{ $item->associatedOccurrences }}</dd>
      <dt class="col-sm-4">Associatedorganisms</dt>
      <dd class="col-sm-8">{{ $item->associatedOrganisms }}</dd>
      <dt class="col-sm-4">Previousidentifications</dt>
      <dd class="col-sm-8">{{ $item->previousIdentifications }}</dd>
    </dl>

    <div style="margin-top:12px;">
      <a class="btn" href="{{ route('organism.edit', $item) }}">Editar</a>
      <a class="btn" href="{{ route('organism.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection
