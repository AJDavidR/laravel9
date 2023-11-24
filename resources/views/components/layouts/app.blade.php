<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')" > --}}
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}" >
    {{-- al crear la $metaDescription tiene que ser camel case y para referenciarlo --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
    {{-- @include('partials.navigation')
    @yield('content') --}}
    <x-layouts.navigation/>

    @if(session('status'))
    <div>{{ session('status') }}</div>
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('status') }}
    </div>
@endif


{{-- {nota
    @if(session('status'))
    <div>{{session('status')}}</div>
    @endif} --}}

    {{ $slot }}

</body>
</html>