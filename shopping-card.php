<div class="container mt-4">
    <div class="text text-center fs-3 fw-bold">گەشتا خویا بازاڕکرنێ دگەل مە دەستپێبکە</div>
    <div class="text mt-1 text-center fs-6 fw-bold">کومپانییا دێرسم هەردەم ژێدەرەکێ سەرەکییە بۆ فروتنا بەرهەمێن
        باوەرپێکری و خودان کوالێتی</div>
    <div class="text-center mt-3"><a href="category.php" class="btn"
            style="background-color: rgb(0, 29, 97); color: white;">بازاڕکرن</a></div>
    <div class="row d-flex  my-4">
        <div class="col-12 d-flex justify-content-between">
            <h6 class="fw-bold">بەرهەمێن بازاڕکرنێ</h6><a href="category.php" class="text-decoration-none text-dark fw-bold">دیتنا
                هەمییان<img src="assist/media/img/arrow.svg" width="35" class="ms-2" alt=""></a>
        </div>
        <?php
        $query = $db->query("SELECT * FROM `products_category`");
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                <div class="card text-center <?php if ($row["id"] == 2 || $row["id"] == 5 || $row["id"] == 8 || $row["id"] == 11) { ?> mx-auto <?php
                } else if ($row["id"] == 3 || $row["id"] == 6 || $row["id"] == 9 || $row["id"] == 12) { ?> float-end <?php } ?>"
                    style="width: 18rem; box-shadow: 2px 2px 8px 000; cursor: pointer;">
                    <img src="<?php echo $row['image_src'] ?>" class="card-img w-100 mx-auto img-fluid" alt="..">
                    <div class="card-img-overlay">
                        <a href="<?php echo $row['link']; ?>" class="btn btn-light rounded text-dark fs-6 fw-bold">
                            <?php echo $row["category_name"]; ?>
                        </a>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
    <div class="card border-0 text-bg-dark">
        <img src="assist/media/img/Discount.jpg" class="card-img" alt="...">
        <div class="card-img-overlay text-center">
            <p class="card-text mt-3"><a class="btn btn-primary fs-4" href="#">بەشێ داشکاندنا</a></p>
        </div>
    </div>
</div>
</div>