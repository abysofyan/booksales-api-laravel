
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>

    @foreach ($genres as $item)
        <ul>
            <li>ID: {{ $item['id'] }}</li>
            <li>Nama Genre: {{ $item['name'] }}</li>
            <li>Deskripsi: {{ $item['description'] }}</li>
        </ul>
    @endforeach
</body>
</html>
