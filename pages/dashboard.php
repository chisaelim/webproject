<?php
include("../init/db.php");

require_once('../init/func.php');

include("../includes/header.php");
include("../includes/navbar.php");

if (!loggedInUser()) {
    header('Location: ./login.php');
}
?>

<h1>dashboard</h1>


<?php
include("../includes/footer.php");
?>