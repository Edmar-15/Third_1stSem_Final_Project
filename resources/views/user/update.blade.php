<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Update the user</h1>
    <form action="{{ route('user.save_update', $user->id) }}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
        <label for="age">Age: </label>
        <input type="number" name="age" id="age" value="{{ $user->age }}" required>
        <label for="address">Address: </label>
        <input type="text" name="address" id="address" value="{{ $user->address }}" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>