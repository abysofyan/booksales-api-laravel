<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>

    @foreach ($genres as $genre)
        <ul>
            <li>ID: {{ $genre['id'] }}</li>
            <li>Nama Genre: {{ $genre['name'] }}</li>
            <li>Deskripsi: {{ $genre['description'] }}</li>
        </ul>
    @endforeach
</body>
</html>
