<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Tasks List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a3caf1ff;
            padding: 50px;
        }
        h1 {
            text-align: center;
        }
        .btn {
            padding: 10px 20px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #172843ff;
            color: white;
        }
        .icon-btn {
            border: none;
            background: none;
            font-size: 18px;
            cursor:pointer;
        }

        .edit-btn {
            color: #198754; 
            margin-right: 10px;
        }

        .delete-btn {
            color: #dc3545; 
        }
        .icon-btn:hover {
            opacity: 0.7;
        }

    </style>
</head>
<body>

<h1>Tasks List</h1>

<a href="/tasks/create" class="btn">Add Task</a>

@if($tasks->count() > 0)
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Priority</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->priority }}</td>
        <td>{{ $task->status }}</td>
         <td>
            <a href="/tasks/{{ $task->id }}/edit" class="icon-btn edit-btn" title="Edit Task">
                <i class="fas fa-pen"></i>
            </a>

            <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="icon-btn delete-btn" title="Delete Task"
                        onclick="return confirm('Are you sure you want to delete this task?')">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>
@else
<p>No tasks available.</p>
@endif

</body>
</html>
