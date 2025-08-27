@extends('layouts.sidebar')
@section('page_title','Nuevo — Organism')

@section('content')
<h1 class="h4" style="margin:0 0 12px 0;">Nuevo — Organism</h1>

@if($errors->any())
  <div class="alert alert-danger" style="border:1px solid #fecaca;background:#fee2e2;color:#7f1d1d;">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{ $e }</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('organism.store') }}" class="card card-body">
  @csrf

  <div class="form-grid">

    <div>
      <label class="label">Associatedoccurrences</label>
      <textarea name="associatedOccurrences" class="input" rows="3">{{ old('associatedOccurrences', isset($item)? $item->associatedOccurrences : '') }}</textarea>
    </div>

    <div>
      <label class="label">Associatedorganisms</label>
      <textarea name="associatedOrganisms" class="input" rows="3">{{ old('associatedOrganisms', isset($item)? $item->associatedOrganisms : '') }}</textarea>
    </div>

    <div>
      <label class="label">Previousidentifications</label>
      <textarea name="previousIdentifications" class="input" rows="3">{{ old('previousIdentifications', isset($item)? $item->previousIdentifications : '') }}</textarea>
    </div>
  </div>

  <div style="margin-top:12px;">
    <button class="btn primary">Guardar</button>
    <a href="{{ route('organism.index') }}" class="btn">Cancelar</a>
  </div>
</form>
@endsection
