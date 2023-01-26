<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container">
    <div class="row d-flex justify-content-center gap-3">
        <?php foreach ($data['product'] as $key ) { ?>
        <div class="card mb-5 mt-5" style="width: 18rem;">
          <img src="<?php echo URLROOT?>/uploads/<?= $key->image?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title text-center mb-3"><?=$key->title?></h5>
                <p> Price :   <?=$key->price?> DH</p>
                <p> Quantity :<?=$key->quantity?></p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>