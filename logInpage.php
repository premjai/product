<?php 

session_start();

$_SESSION['passlogin'] = '';

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

            <form method="post"  action="check_login.php">

            <div class="col-9">
            <?php require_once('includes/login_form.php')?>
            </div>
        </div>
        </div>
    </div>
</body>
</html>