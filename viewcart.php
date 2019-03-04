<?php
session_start();

require_once("connect.php");

$session_id = session_id();

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
                <h3 class="card-header">ชำระเงิน <i class="far fa-heart fa-xs"></i></h3>
                <div class="card-body">
                    <table class="table table-striped table-info">
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
                    $totalpay = 0;
                    $strSQL = " SELECT cart.* , product.product_name FROM cart LEFT JOIN product ON cart.product_id = product.product_id WHERE session_id = '$session_id' ";
                    $objQuery = mysqli_query($con, $strSQL);
                    while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
                
                    ?>
                    
                        <tr>
                        <th scope="row"><?php echo $objResult['product_id']; ?></th>
                        <td><?php echo $objResult['product_name']; ?></td>
                        <td> <?php echo $objResult['price']; ?></td>
                        <td> <?php echo $objResult['qty']; ?></td>
                        <td> <?php
                                $total = $objResult['total'];
                                $totalpay = $totalpay + $total;

                                echo $total;
                        
                        ?></td>
                        </tr>

                <?php
                    }
                ?>               
                </tbody>
                </table>
                <h2><p class="text-right">ราคาที่ต้องชำระ <?php echo $totalpay; ?>  บาท</p></h2>
                <p class="text-right"><a href="address.php" class="btn btn-primary">Check Out</a></p>

                </div>
                </div>
                </div>
                </div>
                </div>
            </body>
            </html>