@extends('layouts.sidebar')
@section('page_title','Taxon')

@section('content')
<div class="d-flex" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
  <h1 style="margin:0;font-size:1.25rem;">Taxon</h1>
  <a href="{{ route('taxon.create') }}" class="btn primary">Nuevo</a>
</div>

<div class="card">
  <div class="card-body" style="padding:0;">
    <div style="overflow:auto;">
      <table class="table">
        <thead>
          <tr>
            <th>Taxonid</th>
            <th>Scientificnameid</th>
            <th>Scientificname</th>
            <th>Namepublishedin</th>
            <th>Namepublishedinyear</th>
            <th>Higherclassification</th>
            <th style="text-align:right;">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
          <tr>
            <td>{{ $item->taxonID }}</td>
            <td>{{ $item->scientificNameID }}</td>
            <td>{{ $item->scientificName }}</td>
            <td>{{ $item->namePublishedIn }}</td>
            <td>{{ $item->namePublishedInYear }}</td>
            <td>{{ $item->higherClassification }}</td>
            <td style="text-align:right;">
              <a class="btn ghost" href="{{ route('taxon.show', $item) }}">Ver</a>
              <a class="btn ghost warn" href="{{ route('taxon.edit', $item) }}">Editar</a>
              <form style="display:inline" method="POST" action="{{ route('taxon.destroy', $item) }}" onsubmit="return confirm('¿Eliminar?')">
                @csrf @method('DELETE')
                <button class="btn ghost danger" type="submit">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="7" style="text-align:center;color:#6b7280;padding:20px;">Sin registros</td></tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

<div style="margin-top:12px;">
  { $items->links() }
</div>
@endsection
