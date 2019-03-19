<?php
 include 'component/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Staff Register Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <form action="actions/staff-registration.php" class="oh-autoval-form" method="post" onsubmit="return"> 
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input type="text" class="form-control av-name" av-message="Min. 3 and Only Alphabets allowed..!"" name="name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="address" placeholder="Address"  required="required"></textarea> 
        </div>

    <div class="form-group">
    <div class="row">
      <div class="col-md-6" >
        <label class="radio-inline"  >
          <input type="radio" name="gender" value="Male" id="gender" checked>Male
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="Female" id="gender">Female
        </label>
      </div>
    </div>
</div>
        <div class="form-group">

            <input type="text" class="form-control"name="dob" placeholder="Date of Birth" required="required">
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
                                
              <select class="form-control" name="state" id="state" required/>    </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dist" id="dist" required/>    </select>
            <!-- <input type="text" class="form-control" placeholder="District" required="required"> -->
        </div> 
        <div class="form-group">
                                <!-- <label>Country</label> -->
                                <select class="form-control" name="qul" id="qul" required="required">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "tourism");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                            $s = "Select qid,qualification from tbl_qualification where status=1";
                                            $result1 = mysqli_query($con, $s);
                                            echo "<option value =><------Select Qualification-----></option>";
                                            while ($row = mysqli_fetch_array($result1)) {
                                                $q = $row['qualification'];
                                                $id1 = $row['qid'];
                                                echo "<option value='$id1'>$q</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                            </div>
        <div class="form-group">
                                
              <select class="form-control" name="desig" id="desig" required/>    </select>
        </div>
        <script>
                   $("#qul").on("change", function () {
                        $("#desig").html("");
                        $ds = $("#qul").val();

                        // find courselevels
                        $.ajax({
                            url: 'component/data2.php',
                            method: 'POST',
                            data: {'qul': $ds, "status":"1"},
                            success: function (data)
                            {
                                // console.log(data);
                                $("#desig").html(data);
                            }
                        });
                    });
                </script>
        <div class="form-group">
            <input type="text" class="form-control" name="doj" placeholder="Date of Joining" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control av-mobile" av-message="Invalid mobile number"" name="mob" placeholder="Mobile" required="required">
        </div>      
        <div class="form-group">
            <input type="text" class="form-control av-email" av-message="invalid email"" name="email" placeholder="E-mail" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control av-password" av-message="Must contain uppercase,lowercase,special chars,digits and minimum 6 chars" " name="pwd" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block" value="s_regist">Register</button>
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
                
                
    </form>
    
</div>
</body>
</html>                                                                 
<?php
 include 'component/footer.php';
?>