@extends('layouts.sidebar')
@section('page_title','Record level')

@section('content')
<div class="d-flex" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
  <h1 style="margin:0;font-size:1.25rem;">Record level</h1>
  <a href="{{ route('record-level.create') }}" class="btn primary">Nuevo</a>
</div>

<div class="card">
  <div class="card-body" style="padding:0;">
    <div style="overflow:auto;">
      <table class="table">
        <thead>
          <tr>
            <th>Record level id</th>
            <th>Type</th>
            <th>Modified</th>
            <th>Language</th>
            <th>License</th>
            <th>Rightsholder</th>
            <th style="text-align:right;">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
          <tr>
            <td>{{ $item->record_level_id }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->modified }}</td>
            <td>{{ $item->language }}</td>
            <td>{{ $item->license }}</td>
            <td>{{ $item->rightsHolder }}</td>
            <td style="text-align:right;">
              <a class="btn ghost" href="{{ route('record-level.show', $item) }}">Ver</a>
              <a class="btn ghost warn" href="{{ route('record-level.edit', $item) }}">Editar</a>
              <form style="display:inline" method="POST" action="{{ route('record-level.destroy', $item) }}" onsubmit="return confirm('¿Eliminar?')">
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
