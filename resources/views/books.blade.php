
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @forelse ($books as $book)
        <ul>
            <li>ID: {{ $book->id }}</li>
            <li>Judul: {{ $book->title }}</li>
            <li>Deskripsi: {{ $book->description }}</li>
            <li>Harga: Rp{{ number_format($book->price, 0, ',', '.') }}</li>
            <li>Stok: {{ $book->stock }}</li>
            <li>Foto Cover: {{ $book->cover_photo }}</li>
            <li>ID Genre: {{ $book->genre_id }}</li>
            <li>ID Author: {{ $book->author_id }}</li>
        </ul>
    @empty
        <p>Belum ada data buku.</p>
    @endforelse
</body>
</html>
