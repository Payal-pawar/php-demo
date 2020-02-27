<?php
include('../inc/header.php');
session_start();

$message_class = ""; 
$message = "";
if(isset($_SESSION['login']) &&  isset($_SESSION['remember'])){
    $_SESSION['success'] = "Welcome Back ". $_SESSION['email']. " !";
    header('Location: profile.php');
}
if(isset($_SESSION['error'])){
    $message = $_SESSION['error'];
    $message_class = 'danger';
    $_SESSION['error'] = "";
}else if(isset($_SESSION['success'])){
    $message = $_SESSION['success'];
    $message_class = 'success';    
    $_SESSION['success'] = "";
}

?>
    <div class="container">
    <?php if(!empty($message)):?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-<?=$message_class?> alert-dismissible fade show" role="alert">
                    <?=$message?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php endif;?>
        <div class="row">
            <div class="col">
                <h1 class="text-center"> Login </h1>
                <form action="loginproc.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" name="login" class="btn btn-block btn-primary">Submit</button>                    
                </form>
            </div>

        </div>
    </div>
</body>

</html>