<?php require_once("connect.php"); ?>

<!doctype html>
<html>

<?php require_once 'includes/head.php'; ?>

<body>
    <div class="container">
        <div class="alert alert-light" role="alert">
            <h2>Sanrio Bear <i class="far fa-heart fa-xs"></i></h2>
        </div>

        <div class="row">
            <div class="col-3">
                <?php require_once 'includes/shop_detail.php'; ?>
                ➖➖➖➖➖➖➖➖➖➖➖➖
                <?php require_once 'includes/login_form.php'?>
                ➖➖➖➖➖➖➖➖➖➖➖➖
            </div>

            <div class="col-9">
                <h3><u>สินค้าแนะนำ</u></h3>
                <hr>
                <div class="card-deck">
                    <?php
                        $idx = 1;
                        $strSQL = " SELECT * FROM product";
                        $objQuery = mysqli_query($con, $strSQL);
                        while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                    ?>
                    <div class="card text-white bg-dark mb-3">
                        <img src="doll/<?php echo $objResult['image']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">รหัสสินค้า : <?php echo $objResult['product_id']; ?></h5>
                            <p class="card-text">ชื่อสินค้า : <?php echo $objResult['product_name']; ?></p>
                            <p class="card-text">ราคาสินค้า : <?php echo $objResult['price']; ?> บาท</p>
                            <a href="product.php?id=<?php echo $objResult['product_id']; ?>" class="btn btn-primary">detail</a>
                            <a href="#" class="btn btn-primary">ใส่ตะกร้า</a>
                        </div>
                    </div>
                    <?php
                        if ($idx === 3) {
                            echo '</div><div class="card-deck">';
                        }
                        ++$idx;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>