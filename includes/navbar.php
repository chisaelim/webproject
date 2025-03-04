<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo loggedInUser() ? '/webproject/pages/dashboard.php' : '/webproject'  ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu">

            <?php
            // if (!loggedInUser()) {
            //   echo ('<li><a class="dropdown-item" href="/webproject/pages/login.php">Login</a></li>
            //   <li>
            //     <hr class="dropdown-divider">
            //   </li>
            //   <li><a class="dropdown-item" href="/webproject/pages/register.php">Register</a></li>');
            // } else {
            //   echo ('<li><a class="dropdown-item" href="/webproject/pages/logout.php">Logout</a></li>');
            // }
            ?>


            <?php
            if (!loggedInUser()) {
            ?>

              <li><a class="dropdown-item" href="/webproject/pages/login.php">Login</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/webproject/pages/register.php">Register</a></li>

            <?php
            } else {
            ?>

              <li><a class="dropdown-item" href="/webproject/pages/logout.php">Logout</a></li>

            <?php
            }
            ?>


            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>