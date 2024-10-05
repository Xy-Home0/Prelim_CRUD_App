<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];

    if (deleteTask($task_id)) {
        echo "Task deleted successfully";
    } else {
        echo "Error deleting task";
    }
}
?>