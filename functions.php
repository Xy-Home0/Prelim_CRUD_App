<?php
include 'database.php';

// Function to create a task
function createTask($task_name, $task_description) {
    global $conn;
    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$task_name', '$task_description')";
    return $conn->query($sql);
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