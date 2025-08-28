
{{-- @extends('layouts.app') --}}
@extends('layouts.sidebar')
@section('title','Editar usuario')

@section('content')
<h1 class="h4 mb-3">Editar usuario #{{ $item->id }}</h1>

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('ikiambio-users.update',$item) }}" class="card card-body">
  @csrf @method('PUT')

  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">UtplId</label>
      <input name="utplId" value="{{ old('utplId',$item->utplId) }}" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Identificación</label>
      <input name="identification" value="{{ old('identification',$item->identification) }}" class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Nombres *</label>
      <input name="firstName" value="{{ old('firstName',$item->firstName) }}" required class="form-control">
    </div>
    <div class="col-md-6">
      <label class="form-label">Apellidos *</label>
      <input name="lastName" value="{{ old('lastName',$item->lastName) }}" required class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Username *</label>
      <input name="username" value="{{ old('username',$item->username) }}" required class="form-control">
    </div>
  </div>

  <div class="mt-3">
    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('ikiambio-users.index') }}" class="btn btn-link">Cancelar</a>
  </div>
</form>
@endsection
