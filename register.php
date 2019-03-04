<!doctype html>
<html>

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
                    <div class="card">
                        <h3 class="card-header">Register <i class="far fa-heart fa-xs"></i></h3>
                    <div class="card-body">
                        <?php require_once('includes/register_form.php')?> 
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>