<div class="container-lg mt-3">
  <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner rounded">
      <?php
      $query = $db->query("SELECT * FROM `home-carousel`");
      while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="carousel-item <?php if ($row["id"] == 1) { ?>active<?php } ?>">
          <div class="card border-0 text-bg-dark">
            <img src="<?php echo $row["image_src"] ?>" class="card-img w-100 rounded d-block" alt="...">
            <div class="card-img-overlay text-end mt-3 me-5">
              <h3 class="card-titlev fw-bold text-dark">داشکاندن</h3>
              <p class="card-text text-dark fw-bold">داشکاندنێن ڕوژانە یێن کومپانییا دێرسم ژ دەستێن خۆ نەکە، بهایەکێ کێمتر
                کەلوپەلێن زێدەتر
                ب</p>
              <p class="card-text"><a class="btn btn-primary" href="#">بەشێ داشکاندنا</a></p>
            </div>
          </div>
        </div>
      <?php }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <img src="assist/media/img/Back-arrow.png" width="45" alt="">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <img src="assist/media/img/next-arrow.png" width="50" alt="">
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>