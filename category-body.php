<div class="container">
    <div class="text text-center mt-4 fs-4">بەشێن <span class="fw-bold fs-3" style="color: rgb(0, 29, 97);">بازاڕکرنێ</span> ل کومپانییا دێرسم</div>
     <form class="d-flex justify-content-center mt-3" role="search">
        <input class="form-control w-25 me-2 text-end" type="search" placeholder="ناڤێ بەشێ مەبەستپێ" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">لێگەرییان</button>
      </form>

      <div class="row d-flex  my-4">
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
</div>