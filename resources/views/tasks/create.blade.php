<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Task</title>
</head>
<body>
    <div style="text-align: center; margin-top: 20px;">
        <h2>Edit Task</h2>

        <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title:</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $task->title }}" required>
            <br>
            <br>
            <label for="description">Description:</label>
            <br>
            <textarea name="description" id="description" required>{{ $task->description }}</textarea>
            <br>
            <br>
            <button type="submit">Update Task</button>
        </form>
    </div>
</body>
</html>
