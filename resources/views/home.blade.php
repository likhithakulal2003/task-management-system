<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a3caf1ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Simple Task Management System</h1>
    <p>Manage your daily tasks</p>

    <a href="/tasks" class="btn">Tasks</a>
</div>

</body>
</html>
