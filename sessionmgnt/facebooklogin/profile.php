<?php 

include('../inc/header.php');
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
<div class="jumbotron">
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
            <div class="card" style="width: 19rem;">
            <img class="card-img-top" src="img_avatar2.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title"><?php echo $_SESSION['email'];?></h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
                    <!--<a href="login.php" class="btn btn-primary">Login</a>-->
                </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>