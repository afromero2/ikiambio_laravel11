
{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar') 
@section('title','Detalle usuario')

@section('content')
<h1 class="h4 mb-3">Usuario #{{ $item->id }}</h1>

<div class="card">
  <div class="card-body">
    <dl class="row mb-0">
      <dt class="col-sm-3">Nombre</dt>
      <dd class="col-sm-9">{{ $item->full_name }}</dd>

      <dt class="col-sm-3">Username</dt>
      <dd class="col-sm-9">{{ $item->username }}</dd>

      <dt class="col-sm-3">UtplId</dt>
      <dd class="col-sm-9">{{ $item->utplId ?? '—' }}</dd>

      <dt class="col-sm-3">Identificación</dt>
      <dd class="col-sm-9">{{ $item->identification ?? '—' }}</dd>
    </dl>

    <div class="mt-3">
      <a class="btn btn-outline-primary" href="{{ route('ikiambio-users.edit',$item) }}">Editar</a>
      <a class="btn btn-link" href="{{ route('ikiambio-users.index') }}">Volver</a>
    </div>
  </div>
</div>
@endsection


{{-- @extends('layouts.app')
@section('title','Detalle usuario')

@section('content')
<h1 class="text-2xl font-semibold mb-6">Usuario #{{ $item->id }}</h1>

<div class="bg-white rounded-lg border border-gray-200 p-6 max-w-2xl">
  <dl class="divide-y divide-gray-100">
    <div class="py-3 grid grid-cols-3 gap-4">
      <dt class="text-sm font-medium text-gray-500">Nombre</dt>
      <dd class="col-span-2 text-sm text-gray-900">{{ $item->full_name }}</dd>
    </div>
    <div class="py-3 grid grid-cols-3 gap-4">
      <dt class="text-sm font-medium text-gray-500">Username</dt>
      <dd class="col-span-2 text-sm text-gray-900">{{ $item->username }}</dd>
    </div>
    <div class="py-3 grid grid-cols-3 gap-4">
      <dt class="text-sm font-medium text-gray-500">UtplId</dt>
      <dd class="col-span-2 text-sm text-gray-900">{{ $item->utplId ?? '—' }}</dd>
    </div>
    <div class="py-3 grid grid-cols-3 gap-4">
      <dt class="text-sm font-medium text-gray-500">Identificación</dt>
      <dd class="col-span-2 text-sm text-gray-900">{{ $item->identification ?? '—' }}</dd>
    </div>
  </dl>

  <div class="mt-6">
    <a class="text-indigo-600 hover:text-indigo-800" href="{{ route('ikiambio-users.edit',$item) }}">Editar</a>
    <a class="ml-4 text-gray-700 hover:text-gray-900" href="{{ route('ikiambio-users.index') }}">Volver</a>
  </div>
</div>
@endsection
 --}}