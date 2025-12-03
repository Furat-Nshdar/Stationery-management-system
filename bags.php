<?php require("includes/head.php"); ?>

<div class="container-md my-3">
    <a href="category.php" class="fs-6 text-dark text-decoration-none fw-bold"><img
            src="assist/media/img/bags/back-arrow.png" class="img-fluid me-1" width="35" alt="">زڤرین</a>
    <h3 class="text text-center">بەشێ چانتان</h3>
    <p class="text text-center">کلیکێ لسەر<span class="px-1 mx-1 rounded-1"
            style="color: #fff; background-color: rgb(0, 29, 97);">هەلبژارتن</span> بکە بۆ دیتنا پتر خزمەتگوزارییان ل
        سەر چانتێ مەبەستپێ</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="d-flex justify-content-center">
        <input name="search_bags" class="form-control text-end w-25 me-2" type="search"
            placeholder="بهایێ چانتەی، ناڤێ چانتەی" aria-label="Search">
        <button name="submit" class="btn btn-outline-success" type="submit">لێگەریان</button>
    </form>
    <div class="d-flex justify-content-between flex-wrap mt-4 my-2">
        <?php
        $query = $db->query("SELECT * FROM `bags`");
        while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="card rounded-1 mt-3" style="width: 15rem; box-shadow: 2px 2px 6px gray">
                <div style="height: 12rem; overflow: hidden;"> <img src="<?php echo $row['image_src']; ?>"
                        class="card-img-top w-100 rounded-bottom-3" alt="...">
                </div>
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold">بها:
                            <?php echo $row['value']; ?>
                        </h6>
                        <h6 class="fw-bold">چانتە</h6>
                    </div>
                    <img src="assist/media/img/bags/star5.png" class="img-fluid mb-1" width="100" alt="">
                    <div class="d-flex justify-content-between align-items-end"><button class="rounded-1 border-0"
                            style="font-size: 13px; height: 25px; background-color: rgb(0, 29, 97); color: #fff;">زێدەکرن
                            ل سەلێ<img src="assist/media/img/cart.png" class="img-fluid ms-1" width="20"
                                alt=""></button><button id="hh" class="rounded-1 border-0"
                            style="font-size: 13px; height: 25px; color: #fff; background-color: rgb(0, 29, 97);">هەلبژارتن</button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>