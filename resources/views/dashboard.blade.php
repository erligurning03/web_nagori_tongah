<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1> Ini Halaman Dashboard Ya!!! </h1>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Forum Diskusi</a>

</form>
</body>
</html>