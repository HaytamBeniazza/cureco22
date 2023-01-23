<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo URLROOT?>/public/images/cure33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT?>/public/images/cure33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT?>/public/images/cure33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2 class="text-center mt-5">
          What We Do
        </h2>
      </div>

      <div class="img-box d-flex justify-content-center mb-5 mt-5">
        <img src="<?php echo URLROOT?>/images/about-medicine.png" alt="">
      </div>
      <div class="detail-box">
        <p class="text-center mt-5 mb-5">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary mb-5" href="#" role="button">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2 class="text-center mt-5">
          Why Us
        </h2>
      </div>

      <div class="img-box d-flex justify-content-center mb-5 mt-5">
        <img src="<?php echo URLROOT?>/images/about-medicine.png" alt="">
      </div>
      <div class="detail-box">
        <p class="text-center mt-5 mb-5">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary mb-5" href="#" role="button">Read More</a>
        </div>
      </div>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
