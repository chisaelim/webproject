<?php
include("../init/db.php");

require_once('../init/func.php');

include("../includes/header.php");
include("../includes/navbar.php");

$user = loggedInUser();
if (!$user) {
    header('Location: ./login.php');
}


$task_error = '';
if (isset($_GET['task'])) {

    $task = $_GET['task'];
    if (empty($task)) {
        $task_error = 'Task is required';
    }

    if (empty($task_error)) {
        $query = $db->prepare("INSERT INTO tbl_task (task,status,id_user) VALUES ('$task','pending','$user->id_user')");
        if ($query->execute()) {
            header('Location: ./list.php');
        } else {
            $task_error = 'Failed to create task';
        }
    }
}
?>


<form action="./create.php" method="get" class="w-50 mx-auto">
    <h1>Create TO DO Form </h1>
    <div class="mb-3">
        <label for="task" class="form-label">Task</label>
        <input name="task" type="text" class="form-control" id="task">
        <span class="text-danger"><?php echo $task_error ?></span>
    </div>
    <div class="d-flex justify-content-between">
        <a href="/webproject/pages/list.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>


<?php
include("../includes/footer.php");
?>