<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Tugas</title>
</head>
<body>
    <h1>Ubah Tugas</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" required value="{{ $task->title }}">
        </div>

        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
