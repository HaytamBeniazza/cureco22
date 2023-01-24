<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

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

  <div class="container">
    <form action="<?php echo URLROOT; ?>/admins/sort" method="get">
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
    
    <?php foreach ($data['product'] as $key ) {?>
    <tr>
      <td>Image</td>
        <td><?=$key->title?></td>
        <td><?=$key->price?></td>
        <td><?=$key->quantity?></td>
        <td>
          <a href="<?php echo URLROOT; ?>/admins/delete/<?php echo $key->idproduct; ?>"><i class="fa-solid fa-trash"></i></a>
          <i class="fa-regular fa-pen-to-square"></i>
        </td>
      </tr>
      <?php } ?>
  
  </tbody>
</table>


<?php require APPROOT . '/views/inc/footer.php'; ?>