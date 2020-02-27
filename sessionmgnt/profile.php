<?php 

include('inc/header.php');
session_start();

$message_class = ""; 
$message = "";
if(isset($_SESSION['error'])){
    $message = $_SESSION['error'];
    $message_class = 'danger';
    $_SESSION['error'] = "";
}else if(isset($_SESSION['success'])){
    $message = $_SESSION['success'];
    $message_class = 'success';  
    $_SESSION['success'] = "";
}

if(!isset($_SESSION['login'])){
    $_SESSION['error'] = "Please, login session timed out or invalid connection!";
    header('Location: login.php');
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
            <div class="col-md-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                    <a href="login.php" class="btn btn-primary">Login</a>
                </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>