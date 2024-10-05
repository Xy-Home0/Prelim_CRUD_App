<?php
include 'functions.php';

$result = getTasks();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row['task_name'] . "</h2>";
        echo "<p>" . $row['task_description'] . "</p>";
        echo "<p>Created At: " . $row['created_at'] . "</p>";
        echo "<button class='edit-btn' data-id='" . $row['id'] . "'>Edit</button>";
        echo "<button class='delete-btn' data-id='" . $row['id'] . "'>Delete</button>";
        echo "</div>";
    }
} else {
    echo "No tasks found";
}
?>