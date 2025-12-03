<div id="carouselExampleAutoplaying" class="carousel slide mx-auto" data-bs-ride="carousel">
        <div class="carousel-inner rounded" style="height: 35rem; overflow: hidden;">
            <?php
            $query = $db->query("SELECT * FROM `products_category`");
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <div class="carousel-item <?php if ($row["id"] == 1) { ?>active<?php } ?>">
                    <div class="card border-0 text-bg-dark">
                        <img src="<?php echo $row["image_src"] ?>" class="card-img w-100 rounded d-block" alt="...">
                        <div class="card-img-overlay text-center mt-3">
                            <a href="<?php echo $row['link']; ?>" class="btn btn-light rounded text-dark fs-6 fw-bold">
                                <?php echo $row["category_name"]; ?>
                            </a>
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