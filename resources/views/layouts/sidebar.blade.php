
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Inicio — IKIAM')</title>
  @vite(['resources/css/custom.css','resources/js/app.js'])
</head>
<body class="app">
  {{-- Sidebar --}}
  <aside class="sidebar">
    <div class="brand">
      <img src="{{ asset('favicon.ico') }}" alt="logo" class="brand-logo">
      <div class="brand-title">UTPL - VIRTOPSIA</div>
    </div>

    <nav class="menu">
  <a class="item {{ request()->routeIs('ikiambio-users.*') ? 'active' : '' }}" href="{{ route('ikiambio-users.index') }}">
    @include('svg.users')
    <span>Usuarios</span>
  </a>

  {{-- ==================== RECORD LEVEL ==================== --}}
  <div class="group collapsible {{ request()->routeIs('record-level.*') ? 'open' : '' }}" data-key="record-level">
    <button class="group-header" type="button">
      <span>RECORD LEVEL</span>
      <span class="chev" aria-hidden="true"></span>
    </button>
    <div class="group-items">
      <a class="item {{ request()->routeIs('record-level.types.*') ? 'active' : '' }}" href="{{ route('record-level.types.index') }}">
        @include('svg.check')
        <span>Registrar tipos</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.licenses.*') ? 'active' : '' }}" href="{{ route('record-level.licenses.index') }}">
        @include('svg.check')
        <span>Registrar licenses</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.rights-holder.*') ? 'active' : '' }}" href="{{ route('record-level.rights-holder.index') }}">
        @include('svg.check')
        <span>Registrar rightsHolder</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.access-rights.*') ? 'active' : '' }}" href="{{ route('record-level.access-rights.index') }}">
        @include('svg.check')
        <span>Registrar accessRights</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.institution-id.*') ? 'active' : '' }}" href="{{ route('record-level.institution-id.index') }}">
        @include('svg.check')
        <span>Registrar institutionID</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.collection-id.*') ? 'active' : '' }}" href="{{ route('record-level.collection-id.index') }}">
        @include('svg.check')
        <span>CollectionID</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.institution-code.*') ? 'active' : '' }}" href="{{ route('record-level.institution-code.index') }}">
        @include('svg.check')
        <span>InstitutionCode</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.collection-code.*') ? 'active' : '' }}" href="{{ route('record-level.collection-code.index') }}">
        @include('svg.check')
        <span>CollectionCode</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.owner-institution-code.*') ? 'active' : '' }}" href="{{ route('record-level.owner-institution-code.index') }}">
        @include('svg.check')
        <span>OwnerInstitutionCode</span>
      </a>
      <a class="item {{ request()->routeIs('record-level.basis-of-record.*') ? 'active' : '' }}" href="{{ route('record-level.basis-of-record.index') }}">
        @include('svg.check')
        <span>BasisOfRecord</span>
      </a>
    </div>
  </div>

  {{-- ====================== OCCURRENCE ===================== --}}
  <div class="group collapsible {{ request()->routeIs('occurrence.*') ? 'open' : '' }}" data-key="occurrence">
    <button class="group-header" type="button">
      <span>OCCURRENCE</span>
      <span class="chev" aria-hidden="true"></span>
    </button>
    <div class="group-items">
      <a class="item {{ request()->routeIs('occurrence.organism-quantity-type.*') ? 'active' : '' }}" href="{{ route('occurrence.organism-quantity-type.index') }}">
        @include('svg.check')
        <span>organismQuantityType</span>
      </a>
      <a class="item {{ request()->routeIs('occurrence.sex.*') ? 'active' : '' }}" href="{{ route('occurrence.sex.index') }}">
        @include('svg.check')
        <span>Sex</span>
      </a>
      <a class="item {{ request()->routeIs('occurrence.life-stage.*') ? 'active' : '' }}" href="{{ route('occurrence.life-stage.index') }}">
        @include('svg.check')
        <span>LifeStage</span>
      </a>
      <a class="item {{ request()->routeIs('occurrence.reproductive-condition.*') ? 'active' : '' }}" href="{{ route('occurrence.reproductive-condition.index') }}">
        @include('svg.check')
        <span>ReproductiveCondition</span>
      </a>
      <a class="item {{ request()->routeIs('occurrence.establishment-means.*') ? 'active' : '' }}" href="{{ route('occurrence.establishment-means.index') }}">
        @include('svg.check')
        <span>EstablishmentMeans</span>
      </a>
      <a class="item {{ request()->routeIs('occurrence.disposition.*') ? 'active' : '' }}" href="{{ route('occurrence.disposition.index') }}">
        @include('svg.check')
        <span>Disposition</span>
      </a>
    </div>
  </div>

  <a class="item" href="#">
    @include('svg.admins')
    <span>Usuarios administradores</span>
  </a>
