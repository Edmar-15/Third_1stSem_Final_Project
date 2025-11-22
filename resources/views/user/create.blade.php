<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Add new user</h1>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder="Enter your name here" required>
        <label for="age">Age: </label>
        <input type="number" name="age" id="age" placeholder="Enter your age here" required>
        <label for="address">Address: </label>
        <input type="text" name="address" id="address" placeholder="Enter your address here" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>