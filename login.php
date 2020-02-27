<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div>
        <h1>Login</h1>
        <form action="loginprocess.php" method="post">
            <div>
                <label for="">User</label>
                <input type="text" name="user">
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <br>
            <div>
                <input type="submit" name="login" value="Login">
            </div>        
        </form>
    </div>
</body>
</html>