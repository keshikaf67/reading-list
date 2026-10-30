<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Reading List')</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; }
        .container { max-width: 760px; margin: 2rem auto; background: #fff; padding: 1.5rem; border-radius: 8px; }
        h1 a { color: inherit; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { text-align: left; padding: .5rem; border-bottom: 1px solid #ddd; }
        .btn, .btn-danger { color: #fff; padding: .4rem .8rem; border: 0; border-radius: 4px; text-decoration: none; cursor: pointer; font-size: 1rem; }
        .btn { background: #2563eb; }
        .btn-danger { background: #dc2626; }
        .flash { background: #dcfce7; padding: .6rem; border-radius: 4px; }
        .error { color: #dc2626; margin: .25rem 0 0; }
        .field { margin-bottom: 1rem; }
        .field input, .field select { width: 100%; padding: .5rem; box-sizing: border-box; }
        .filters a { margin-right: .75rem; }
        .filters a.active { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1><a href="{{ route('books.index') }}">Reading List</a></h1>

        @if (session('success'))
            <p class="flash">{{ session('success') }}</p>
        @endif

        @yield('content')
    </div>
</body>
</html>
