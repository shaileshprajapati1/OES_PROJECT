<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-light text-dark">
   
        <h3 class="text-center mt-5">Login Form</h3>
        <form method="post">
            <div class="row mt-2">
                <div class="col-sm-6 col-md-8 offset-2">
                    <label for="eamil" class="lable-control">Email</label>
                    <input type="eamil" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6 col-md-8 offset-2">
                    <label for="password" class="lable-control">Passwrod</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-6 col-md-8 offset-5">
                    <input type="submit" value="SIGN IN" name="login" id="login" class="btn btn-success">
                </div>
            </div>
        </form>
        <div class="row mt-2">
            <div class="col-sm-6 col-md-8 offset-4">
                <a href="register">Click Here To Registration</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>