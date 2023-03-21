<?php  require ".././core/ketnoi.php";
$sql = "SELECT * FROM `sanpham` ORDER BY id DESC LIMIT 4";
$new_product = showDataAll($sql);
$sql = "SELECT * FROM `sanpham` ORDER BY Gia_sp ASC LIMIT 4";
$sale_product = showDataAll($sql);

?>
<?php require ".././layout/header.php";?>

<title>DANH SÁCH SẢN PHẨM</title>


 <!--  -->

 <div class="nav-info row">
        <div class="left-nav-info item-nav-info">
            <a href="https://ivymoda.com/danh-muc/hang-nu-moi-ve">
                <span>Free Shipping đơn hàng nguyên giá</span>
            </a>
        </div>
        <div class="center-nav-info item-nav-info">
            <a href="https://ivymoda.com/about/chinh-sach-bao-hanh">
                <span>Bảo hành trọn đời</span>
            </a>
        </div>
        <div class="right-nav-info item-nav-info">
            <a href="https://ivymoda.com/about/chinh-sach-the-thanh-vien">
                <span>Chính sách thẻ thành viên</span>
            </a>
        </div>
    </div>
    <!----------------------------------------------Slider---------------------------------------------------------->
    <section id="Slider">
        <div class="aspect-ratio-169">
            <img src="../../public/img/images/ivymoda1.png">
            <img src="../../public/img/images/ivymoda2.png">
            <img src="../../public/img/images/ivymoda3.png">
            <img src="../../public/img/images/ivymoda3.png">
        </div>
        <div class="dot-container">
            <div class="dot active">1</div>
            <div class="dot">2</div>
            <div class="dot">3</div>
            <div class="dot">4</div>
        </div>
    </section>

<div class="container">
    <div class="cartegory-right row" style="margin:auto;padding-right: 6%;">
        <div class="cartegory-right-top-item" style="text-align: center; margin: 10px 10px;">
            <p>HÀNG NỮ MỚI VỀ</p>
        </div>
        <div class="cartegory-right-content row">
            <?php foreach ($new_product as $products): ?>
            <div class="cartegory-right-content-item">
                <a href="product_detail.php?id=<?= $products["id"] ?>">
                    <img src="http://localhost/webivymoda1/admin/images/products/<?= $products["Anh_sp"] ?>" alt="">
                    <h1><?= $products["Tensp"] ?></h1>
                    <p><?= number_format($products["Gia_sp"], 0, '', ',') ?><sup>VNĐ</sup></p>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="cartegory-right row" style="margin:auto;padding-right: 6%;">
        <div class="cartegory-right-top-item" style="text-align: center; margin: 10px 10px;">
            <p>HÀNG GIẢM GÍA</p>
        </div>
        <div class="cartegory-right-content row">
            <?php foreach ($sale_product as $products): ?>
            <div class="cartegory-right-content-item">
                <a href="product_detail.php?id=<?= $products["id"] ?>">
                    <img src="http://localhost/webivymoda1/admin/images/products/<?= $products["Anh_sp"] ?>" alt="">
                    <h1><?= $products["Tensp"] ?></h1>
                    <p><?=  number_format($products["Gia_sp"], 0, '', ',') ?><sup>VNĐ</sup></p>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
</div>

<?php require ".././layout/footer.php";?>