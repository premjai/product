<?php
        session_start();
        require_once("connect.php");

        if($_SESSION['memberlogin'] != 'y')
            {
                header("Location:loginpage.php");
            }
?>

<!doctype html>
<html>

<?php require_once('includes/head.php'); ?>

<body>

<form method="post"  action="saveaddress.php" name="form1" onSubmit="JavaScript:return fncSubmit();">
           
    <div class="container">
        <div class="alert alert-light" role="alert">
            <a href="index_refactor.php"> <h2>Sanrio Bear <i class="far fa-heart fa-xs"></i></h2></a>
        </div>

        <div class="row">
            <div class="col-3">
                <?php require_once('includes/shop_detail.php'); ?>
                ➖➖➖➖➖➖➖➖➖➖➖➖

            </div>
            <div class="col-9">
            <div class="card">
                <h3 class="card-header">Address <i class="far fa-heart fa-xs"></i></h3>
            <div class="card-body">
            
            <div class="form-group">

                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
            </div>
            <form>
                <div class="form-row">
                    <div class="col-7">
                    
                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" name="state" id="state" placeholder="State">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
                    </div>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary" value="login">OK</button>
               
            </form>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"> </script>
    <script language="javascript">
            function fncSubmit()
            {
            if(document.form1.address.value == "")
            {
                alert('Please input Address');
                document.form1.address.focus();
                return false;
            }   

            if(document.form1.city.value == "")
            {
                alert('Please input City');
                document.form1.city.focus();      
                return false;
            }   

            if(document.form1.state.value == "")
            {
                alert('Please input State');
                document.form1.state.focus();      
                return false;
            } 

            if(document.form1.zip.value == "")
            {
                alert('Please input Zip');
                document.form1.zip.focus();      
                return false;
            }   

            document.form1.submit();
            }
            </script>

</body>
</html>


