<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $task_description = $_POST['task_description'];

    if (createTask($task_name, $task_description)) {
        echo "New task created successfully";
    } else {
        echo "Error creating task";
    }
}
?>