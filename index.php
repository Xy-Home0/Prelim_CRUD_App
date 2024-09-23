<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS -->
</head>
<body>
    <h1>Create a New Task</h1>
    <form action="create.php" method="POST">
        <label for="task_name">Task Name:</label>
        <input type="text" id="task_name" name="task_name" required><br>

        <label for="task_description">Task Description:</label>
        <textarea id="task_description" name="task_description" required></textarea><br>

        <button type="submit">Create Task</button>
    </form>

    <h2>All Tasks</h2>
    <div id="task-list">
        <?php include 'read.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script> <!-- Optional JS -->
</body>
</html>