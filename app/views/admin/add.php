<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
  <div class="row mb-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add Product</h2>
        <p>Enter The Product Details</p>
        <form action="<?php echo URLROOT; ?>/admins/add" method="post">
          <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label for="price">Price: <sup>*</sup></label>
            <input type="number" name="price" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label for="quantity">Quantity: <sup>*</sup></label>
            <input type="number" name="quantity" class="form-control form-control-lg">
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="add" class="btn btn-success btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>