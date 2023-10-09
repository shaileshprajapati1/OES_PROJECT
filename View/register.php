<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIGN UP FORM </title>
    <link rel="stylesheet" href="<?php echo $this->URL; ?>register/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $this->URL; ?>register/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="<?php echo $this->URL; ?>register/css/main.css">
    <link rel="stylesheet" href="<?php echo $this->URL; ?>register/css/font.css">
    <script src="<?php echo $this->URL; ?>register/js/jquery.js" type="text/javascript"></script>

    <script src="<?php echo $this->URL; ?>register/js/bootstrap.min.js" type="text/javascript"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <script>
        function validateForm() {
            var y = document.forms["form"]["name"].value;
            var letters = /^[A-Za-z]+$/;
            if (y == null || y == "") {
                alert("Name must be filled out.");
                return false;
            }
            var z = document.forms["form"]["college"].value;
            if (z == null || z == "") {
                alert("college must be filled out.");
                return false;
            }
            var x = document.forms["form"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("Not a valid e-mail address.");
                return false;
            }
            var a = document.forms["form"]["password"].value;
            if (a == null || a == "") {
                alert("Password must be filled out");
                return false;
            }
            if (a.length < 5 || a.length > 25) {
                alert("Passwords must be 5 to 25 characters long.");
                return false;
            }
            var b = document.forms["form"]["cpassword"].value;
            if (a != b) {
                alert("Passwords must match.");
                return false;
            }
        }
    </script>


</head>

<body>
    <div class="container">
        <div class="col-md-8 panel">
            <a href="home"><img src="https://cdn-icons-png.flaticon.com/128/1946/1946488.png?ga=GA1.1.486361315.1680669941" width="30px" alt=""></a>
            <h1 class="text-center">Register Form</h1>
            <!-- sign in form begins -->
            <form class="form-horizontal" name="form" onSubmit="return validateForm()" method="POST">
                <fieldset>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="gender"></label>
                        <div class="col-md-12">
                            <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="college"></label>
                        <div class="col-md-12">
                            <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label title1" for="email"></label>
                        <div class="col-md-12">
                            <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="mob"></label>
                        <div class="col-md-12">
                            <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="tel">

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="password"></label>
                        <div class="col-md-12">
                            <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12control-label" for="cpassword"></label>
                        <div class="col-md-12">
                            <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for=""></label>
                        <div class="col-md-12">
                            <input type="submit" name="register" class="sub" value="sign up" class="btn btn-primary" />
                        </div>
                    </div>

                </fieldset>
            </form>
        </div><!--col-md-6 end-->
    </div>

</body>

</html>