</nav>

  </aside>

  {{-- Contenido --}}
  <section class="content">
    <header class="topbar">
      <div class="topbar-title">@yield('page_title','Inicio')</div>
      <div class="topbar-user">
        @include('svg.user')
        <span>Admin MS2S</span>
      </div>
    </header>

    <main class="content-body">
      @yield('content')
    </main>
  </section>
</body>
</html>



{{-- <!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Inicio — IKIAM')</title>
  @vite(['resources/css/custom.css','resources/js/app.js'])
</head>
<body class="app">
  <aside class="sidebar">
    <div class="brand">
      <img src="{{ asset('favicon.ico') }}" alt="logo" class="brand-logo">
      <div class="brand-title">UTPL - VIRTOPSIA</div>
    </div>

    <nav class="menu">
      <a class="item" href="{{ route('ikiambio-users.index') }}">
        @include('svg.users')
        <span>Usuarios</span>
      </a>

      <a class="item" href="#">
        @include('svg.cap')
        <span>Titulaciones</span>
      </a>

      <a class="item" href="#">
        @include('svg.list')
        <span>Materias Usuarios</span>
      </a>

      <div class="group">REGISTROS:
        
        <div class="group collapsible {{ request()->is('record-level*') ? 'open' : '' }}" data-key="record-level">
          <button class="group-header" type="button">
            <span>RECORD LEVEL</span>
            <span class="chev" aria-hidden="true"></span>
          </button>

          <div class="group-items">

            <a class="item {{ request()->routeIs('record-level.types.*') ? 'active' : '' }}"
              href="{{ route('record-level.types.index') }}">
              @include('svg.check')
              <span>Registrar tipos</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.licenses.*') ? 'active' : '' }}"
              href="{{ route('record-level.licenses.index') }}">
              @include('svg.check')
              <span>Registrar licenses</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.rights-holder.*') ? 'active' : '' }}"
              href="{{ route('record-level.rights-holder.index') }}">
              @include('svg.check')
              <span>Registrar rightsHolder</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.access-rights.*') ? 'active' : '' }}"
              href="{{ route('record-level.access-rights.index') }}">
              @include('svg.check')
              <span>Registrar accessRights</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.institution-id.*') ? 'active' : '' }}"
              href="{{ route('record-level.institution-id.index') }}">
              @include('svg.check')
              <span>Registrar institutionID</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.collection-id.*') ? 'active' : '' }}"
              href="{{ route('record-level.collection-id.index') }}">
              @include('svg.check')
              <span>Registrar collectionID</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.institution-code.*') ? 'active' : '' }}"
              href="{{ route('record-level.institution-code.index') }}">
              @include('svg.check')
              <span>Registrar institutionCode</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.collection-code.*') ? 'active' : '' }}"
              href="{{ route('record-level.collection-code.index') }}">
              @include('svg.check')
              <span>Registrar collectionCode</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.owner-institution-code.*') ? 'active' : '' }}"
              href="{{ route('record-level.owner-institution-code.index') }}">
              @include('svg.check')
              <span>Registrar ownerInstitutionCode</span>
            </a>
            <a class="item {{ request()->routeIs('record-level.basis-of-record.*') ? 'active' : '' }}"
              href="{{ route('record-level.basis-of-record.index') }}">
              @include('svg.check')
              <span>Registrar basisOfRecord</span>
            </a>
          </div>
        </div>

        <div class="group collapsible {{ request()->routeIs('occurrence.*') ? 'open' : '' }}" data-key="occurrence">
          <button class="group-header" type="button">
            <span>OCCURRENCE</span>
            <span class="chev" aria-hidden="true"></span>
          </button>

          <div class="group-items">
            <a class="item {{ request()->routeIs('occurrence.organism-quantity-type.*') ? 'active' : '' }}"
              href="{{ route('occurrence.organism-quantity-type.index') }}">
              @include('svg.check')
              <span>Registrar organismQuantityType</span>
            </a>

            <a class="item" href="#">
              @include('svg.check')
              <span>Sex</span>
            </a>
            <a class="item" href="#">
              @include('svg.check')
              <span>LifeStage</span>
            </a>
            <a class="item" href="#">
              @include('svg.check')
              <span>ReproductiveCondition</span>
            </a>
            <a class="item" href="#">
              @include('svg.check')
              <span>EstablishmentMeans</span>
            </a>
            <a class="item" href="#">
              @include('svg.check')
              <span>Disposition</span>
            </a>
          </div>
        </div>
      </div>

      <a class="item" href="#">
        @include('svg.admins')
        <span>Usuarios administradores</span>
      </a>
    </nav>
  </aside>

  <section class="content">
    <header class="topbar">
      <div class="topbar-title">@yield('page_title','Inicio')</div>
      <div class="topbar-user">
        @include('svg.user')
        <span>Admin MS2S</span>
      </div>
    </header>

    <main class="content-body">
      @yield('content')
    </main>
  </section>
</body>
</html>
 --}}