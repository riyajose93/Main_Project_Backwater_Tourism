<?php
 include 'component/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Owner Register Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme/css/oh-autoVal-style.css">
<script src="theme/js/jquery-3.2.1.min.js"> </script>
<script src="theme/js/oh-autoVal-script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="theme/js/jquery-ui.js"></script>

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
    <form action="actions/owner_registration.php" class="oh-autoval-form" method="post" onsubmit="return"> 
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input type="text" class="form-control av-name" av-message="Min. 3 and Only Alphabets allowed..!"" name="name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="address" placeholder="Address"  required="required"></textarea> 
        </div>
        <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Country" required="required">
        </div>  -->
        <div class="form-group">
                                <!-- <label>Country</label> -->
                                <select class="form-control" name="dist" id="dist" required="required">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "tourism");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select did,dname from tbl_district where status=1";
                                            $result = mysqli_query($con, $sql);
                                            echo "<option value =><------Select District-----></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $dnme = $row['dname'];
                                                $id = $row['did'];
                                                echo "<option value='$id'>$dnme</option>";
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
            <input type="text" class="form-control av-mobile" av-message="Invalid mobile number"" name="mob" placeholder="Mobile" required="required">
        </div>   
        <div class="form-group">
            <input type="text" class="form-control" name="lic" placeholder="License No" required="required">
        </div>   
        <div class="form-group">
            <input type="text" class="form-control" name="company" placeholder="Company" required="required">
        </div>  
         <div class="form-group">
                                <!-- <label>Country</label> -->
                                <select class="form-control" name="category" id="category" required="required">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "tourism");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $sql = "Select category_id,category from tbl_boat_category where status=1";
                                            $result = mysqli_query($con, $sql);
                                            echo "<option value =><------Select Category-----></option>";
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cnme = $row['category'];
                                                $id = $row['category_id'];
                                                echo "<option value='$id'>$cnme</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                            </div>
        <div class="form-group">
            <select class="form-control" name="pkg" id="pkg" required/>    </select>
        </div> 
        <script>
                   $("#category").on("change", function () {
                        $("#pkg").html("");
                        $ca = $("#category").val();

                        // find courselevels
                        $.ajax({
                            url: 'component/data3.php',
                            method: 'POST',
                            data: {'category': $ca, "status":"1"},
                            success: function (data)
                            {
                                // console.log(data);
                                $("#pkg").html(data);
                            }
                        });
                    });
                </script>
                   
        <div class="form-group">
            <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" required="required">
        </div>
        <script>
        $("body").on("change", "#pkg", function () {
                                                    //selected type
                                            $type = $(this).val();
                                            //ajax - get the price
                                            $.ajax({
                                            url: 'component/datas.php',
                                            method: 'POST',
                                            data: {'pkg': $type, "status": "1"},
                                            success: function (data)
                                            {
//                                                 console.log(data);
                                                $("#amount").val(data);
                                            }
                                            });
                                           


                                    });
                                </script>
        <div class="form-group">
            <input type="text" class="form-control av-email" av-message="invalid email"" name="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control av-password" av-message="Must contain uppercase,lowercase,special chars,digits and minimum 6 chars"" name="pwd" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block" value="o_regist">Register</button>
        </div>
                
    </form>
    
</div>
</body>
</html>                                                                 
<?php
 include 'component/footer.php';
?>