@extends('layouts.sidebar')

@section('title','Occurrence — Crear')
@section('page_title','Crear Occurrence')

@section('content')
<div class="card card-body">
  <form method="POST" action="{{ route('occurrence.store') }}">
    @csrf
    @include('pages.occurrence.partials.form')
    <div class="mt-3">
      <button class="btn btn-primary">Guardar</button>
      <a class="btn btn-outline-secondary" href="{{ route('occurrence.index') }}">Cancelar</a>
    </div>
  </form>
</div>
@endsection
