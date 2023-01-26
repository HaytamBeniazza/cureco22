<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
  <div class="row mb-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add Product</h2>
        <p>Enter The Product Details</p>
        <form action="<?php echo URLROOT; ?>/admins/add" method="post" enctype="multipart/form-data">
        <div id="alae">
            <div class="form-group">
              <label for="iamge">Image: <sup>*</sup></label>
              <input type="file" name="image[]" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
              <label for="title">Title: <sup>*</sup></label>
              <input type="text" name="title[]" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
              <label for="price">Price: <sup>*</sup></label>
              <input type="number" name="price[]" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
              <label for="quantity">Quantity: <sup>*</sup></label>
              <input type="number" name="quantity[]" class="form-control form-control-lg" required>
            </div>
          </div>
            <button onclick="return add()" class="btn btn-outline-primary mt-2 mb-2">&plus;</button>
            <div class="row mt-2">
              <div class="col">
                <input type="submit" value="Submit" class="btn btn-primary btn-block">
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo URLROOT; ?>/js/main.js"></script>
<?php require APPROOT . '/views/inc/footer.php'; ?>