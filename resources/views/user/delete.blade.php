<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listahan</title>
</head>
<body>
    <h1>Delete users</h1>
    <a href="/">balik sa main</a><br><br>
    @foreach ($users as $item)
        <br><a href="{{ route('user.delete_prompt',$item->id) }}">{{ $item->name }}</a><br>
    @endforeach
</body>
</html>