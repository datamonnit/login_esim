<?php $curr_file = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mysqli - login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $curr_file == 'register.php' ? "active" : ""; ?>" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $curr_file == 'login.php' ? "active" : ""; ?>" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>