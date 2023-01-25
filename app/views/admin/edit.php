<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
  <div class="row mb-5">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Edit Product</h2>
        <p>Edit The Product Details</p>
        <?php
    foreach ($data['product'] as $key) :
    ?>
        <form action="" method="post">
            <div class="form-group">
              <label for="title">Title: <sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg" value="<?php echo $key->title ?>">
            </div>
            <div class="form-group">
              <label for="price">Price: <sup>*</sup></label>
              <input type="number" name="price" class="form-control form-control-lg" value="<?= $key->price ?>">
            </div>
            <div class="form-group">
              <label for="quantity">Quantity: <sup>*</sup></label>
              <input type="number" name="quantity" class="form-control form-control-lg" value="<?= $key->quantity ?>">
            </div>
            <div class="row mt-2">
              <div class="col">
                <input type="submit" value="Submit" class="btn btn-primary btn-block" value="">
              </div>
          </div>
        </form>
        <?php
    endforeach
    ?>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>