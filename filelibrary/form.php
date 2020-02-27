<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="filecreator.php" method="post">
        <div>
            <label for="">Folder Name</label>
            <input type="text" name="dirname"/>
        </div>
        <div>
            <label for="">Filename</label>
            <input type="text" name="filename"/>
        </div>
        <div>
            <label for="">Data</label>
            <textarea name="filedata" ols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" name="filedata" value="Send">
        </div>
    </form>
</body>
</html>