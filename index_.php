<?php
require_once("connect.php");
?>

<!doctype html>
<html lang="th">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet">

        <title>Prem's store</title>
    </head>

    <body>  
            <div class="container">
            <div class="alert alert-light" role="alert">
                <h2>Sanrio Bear <i class="far fa-heart fa-xs"></i> </h2>
            </div>

                <div class="row">
                    <div class="col-3">
                        <img src="doll/logo.jpg" class="img-thumbnail">
                        <br/>
                        <br/>
                        <h2>เกี่ยวกับร้านค้า</h2>
                        <p>
                        ร้านขายตุ๊กตา sanrio <br/>
                        Premjai's shop<br/>
                        💝 ร้าน Sanrio Bear สวัสดีค่ะ 🙏🏻<br/>
                        📲 <u>ติดต่อแม่ค้า</u> 📮<br/>
                        Line : @prem_<br/>

                        *ไม่อยากพลาดอัพเดทโปรโมชั่นลดราคาแอดLineไว้ได้เลยค่ะ <br/>
                        💞 ส่งของทุกวัน.จ-ศ​ <br/>
                        💞 หยุด​วันส.-อา.​และ​วันหยุดนขัตฤกษ์​<br/>
                        ❌ไม่รับแก้ไขออเดอร์ ชื่อ ที่อยู่ในแชทและหมายเหตุ​ทุกกรณี​
                        </p>
                        ➖➖➖➖➖➖➖➖➖➖➖➖
                        <form method="post"  action="check_login.php">       
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username"/>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" maxlength="10" name="password"/>
                            </div>
                        <button type="submit" class="btn btn-primary" value="login">Login</button>
                        <button type="reset" class="btn btn-secondary"  value="Clear">Clear</button>
                        </form>
                        <br/>
                        <a href="register.php">สมัครสมาชิก คลิกที่นี้</a>
                        ➖➖➖➖➖➖➖➖➖➖➖➖
                    </div>

                    <div class="col-9">
                        <h3><u>สินค้าแนะนำ</u></h3>
                        <hr>
                        <div class="card-deck">
                        <?php
                            $idx=1;

                            $strSQL = " SELECT * FROM product";
                            $objQuery = mysqli_query($con, $strSQL);
                            while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)){
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
</body>
</html>