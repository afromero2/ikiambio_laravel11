
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name','IKIAMBIO'))</title>
  @vite('resources/js/app.js')
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand" href="{{ route('ikiambio-users.index') }}">IKIAMBIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav01">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="nav01" class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('ikiambio-users.index') }}">Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ikiambio-users.create') }}">Nuevo</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container py-4">
  @if(session('ok'))
    <div class="alert alert-success">{{ session('ok') }}</div>
  @endif
  @yield('content')
</main>
</body>
</html>



{{-- <!doctype html>
<html lang="es" class="h-full bg-gray-50">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', config('app.name','IKIAMBIO'))</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-full text-gray-900">
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-4 flex items-center justify-between">
      <a href="{{ route('ikiambio-users.index') }}" class="text-xl font-semibold">IKIAMBIO</a>
      <nav class="flex gap-4">
        <a class="text-sm text-gray-700 hover:text-indigo-600" href="{{ route('ikiambio-users.index') }}">Usuarios</a>
        <a class="text-sm inline-flex items-center px-3 py-1.5 rounded-md bg-indigo-600 text-white hover:bg-indigo-700" href="{{ route('ikiambio-users.create') }}">Nuevo</a>
      </nav>
    </div>
  </header>

  <main class="mx-auto max-w-7xl px-4 py-8">
    @if(session('ok'))
      <div class="mb-6 rounded-md bg-green-50 p-4 text-green-800 border border-green-200">{{ session('ok') }}</div>
    @endif
    @yield('content')
  </main>
</body>
</html>
 --}}