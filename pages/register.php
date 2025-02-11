<?php
include("../init/db.php");
include("../includes/header.php");
include("../includes/navbar.php");


$userlabel_error = $username_error = $passwd_error = $confirm_passwd_error = "";

if (isset($_GET['userlabel']) && isset($_GET['username']) && isset($_GET['passwd']) && isset($_GET['confirm_passwd'])) {
  $userlabel = $_GET['userlabel'];
  $username = $_GET['username'];
  $passwd = $_GET['passwd'];
  $confirm_passwd = $_GET['confirm_passwd'];

  if (empty($userlabel)) {
    $userlabel_error = "User Label is required";
  }
  if (empty($username)) {
    $username_error = "Username is required";
  }
  if (empty($passwd)) {
    $passwd_error = "Password is required";
  } else {
    if ($passwd != $confirm_passwd) {
      $confirm_passwd_error = "Password does not match";
    }
  }

  if (empty($userlabel_error) && empty($username_error) && empty($passwd_error) && empty($confirm_passwd_error)) {

    $query = $db->prepare("INSERT INTO tbl_user (userlabel,username,passwd) VALUES ('$userlabel','$username','$passwd')");
    if ($query->execute()) {
      header("Location: ./login.php");
    } else {
      header("Location: ./register.php");
    }
  }
}


?>

<form action="./register.php" method="get" class="w-50 mx-auto">
  <h1>Register Form </h1>
  <div class="mb-3">
    <label for="userlabel" class="form-label">User Label</label>
    <input name="userlabel" type="text" class="form-control" id="userlabel">
    <span class="text-danger"><?php echo $userlabel_error ?></span>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="username">
    <span class="text-danger"><?php echo $username_error ?></span>

  </div>
  <div class="mb-3">
    <label for="passwd" class="form-label">Password</label>
    <input name="passwd" type="password" class="form-control" id="passwd">
    <span class="text-danger"><?php echo $passwd_error ?></span>

  </div>
  <div class="mb-3">
    <label for="confirm_passwd" class="form-label">Comfirm Password</label>
    <input name="confirm_passwd" type="password" class="form-control" id="confirm_passwd">
    <span class="text-danger"><?php echo $confirm_passwd_error ?></span>

  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php
include("../includes/footer.php");
$db->close();
?>