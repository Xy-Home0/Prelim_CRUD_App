$(document).ready(function () {
    // Load tasks
    $("#task-list").load("read.php");

    // Handle task creation
    $("form").on("submit", function (e) {
        e.preventDefault();
        $.post("create.php", $(this).serialize(), function (data) {
            $("#task-list").load("read.php");
            alert(data); // Show success message
        });
    });

    // Handle task editing
    $(document).on("click", ".edit-btn", function () {
        let taskId = $(this).data("id");
        let taskName = prompt("Enter new task name:");
        let taskDescription = prompt("Enter new task description:");

        if (taskName && taskDescription) {
            $.post("update.php", {
                task_id: taskId,
                task_name: taskName,
                task_description: taskDescription
            }, function (data) {
                $("#task-list").load("read.php");
                alert(data); // Show success message
            });
        }
    });

    // Handle task deletion
    $(document).on("click", ".delete-btn", function () {
        let taskId = $(this).data("id");

        if (confirm("Are you sure you want to delete this task?")) {
            $.post("delete.php", { task_id: taskId }, function (data) {
                $("#task-list").load("read.php");
                alert(data); // Show success message
            });
        }
    });
});