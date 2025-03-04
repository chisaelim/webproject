<?php
include("../init/db.php");

require_once('../init/func.php');

include("../includes/header.php");
include("../includes/navbar.php");

if (loggedInUser()) {
  header('Location: ./dashboard.php');
}

$passwd_error = '';

if(isset($_GET['username']) && isset($_GET['passwd'])){
  $username = $_GET['username'];
  $passwd = $_GET['passwd'];

  $query = $db->query("SELECT * FROM tbl_user WHERE username = '$username' AND passwd = '$passwd'");
  if($query->num_rows){
    $_SESSION['id_user'] = $query->fetch_object()->id_user;

    header('Location: ./dashboard.php');
  }else{
    $passwd_error = 'Username or Password is incorrect!';
  }
}

?>

<form action="./login.php" method="get" class="w-50 mx-auto">
  <h1>Login Form </h1>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="username">

  </div>
  <div class="mb-3">
    <label for="passwd" class="form-label">Password</label>
    <input name="passwd" type="password" class="form-control" id="passwd">
    <span class="text-danger"><?php echo $passwd_error ?></span>

  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php
include("../includes/footer.php");
?>