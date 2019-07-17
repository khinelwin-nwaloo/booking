<style>

    /*@import  url('https://fonts.googleapis.com/css?family=Numans');*/

@font-face {
    font-family: Numans-Regular;
    src: url(assets/fonts/Numans-Regular.ttf);
}

    .big_container{
    background-image: url(assets/logo/login_hospital.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }
    .container{
    height: 100%;
    align-content: center;
    }

    .card{
    height: 300px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(255,255,255,0) !important;
    }

    .card-header h3{
    color: white;
    }

    input:focus{
    outline: 0 0 0 0  !important;
    box-shadow: 0 0 0 0 !important;
    }

    .login_btn{
    color: black;
    background-color: #10a64b;
    }

    .login_btn:hover{
    color: black;
    background-color: white;
    }

    .login_fb_btn{
    color: black;
    background-color: #3B5998;
    }

    .login_btn:hover{
    color: black;
    background-color: white;
    }

    .links{
    color: white;
    }
    .form-heading { color:#fff; font-size:23px;}
    .panel img {margin-bottom:30px; line-height:24px; width:60%; height:60px}
    .login-form .form-control {
    background: #f7f7f7 none repeat scroll 0 0;
    border: 1px solid #d4d4d4;
    border-radius: 4px;
    font-size: 14px;
    height: 40px;
    line-height: 40px;
    }
    .main-div {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 2px;
    margin: 5px auto 10px;
    max-width: 38%;
    padding: 0px 40px 70px 71px;
    }
    .main-div2 {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 2px;
    margin: 5px auto 10px;
    max-width: 38%;
    padding: 0px 0px 0px 0px;
    }

    .login-form .form-group {
    margin-bottom:10px;
    }
    .login-form{ text-align:center;}
    .forgot a {
    color: #777777;
    font-size: 14px;
    text-decoration: underline;
    }
    .login-form  .btn.btn-primary {
    background: #10A64B none repeat scroll 0 0;
    border-color: #10A64B;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    padding: 0;
    }
    .forgot {
    text-align: left; margin-bottom:20px;
    }
    .botto-text {
    color: #ffffff;
    font-size: 14px;
    margin: auto;
    }
    #loginphone{
    background: #10A64B  none repeat scroll 0 0;
    border-color: #10A64B !important;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    padding: 0;
    border-radius: 4px;
    background-color: #10A64B;
    }

    #loginfacebook{
    background: #3B5998  none repeat scroll 0 0;
    border-color: #3B5998;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 40px;
    line-height: 40px;
    padding: 0;
    background-color: #3B5998;
    font-color:#ffffff !important;
    }
    #countrycode{
    border: 1px solid #d4d4d4;
    border-radius: 4px;
    font-size: 14px;
    height: 40px;
    line-height: 40px;
    width: 100px;

    }
    .fb_image{
    width: 15px;
    height: 15px;
    }
    .privacy{
        top:200px !important;
        width:18px;
        height:18px;
        border-radius:5px;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(url('/assets/logo/fav.ico')); ?>">

<div class="big_container">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header" align="center">
                <img src="<?php echo e(url('assets/img/logo (2).png')); ?>" alt="" class="imgright" width="200px" height="70px">

                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary loginbutton">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <!-- <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?> -->
                            </div>
                        </div>
                        <div class="form-group row mb-0" >
                            <div class="col-md-6 offset-md-4">
                            <label align="center"> 
                                Don't have an account yet? 
                                <a href="<?php echo e(url('register')); ?>">Create an account</a>
                            </label>
                        </div>
                        </div>   
                    </form>             
                </div>
            </div>
        </div>
    </div>
</div>






<?php /**PATH C:\xampp\htdocs\hospital_booking\resources\views/patient/login.blade.php ENDPATH**/ ?>