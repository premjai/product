<?php
        session_start();
        require_once("connect.php");

        if($_SESSION['passlogin'] != 'y')
            {
                echo "Please Login!";
                exit();
            }
?>

<!doctype html>
<html>

<?php require_once('includes/head.php'); ?>

<body>
    <div class="container">
        <div class="alert alert-light" role="alert">
            <h2>Sanrio Bear <i class="far fa-heart fa-xs"></i></h2>
        </div>

        <div class="row">
            <div class="col-3">
                <?php require_once('includes/shop_detail.php'); ?>
                ➖➖➖➖➖➖➖➖➖➖➖➖

            </div>

            <div class="col-9">
            
            <div class="form-group">
                 <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <form>
                <div class="form-row">
                    <div class="col-7">
                    <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="State">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Zip">
                    </div>
                </div>
            </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>