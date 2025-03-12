<?php
include("../init/db.php");

require_once('../init/func.php');

include("../includes/header.php");
include("../includes/navbar.php");

if (!loggedInUser()) {
    header('Location: ./login.php');
}
?>

<div class="container">

    <div class="d-flex justify-content-between">
        <h1>TO DO List</h1>
        <div class="my-auto">
            <a class="btn btn-success" href="/webproject/pages/create.php">Create New</a>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </table>

</div>


<?php
include("../includes/footer.php");
?>