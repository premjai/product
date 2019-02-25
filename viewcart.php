<?php

require_once("connect.php");

?>

<!doctype html>
<html lang="th">

<?php require_once('includes/head.php'); ?>
<body>  
        <div class="container">

        <div class="alert alert-light" role="alert">
            <h2>Sanrio Bear <i class="far fa-heart fa-xs"></i> </h2>
        </div>
                    
            <div class="row">
                <div class="col-3">
                    <?php require_once('includes/shop_detail.php');?>
                    ➖➖➖➖➖➖➖➖➖➖➖➖
    
                </div>
                <div class="col-9">
                
                <h3><u>ชำระเงิน</u></h3>
                    <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                        <th scope="col">รหัสสินค้า</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">ราคาสินค้า</th>
                        <th scope="col">จำนวน</th>
                        <th scope="col">ราคาที่ต้องชำระ</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php
                    //$strSQL = " SELECT * FROM cart  ";
                    $strSQL = " SELECT cart.* , product.product_name FROM cart LEFT JOIN product ON cart.product_id = product.product_id ";
                    $objQuery = mysqli_query($con, $strSQL);
                    while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
                
                    ?>
                    
                        <tr>
                        <th scope="row"><?php echo $objResult['product_id']; ?></th>
                        <td><?php echo $objResult['product_name']; ?></td>
                        <td> <?php echo $objResult['price']; ?></td>
                        <td> <?php echo $objResult['qty']; ?></td>
                        <td> <?php echo $objResult['total']; ?></td>
                        </tr>

                <?php
                    }
                ?>

                
                </tbody>
                </table>

                    </div>
                    </div>
                    </div>
            </body>
            </html>