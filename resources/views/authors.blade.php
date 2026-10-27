
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Author Buku</h1>

    @forelse ($authors as $author)
        <ul>
            <li>ID: {{ $author->id }}</li>
            <li>Nama: {{ $author->name }}</li>
            <li>Foto: {{ $author->photo }}</li>
            <li>Bio: {{ $author->bio }}</li>
        </ul>
    @empty
        <p>Belum ada data author.</p>
    @endforelse
</body>
</html>
