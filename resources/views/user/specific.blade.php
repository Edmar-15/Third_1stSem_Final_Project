<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific</title>
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

    <h1>Specific na user</h1>
    <a href="/listahan">balik sa listahan</a><br><br>
    <p><strong>Name: </strong>{{ $user->name }}</p>
    <p><strong>Age: </strong>{{ $user->age }}</p>
    <p><strong>Address: </strong>{{ $user->address }}</p>
    <p><strong>Created at: </strong>{{ $user->created_at }}</p>
    <p><strong>Updated at: </strong>{{ $user->updated_at }}</p>
</body>
</html>