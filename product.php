<?php

require_once("connect.php");

$pid = $_GET['id']

?>

<!doctype html>
<html lang="th">

<?php require_once('includes/head.php'); ?>
<body>  
        <div class="container">

        <div class="alert alert-light" role="alert">
        <a href="index_refactor.php"><h2>Sanrio Bear <i class="far fa-heart fa-xs"></i> </h2></a>
        </div>
                    
            <div class="row">
                <div class="col-3">
                    <?php require_once('includes/shop_detail.php');?>
                    ➖➖➖➖➖➖➖➖➖➖➖➖
    
                </div>
                <div class="col-9">
                <div class="card">
                    <h3 class="card-header">Detail <i class="far fa-heart fa-xs"></i></h3>
                <div class="card-body">
                    <div class="card-deck">
                        <?php
                            $idx=1;

                            $strSQL = " SELECT * FROM product where product_id = '$pid' ";
                            $objQuery = mysqli_query($con, $strSQL);
                            while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
                        ?>

                    <div class="card text-white bg-info mb-3">
                            <img src="pic/<?php echo $objResult['image']; ?>" class="card-img-top">
                            <div class="card-body">
                            <h5 class="card-title">รหัสสินค้า : <?php echo $objResult['product_id']; ?></h5>
                            <p class="card-text">ชื่อสินค้า : <?php echo $objResult['product_name']; ?></p>
                            <p class="card-text">ราคาสินค้า : <?php echo $objResult['price']; ?> บาท</p>
                           
                            <form method="post" action="buy.php">
                                <div class="form-group">
                               
                                    <label for="txtqty">จำนวน</label>
                                    <input type="text" class="form-control" name="txtqty"/>
                                </div>

                                    <input type="hidden" class="form-control" name="price" value="<?php echo $objResult['price']; ?>"/>
                                
                                    <input type="hidden" class="form-control" name="product_id" value="<?php echo $objResult['product_id']; ?>"/>
                                
                                <button class="btn btn-primary" type="submit">OK</button>
                                                  
                               
                            </form>
                                              

                            </div>

                            
                    </div>

                    <?php

                            if ($idx==3) {
                                echo '</div><div class="card-deck">';
                                $idx = 0;
                            }
                            $idx++;
                        }
                    ?>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>

</body>
</html>