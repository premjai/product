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
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">......</th>
                        <td>.....</td>
                        <td>....</td>
                        <td>....</td>
                  
                        </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
            </body>
            </html>
            
