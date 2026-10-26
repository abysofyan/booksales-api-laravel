
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Authors</title>
</head>
<body>
    <h1>Halaman Author Buku</h1>

    @foreach ($authors as $item)
        <ul>
            <li>ID: {{ $item['id'] }}</li>
            <li>Nama: {{ $item['name'] }}</li>
            <li>Foto: {{ $item['photo'] }}</li>
            <li>Bio: {{ $item['bio'] }}</li>
        </ul>
    @endforeach
</body>
</html>
