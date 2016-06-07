<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>TITLE</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/img/logo.png" id="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Ads directory<span class="sr-only">(current)</span></a></li>

        <!-- These buttons only show if the user is logged IN -->
        @if (Auth::check())

          <li><a href="#">Post an ad</a></li>

        @endif
           
      </ul>

       <div class="nav-menu btn-group pull-right" role="group">

        <!-- Logout & Profile Buttons -->
        <!-- These buttons only show if the user is logged IN -->
        @if (Auth::check())

        <a href="{{{ action('HomeController@logOut') }}}" type="button" class="btn btn-default" id="logout-button">Logout</a>
        <a href="#" type="button" class="btn btn-default" id="profile-button">Profile</a>

        @else

        <!-- Login & Signup Buttons -->
        <!-- These only show if the user is logged OUT -->

        <button type="button" class="btn btn-default" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</button>
        <button type="button" class="btn btn-default" id="signup-modal-button" data-toggle="modal" data-target=".signup-modal">Sign Up</button>

        @endif

      </div>

      <!-- Login modal -->
      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="mySmallModalLabel">Welcome back!</h4>
              <form action="{{{ action('HomeController@loginForm') }}}" method="POST">
                <div id="loginUserName" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="loginEmail" class="sr-only">Email</label>
                  <input name="email" id="loginUsername" type="email" class="form-control" placeholder="Username">
                </div>
                <div id="loginPasswordField" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="loginPassword" class="sr-only">Password</label>
                    <input name="password" id="loginPassword" type="password" class="form-control" placeholder="Password">
                </div>
                <div id="emailLoginBtnDiv" class="form-group col-sm-10 col-sm-offset-1 text-center">
                    <button id="login-button" type="submit" class="btn btn-primary btn-block">CLICK TO LOG IN</button>
                </div>
              </form>
              <div class="text-center">
                  <a href="#" id="forgotPasswordLink">Forgot your password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Signup modal -->
      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-center" id="mySmallModalLabel">Let's Get Started!</h4>
              <form method="POST">
                <div id="signupNameField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="signupNameField" class="sr-only">Name</label>
                  <input name='signupNameField' id="signupNameField" type="text" class="form-control" name="title" maxlength="50" placeholder="Your Name" required>
                </div>
                <div id="signupEmailField" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="signupEmailField" class="sr-only">E-Mail</label>
                    <input name='signupEmailField' id="signupEmailField" type="text" class="form-control" name="title" maxlength="50" placeholder="Your E-Mail"required>
                </div>
                <div id="signupUsernameField" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="signupUsernameField" class="sr-only">Username</label>
                    <input name='signupUsernameField' id="signupUsernameField" type="text" class="form-control" name="title" maxlength="20" placeholder="Create a Username" required>
                </div>
                <div id="signupPasswordField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="signupPasswordField" class="sr-only">Password</label>
                  <input name='signupPasswordField' id="signupPasswordField" type="password" class="form-control" name="title" maxlength="20" placeholder="Create a Password" required>
                </div>

                <div id="signupConfirmField" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="signupConfirmField" class="sr-only">Confirm Password</label>
                    <input name='signupConfirmField' id="signupConfirmField" type="password" class="form-control" name="title" maxlength="20" placeholder="Confirm Password"required>
                </div>
                <div id="signup-button" class="form-group col-sm-10 col-sm-offset-1 text-center">
                    <button type="submit" class="btn btn-primary btn-block">CLICK TO SIGN UP</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif


    @yield('content')

<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>