<?php include 'header.php'; ?>
    <h2>Login Form</h2>
<?php
session_start();
if (isset($_SESSION['error'])):?>
    <div class="w3-panel w3-red">
        <p><?= $_SESSION['error'] ?></p>
    </div>
<?php endif; ?>
<?php
session_start();
if (isset($_SESSION['success'])):?>
    <div class="w3-panel w3-green">
        <p><?= $_SESSION['success'] ?></p>
    </div>
<?php endif; ?>
    <form action="login.php" method="post">
        <div class="imgcontainer">
            <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw">

            <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="psw"><a href="signup.php">Sign Up</a></span>
        </div>
    </form>
<?php
session_unset();
session_destroy();
include 'footer.php'; ?>