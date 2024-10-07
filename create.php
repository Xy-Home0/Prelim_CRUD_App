<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];
    $due_date = $_POST['due_date'];

    if (createTask($task_name, $task_description, $due_date)) {
        echo "Task created successfully";
    } else {
        echo "Error creating task";
    }
}
?>