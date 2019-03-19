<?php
 include 'component/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Register Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme/css/oh-autoVal-style.css">
<script src="theme/js/jquery-3.2.1.min.js"> </script>
<script src="theme/js/oh-autoVal-script.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->



<style type="text/css">
    .login-form {
        width: 500px;
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
        min-height: 50px;
        border-radius: 48px;
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
    
    <form name="userform" action="actions/registration.php" class="oh-autoval-form" method="post" onsubmit="return"> 
        <h2 class="text-center">Register</h2>
        <div class="form-group"> 
            <input type="text" class="form-control av-name" av-message="Min. 3 and Only Alphabets allowed..!" name="name" id="fname" placeholder="Name" required="required">
            <!-- <label style="display:none ; color:red"  id="ename"></label> -->
        </div>
        <div class="form-group">
            <textarea class="form-control av-required" name="address" placeholder="Address" av-message="required"  required="required"></textarea> 
        </div>
        <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Country" required="required">
        </div>  -->
        <div class="form-group">
                                <!-- <label>Country</label> -->
                                <select class="form-control" name="country" id="country" required="required">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "tourism");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select cid,cname from tbl_country where status=1";
                                            $result = mysqli_query($con, $sql);
                                            echo "<option value =><------Select Country-----></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cnme = $row['cname'];
                                                $id = $row['cid'];
                                                echo "<option value='$id'>$cnme</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                            </div>

        <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="State" required="required">
        </div> --> 
        <div class="form-group">
                                <!-- <label>Branch</label> -->
              <select class="form-control" name="state" id="state" required/>    </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dist" id="dist" required/>    </select>
            <!-- <input type="text" class="form-control" placeholder="District" required="required"> -->
        </div> 
        <div class="form-group">
            <input type="text" class="form-control av-mobile" av-message="Invalid mobile number" name="mob" placeholder="Mobile" required="required">
        </div>      
        <div class="form-group">
            <input type="text" class="form-control av-email" av-message="invalid email" name="email" id="email" placeholder="E-mail" required="required">
            
        </div>
        <div class="form-group">
            <input type="password" class="form-control av-password" av-message="Must contain uppercase,lowercase,special chars,digits and minimum 6 chars" name="pwd" id="pwd" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="cpwd" id="cpwd" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block" value="u_regist">Register</button>
        </div>
        <script>
                   $("#country").on("change", function () {
                        $("#state").html("");
                        $cnme = $("#country").val();

                        // find courselevels
                        $.ajax({
                            url: 'component/data.php',
                            method: 'POST',
                            data: {'country': $cnme, "status":"1"},
                            success: function (data)
                            {
                                // console.log(data);
                                $("#state").html(data);
                            }
                        });
                    });

                   $("#state").on("change", function () {
                        $("#dist").html("");
                        $snme = $("#state").val();

                        // find courselevels
                        $.ajax({
                            url: 'component/data1.php',
                            method: 'POST',
                            data: {'state': $snme, "status":"1"},
                            success: function (data)
                            {
                                // console.log(data);
                                $("#dist").html(data);
                            }
                        });
                    });
                </script>

                <script  language="javascript" type="text/javascript">
var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("cpwd");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Doesn't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
                
                
    </form>
    
</div>
</body>
</html>   




<?php
 include 'component/footer.php';
?>