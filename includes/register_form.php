<form method="post"  action="saveusername.php" name="form1" onSubmit="JavaScript:return fncSubmit();">
    <div class="container">            
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
    </div>
</form>
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