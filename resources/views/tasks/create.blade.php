<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Baru</title>
</head>
<body>
    <h1>Tugas Baru</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/tasks" method="POST">
        @csrf
        <div>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>
