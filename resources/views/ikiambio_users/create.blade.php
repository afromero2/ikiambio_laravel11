
{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')
@section('title','Nuevo usuario')

@section('content')
<h1 class="h4 mb-3">Nuevo usuario</h1>

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('ikiambio-users.store') }}" class="card card-body">
  @csrf

  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">UtplId</label>
      <input name="utplId" value="{{ old('utplId') }}" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Identificación</label>
      <input name="identification" value="{{ old('identification') }}" class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Nombres *</label>
      <input name="firstName" value="{{ old('firstName') }}" required class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Apellidos *</label>
      <input name="lastName" value="{{ old('lastName') }}" required class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Username *</label>
      <input name="username" value="{{ old('username') }}" required class="form-control">
    </div>
  </div>

  <div class="mt-3">
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('ikiambio-users.index') }}" class="btn btn-link">Cancelar</a>
  </div>
</form>
@endsection


{{-- @extends('layouts.app')
@section('title','Nuevo usuario')

@section('content')
<h1 class="text-2xl font-semibold mb-6">Nuevo usuario</h1>

@if ($errors->any())
  <div class="mb-6 rounded-md border border-red-200 bg-red-50 p-4 text-red-800">
    <ul class="list-disc ml-5">
      @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('ikiambio-users.store') }}" class="space-y-5 max-w-xl">
  @csrf
  <div>
    <label class="block text-sm font-medium text-gray-700">UtplId</label>
    <input name="utplId" value="{{ old('utplId') }}" class="mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm font-medium text-gray-700">Nombres *</label>
      <input name="firstName" value="{{ old('firstName') }}" required class="mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-700">Apellidos *</label>
      <input name="lastName" value="{{ old('lastName') }}" required class="mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700">Identificación</label>
    <input name="identification" value="{{ old('identification') }}" class="mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700">Username *</label>
    <input name="username" value="{{ old('username') }}" required class="mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
  </div>

  <div class="pt-2">
    <button class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">Guardar</button>
    <a href="{{ route('ikiambio-users.index') }}" class="ml-3 text-gray-700 hover:text-gray-900">Cancelar</a>
  </div>
</form>
@endsection
 --}}