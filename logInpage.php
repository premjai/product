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
        <a href="index_refactor.php"><h2>Sanrio Bear <i class="far fa-heart fa-xs"></i> </h2></a>
        </div>
                    
            <div class="row">
                <div class="col-3">
                    <?php require_once('includes/shop_detail.php');?>
                    ➖➖➖➖➖➖➖➖➖➖➖➖
                </div>
                
                <div class="col-9">
                <div class="card">
                    <h3 class="card-header">Login <i class="far fa-heart fa-xs"></i></h3>
                <div class="card-body">
                    <form method="post"  action="check_login.php">
                    <?php require_once('includes/login_form.php')?> 
                </div>
                </div>
                </div>
                </div>
                </div>
            </body>
            </html>

