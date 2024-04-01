<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tugas</title>
</head>
<body>
    <h1>Daftar Tugas-tugas</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Selesai</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->completed }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
