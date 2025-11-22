<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific</title>
</head>
<body>
    <h1>Delete this user?</h1>
    <a href="{{ route('user.delete_user') }}">balik sa listahan ng delete</a><br><br>
    <p><strong>Name: </strong>{{ $user->name }}</p>
    <p><strong>Age: </strong>{{ $user->age }}</p>
    <p><strong>Address: </strong>{{ $user->address }}</p>
    <p><strong>Created at: </strong>{{ $user->created_at }}</p>
    <p><strong>Updated at: </strong>{{ $user->updated_at }}</p>
    <form action="{{ route('user.delete', $user->id) }}" method="post">
        @csrf
        <button type="submit" onclick="return confirm('Do you want to delete this user?')">Delete</button>
    </form>
</body>
</html>