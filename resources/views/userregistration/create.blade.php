<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/stylereg.css">
</head>

<body>

<div class="main">
    <section class="signup">
        <!-- <img src="images/blurbook.jpg" alt=""> -->

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form" action="/register" enctype="multipasrt/form-data">
                    {{ csrf_field() }}
                    <h2 class="card-title">REGISTER</h2>
                   
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-input" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-input" name="username" placeholder="Your Username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-input" name="email" placeholder="Your Mail" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <img class="product" width="200" height="200" />
                                <input type="file" class="uploads form-input" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                            <select class="form-control" name="level" required="">
                                <option selected="user">User</option>
                            </select>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-input" placeholder="Your Password" onkeyup='check();' name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="confirm_password" type="password" placeholder="Confirm Password" onkeyup="check()" class="form-input" name="password_confirmation" required>
                                <span id='message'></span>
                            </div>
                        </div>

                        <div class="form-group">
                        <a href="/login" class="btn btn-light pull-right"><input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" /></a>

                        </div>
                        <div class="form-group">
                            <input type="reset" name="submit" id="submit" class="form-submit" value="Reset" />
                        </div>
                        <p class="loginhere">
                        Have already an account ? <a href="/login" class="btn btn-light pull-right">Login Here</a>
                        </p>   
                    </div>
                </div>
                </div>
                </div>
                </form> 
            </div>
        </div>
    </section>
</div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/mainreg.js"></script>
</body>
</html>