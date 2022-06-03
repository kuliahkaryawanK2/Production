<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style --}}
    @stack('prpend-style')
    @include('Frontend.template.style')
    @stack('addon-style')

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    
</head>
<body>
    {{-- Navbar --}}
    @include('Frontend.template.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('Frontend.template.footer')

    {{-- Script --}}
    @stack('prpend-script')
    @include('Frontend.template.script')
    @stack('addon-script')
</body>
</html>
