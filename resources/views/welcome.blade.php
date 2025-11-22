<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraG</title>
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

    <h1>MyLaravelTesting</h1>
    <a href="/listahan">Dito lalabas mga users</a>
    <br>
    <a href="{{ route('user.create') }}">Dito naman us mag-add ng user</a>
    <br>
    <a href="{{ route('user.edit') }}">Dito naman tayo mag update</a>
    <br>
    <a href="{{ route('user.delete_user') }}">Dito naman ay delete</a>
</body>
</html>