<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>laravel-comics</title>
</head>
<body>
    {{-- includo header --}}
    @include('partials.header')
    {{-- ricambio dinamico del contenuto --}}
    @yield('content')
    {{-- includo footer --}}
    @include('partials.footer')
</body>
</html>
