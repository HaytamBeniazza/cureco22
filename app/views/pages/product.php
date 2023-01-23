<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container">
    <div class="row d-flex justify-content-center gap-3">
        <div class="card mb-5 mt-5" style="width: 18rem;">
          <img src="<?php echo URLROOT?>/public/images/medicines.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title text-center mb-3"> title: <?php //echo $data['title'] ?></h5>
                <p> Price   <?php //echo $data['price'] ?> DH</p>
                <p> Quantity <?php //echo $data['quantity'] ?></p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>