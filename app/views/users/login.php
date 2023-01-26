<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; 
            flash('login_err');

?>

  <div class="row mb-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Login</h2>
        <p>Please fill out this form to register with us</p>
        <form action="<?php echo URLROOT; ?>/users/login" id="form" method="post" >
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" id="email" class="form-control form-control-lg">
            <small class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" id="password" class="form-control form-control-lg" value="">
            <small class="text-danger"></small>
          </div>

          <div class="row">
            <div class="col mb-2 mt-2">
              <button type="button" id="submit-btn" class="btn btn-primary btn-block" >Submit</button>
            </div>
            <div class="col mb-2 mt-2">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">Don't have an account? Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo URLROOT; ?>/js/loginValidate.js"></script>

<?php require APPROOT . '/views/inc/footer.php'; ?>