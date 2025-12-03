<?php require("includes/head.php"); ?>
<div class="container-md my-2">
    <a href="bags.php" class="fs-6 text-dark text-decoration-none fw-bold"><img
            src="assist/media/img/bags/back-arrow.png" class="img-fluid me-1" width="35" alt="">زڤرین</a>
    <h4 class="text text-center">فورما خزمەتگوزارییان</h4>
    <p class="text text-center">هەر خزمەتگوزارییەکا تە بڤێت دەستنیشانبکە و پاشان کلیکێ لسەر زێدەکرن ل سەلێ بدە</p>
    <div class="row mt-2">
        <div class="col-md-6 col-sm-12">
            <div class="rounded" style="height: 60%; overflow: hidden;">
                <img src="assist\media\img\bags\micah-tindell-ysu9athq_BU-unsplash.jpg" class="img-fluid w-100 rounded"
                    alt="">
            </div>
            <div class="d-flex justify-content-evenly mt-3">
                <img class="rounded" src="assist\media\img\bags\micah-tindell-ysu9athq_BU-unsplash.jpg"
                    style="border: solid 3px #000; cursor: pointer;" width="50" alt="">
                <img class="rounded" src="assist\media\img\bags\wiser-by-the-mile-SwWCo1k92M4-unsplash.jpg"
                    style="border: solid 3px rgb(0, 29, 97); cursor: pointer;" width="50" alt="">
                <img class="rounded" src="assist\media\img\bags\wiser-by-the-mile-3o-X8WJOP5E-unsplash.jpg"
                    style="border: solid 3px rgb(0, 29, 97); cursor: pointer;" width="50" alt="">
                <img class="rounded" src="assist\media\img\bags\wiser-by-the-mile-RHXSJ09YD9o-unsplash.jpg"
                    style="border: solid 3px rgb(0, 29, 97); cursor: pointer;" width="50" alt="">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 pt-4 px-2">
            <div class="row">
                <div class="col-12">
                    <h4 class="text text-center">داخوازییا خۆ دەستکاریبکە</h4>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-end">
                    <div class="mx-auto">
                        <h5 class="text"><span class="fw-bold">بها: </span>٥ هزار دینار</h5>
                    </div>
                    <div class="ms-auto">
                        <h5 class="text"><span class="fw-bold">ناڤێ بەرهەمی: </span>چانتە</h5>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="text-end">
                        <button class="btn btn-outline-success py-0 fw-bold" onclick="incNum(1)">زێدەکرن</button>
                        <span id="itemNum" class="mx-3">1</span>
                        <button class="btn btn-outline-danger py-0 me-2 fw-bold"
                            onclick="decNum(1)">کێمکرن</button><span class="fw-bold">: ژمارا داخوازییا</span>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <h5 class="text text-end fw-bold">: دەربارەی بەرهەمی</h5>
                <p class="text text-end text-break">چانتە ژ جلدی پێکدهێت ئانکو بڕێکا ئاڤێ تەر نابیتن، خودان بەریکەکا
                    مەزنە و ئێکا ناوەند و ئێکا بچیک، دگەل هەبوونا دوو بەریکان ل تەنشتا چانتەی بۆ پێداویستیێن سڤك</p>
            </div>
            <div class="col-12 mt-4">
                <h5 class="text text-end fw-bold">: ڕەنگێ بەرهەمی</h5>
                <div class="d-flex justify-content-between">
                    <div class="text text-end">
                        <button class="btn btn-sm btn-dark">&nbsp;</button>
                    </div>
                    <div class="text text-end">
                        <button class="btn btn-sm mx-1 btn-primary">&nbsp;</button>
                        <button class="btn btn-sm mx-1 btn-success">&nbsp;</button>
                        <button class="btn btn-sm mx-1 btn-secondary">&nbsp;</button>
                        <button class="btn btn-sm mx-1 btn-danger">&nbsp;</button>
                        <button class="btn btn-sm mx-1 btn-warning">&nbsp;</button>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="d-flex justify-content-end">بەلێ<input class="ms-1 me-2" type="checkbox" style="height: 20px;" ><h5 class="text text-end fw-bold">داخوازییاتە بهێتە خەملاندن؟</h5></div>
                <p class="text text-end">داخوازییاتە ب شێوەیەکێ جوان دێ هێتە خەملاندن، ئەگەر تە بڤێت بکەیە دیاری ئەڤە باشترین هەلبژارتنە</p>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <h5 class="text">٥ هزار دینار&nbsp;</h5>
                <h5 class="text fw-bold">: بهایێ دوماهیکێ</h5>
            </div>
            <div class="col-12 mt-4 d-flex justify-content-center">
                <button class="btn w-75 rounded-3" style="color: #fff; background: rgb(0, 29, 97);">داخوازکرن</button>
            </div>
        </div>
    </div>
</div>

<script>
    var itemNum = document.getElementById('itemNum');
    var num = parseInt(itemNum.innerText);
    // functuion for incrementing product number
    function incNum(click) {
        if (num >= 0) {
            num += click;
            itemNum.innerText = num;
        }
    }

    // function for decrementing product number
    function decNum(click) {
        if (num > 0) {
            num -= click;
            itemNum.innerText = num;
        }
    }
</script>