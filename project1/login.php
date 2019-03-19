<?php
 include 'component/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme/css/oh-autoVal-style.css">
<script src="theme/js/jquery-3.2.1.min.js"> </script>
<script src="theme/js/oh-autoVal-script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .login-form {
        width: 340px;
        margin: 150px auto;
    }
    .login-form form {
        margin-top: 50px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        background-color: #821a1a;
        border-color: #821a1a;
    }
</style>
</head>
<body>

<div class="login-form">
   
    <form action="log.php" method="post">
        <h2 class="text-center">Login</h2>       
        <div class="form-group">
            <input type="text" name="email" class="form-control av-email" av-message="invalid email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="pwd" class="form-control av-password" av-message="Must contain uppercase,lowercase,special chars,digits and minimum 6 chars" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="mail/index.php" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="index.php">Create an Account</a></p> 
</div>
</body>
</html>                                                                 
<?php
 include 'component/footer.php';
?>