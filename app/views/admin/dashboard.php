<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="col-md-10 mx-auto mt-3 ">
  <div class="row ">
    <div class="col-xl-3 col-lg-6">
      <div class="card l-bg-cherry">
        <div class="card-statistic-3 p-4">
          <div class="mb-4">
            <h5 class="card-title mb-0">Max Price</h5>
          </div>
          <div class="row align-items-center mb-2 d-flex">
            <div class="col-8">
              <?php foreach ($data['max'] as $key) { ?>
                <h2 class="d-flex align-items-center mb-0">
                  <?php echo $key->maxprice ?>
                </h2>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card l-bg-blue-dark">
        <div class="card-statistic-3 p-4">
          <div class="mb-4">
            <h5 class="card-title mb-0">Total Products</h5>
          </div>
          <div class="row align-items-center mb-2 d-flex">
            <div class="col-8">
              <?php foreach ($data['min'] as $key) { ?>
                <h2 class="d-flex align-items-center mb-0 name" name="maxprice">
                  <?php echo $key->totalproducts ?>
                </h2>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="table mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <div class="container row">

      <div class="rounded col-md-4 mt-5 d-flex h-25">
        <form action="<?php echo URLROOT; ?>/admins/dashboard" method="post">
        <input type="text" name="search" class="form-control rounded outline-none" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <!-- <span class="input-group-text border-0" id="search-addon">
         
        </span> -->
        <button type="submit"> <i class="fas fa-search"></i></button>
        </form>
      </div>

      <div class="col-md-2">

        <form action="<?php echo URLROOT; ?>/admins/sort" method="get" class="">
          <select class="form-select mt-5" aria-label="Default select example" name="select">
            <option selected>Sort by :</option>
            <option name="price_min" value="price_min">price min to max</option>
            <option name="price_max" value="price_max">price max to min</option>
            <option name="date_new" value="date_new">date new</option>
            <option name="date_old" value="date_old">date old</option>
          </select>
          <button class="btn btn-primary mt-3" type="submit">Sort</button>

        </form>
      </div>

    </div>



    <?php
    foreach ($data['product'] as $key) {
    ?>
      <tr>
        <td><?= $key->image ?></td>
        <td><?= $key->title ?></td>
        <td><?= $key->price ?></td>
        <td><?= $key->quantity ?></td>
        <td>
          <a href="<?php echo URLROOT; ?>/admins/delete/<?php echo $key->idproduct; ?>"><i class="fa-solid fa-trash"></i></a>
          <a href="<?php echo URLROOT; ?>/admins/edit/<?php echo $key->idproduct; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
        </td>
      </tr>

    <?php } ?>

  </tbody>
</table>


<?php require APPROOT . '/views/inc/footer.php'; ?>