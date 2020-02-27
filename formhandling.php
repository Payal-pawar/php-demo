<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP FORM</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="formaction2.php" method="post">
            <div>
                <label for="">User</label>
                <input type="text" name="user">
            </div>
            <br>
            <div>
                <label for="">Pass</label>
                <input type="password" name="pass">
            </div>
            <div>
                <label for="">Qty</label>
                <input type="number" name="qty">
            </div>
            
            <br>
            <div>
                <input type="submit" name="login" value="send">
            </div>        
        </form>
    </div>

    <div>
        <h1>Registration</h1>
        <form action="formaction.php" method="post">
            <div>
                <label for="">User</label>
                <input type="text" name="user">
            </div>
            <br>
            <div>
                <label for="">Pass</label>
                <input type="password" name="pass">
            </div>
            <br>
            <div>
                <label for="">Email</label>
                <input type="email" name="email">
            </div>
            <br>
            <div>
                <input type="submit" name="registration" value="send">
            </div>        
        </form>
    </div>
</body>
</html>