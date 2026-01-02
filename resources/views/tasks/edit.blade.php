<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a3caf1ff;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 20px;
            padding: 12px;
            background: #0d6efd;
            color: white;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0b5ed7;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Task</h2>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label>Description</label>
        <textarea name="description" required>{{ $task->description }}</textarea>

        <label>Priority</label>
        <select name="priority" required>
            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
        </select>

        <label>Status</label>
        <select name="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <button type="submit">Update Task</button>
    </form>

    <a href="/tasks" class="back-link">← Back to Tasks</a>
</div>
</body>
</html>
