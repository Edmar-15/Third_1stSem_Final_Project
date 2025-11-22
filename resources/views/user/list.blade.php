<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listahan</title>
</head>
<body>
        @if(session('success'))
        <div id="success-message" style="background-color:#d4edda;color:#155724;padding:10px;border-radius:5px;margin-bottom:10px;">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const msg = document.getElementById('success-message');
                if (msg) msg.style.display = 'none';
            }, 3000); // hides after 3 seconds
        </script>
    @endif
    <h1>Mga users</h1>
    <a href="/">balik sa main</a><br><br>
    @foreach ($users as $item)
        <br><a href="{{ route('user.specific',$item->name) }}">{{ $item->name }}</a><br>
    @endforeach
</body>
</html>