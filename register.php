<!doctype html>
<html lang="th">
<head>
    <title>register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>
<body background="doll/bg.jpg">
    <body>
    <form method="post"  action="saveusername.php" name="form1" onSubmit="JavaScript:return fncSubmit();">
    <div class="container">

    <div class="alert alert-light" role="alert">
        <h2>Register <i class="far fa-heart fa-xs"></i> </h2>
    </div>
              
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" maxlength="10" name="password"/>
            </div>

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            
            Status <select class="form-control" name="status">
            <option value="user">User</option>
            <option value="admin">ADMIN</option>
            </select>
            <br/>
            <button type="submit" class="btn btn-primary" value="OK">Submit</button>
            <button type="reset" class="btn btn-secondary"  value="Clear">Clear</button>
    </form>
    </div>
    <script type="text/javascript" src="js/jquery.js"> </script>
    <script language="javascript">
            function fncSubmit()
            {
            if(document.form1.username.value == "")
            {
                alert('Please input Username');
                document.form1.username.focus();
                return false;
            }   

            if(document.form1.password.value == "")
            {
                alert('Please input Password');
                document.form1.password.focus();      
                return false;
            }   

            if(document.form1.name.value == "")
            {
                alert('Please input Full Name');
                document.form1.name.focus();      
                return false;
            } 

            document.form1.submit();
            }
            </script>
            
</body>
</html>
