<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a3caf1ff;
            padding: 50px;
        }
        form {
            background: white;
            padding: 50px;
            max-width: 500px;
            margin: auto;
            border-radius: 8px;
            
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background: #0d6efd;
            color: white;
            border: none;
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Add New Task</h2>

<form method="POST" action="/tasks">
    @csrf

    <label>Title</label>
    <input type="text" name="title" required>

    <label>Description</label>
    <textarea name="description" required></textarea>

    <label>Priority</label>
    <select name="priority" required>
        <option value="">Select Priority</option>
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>

    <button type="submit">Submit</button>
</form>

</body>
</html>
