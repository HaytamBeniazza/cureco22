<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
  <div class="row mb-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create An Account</h2>
        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/register" id="form" method="post" onclick="register();">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" id="email" class="form-control form-control-lg">
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" id="password" class="form-control form-control-lg" value="<?php echo $data['password']; ?>">
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password: <sup>*</sup></label>
            <input type="password" name="confirm_password" id="password2" class="form-control form-control-lg" value="<?php echo $data['confirm_password']; ?>">
            <small class="text-danger"></small>
          </div>

          <div class="row">
            <div class="col mb-2 mt-2">
              <input type="submit" value="Register" class="btn btn-primary btn-block" name="submit" onclick="register();">
            </div>
            <div class="col mb-2 mt-2">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>