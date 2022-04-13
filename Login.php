<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Admin/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
    <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Login</h1><br>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required ><br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            
            <h5 class="text-center">Don't have an account!</h5>
            <hr/> 
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Register</button>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            <form action="/signup/" class="form-signup">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Register</h1><br>
                <input type="text" id="user-name" class="form-control" placeholder="Full name" required><br>
                <input type="email" id="user-email" class="form-control" placeholder="Email address" required><br>
                <input type="password" id="user-pass" class="form-control" placeholder="Password" required><br>
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required><br>

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
            
    </div>

    </div>
  </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>

</body>
</html>