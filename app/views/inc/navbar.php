<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>">CureCo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/product">Medicine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['idadmin'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/dashboard">Dashboard</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/add">Add</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
