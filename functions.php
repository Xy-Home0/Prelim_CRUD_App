<?php
include 'database.php';

// Function to create a task
function createTask($task_name, $task_description, $due_date) {
    global $conn;

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO tasks (task_name, task_description, due_date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $task_name, $task_description, $due_date);
    
    return $stmt->execute();
}

// Function to get all tasks
function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    return $conn->query($sql);
}

// Function to update a task
function updateTask($task_id, $task_name, $task_description) {
    global $conn;
    $sql = "UPDATE tasks SET task_name='$task_name', task_description='$task_description' WHERE id=$task_id";
    return $conn->query($sql);
}

// Function to delete a task
function deleteTask($task_id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id=$task_id";
    return $conn->query($sql);
}
?>