<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini Ecommerce')</title>
    <style>
        body{font-family:Arial;margin:0;background:#f6f7fb;}
        .container{max-width:1100px;margin:0 auto;padding:16px;}
        .btn{display:inline-block;padding:10px 14px;border-radius:8px;text-decoration:none;border:1px solid #222;}
        .btn-dark{background:#111;color:#fff;}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
        .card{background:#fff;border-radius:12px;padding:16px;box-shadow:0 6px 18px rgba(0,0,0,.06);}
        .muted{color:#666;}
        .badge{display:inline-block;padding:4px 10px;border-radius:999px;background:#eef;color:#223;font-size:12px;}
        .hero{background:#111;color:#fff;border-radius:16px;padding:30px;display:flex;justify-content:space-between;align-items:center;gap:20px;}
        .hero h1{margin:0 0 8px 0;font-size:30px;}
        .hero p{margin:0;color:#d8d8d8;}
        @media(max-width:900px){ .grid{grid-template-columns:1fr;} .hero{flex-direction:column;align-items:flex-start;} }
    </style>
</head>
<body>

    {{-- Header + Menu --}}
    @include('partials.header')

    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
