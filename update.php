<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];

    if (updateTask($task_id, $task_name, $task_description)) {
        echo "Task updated successfully";
    } else {
        echo "Error updating task";
    }
}
?>