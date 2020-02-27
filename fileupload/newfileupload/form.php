<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <form action="fileupload.php" enctype="multipart/form-data" method="POST">
            <label><strong>UPLOAD PHOTO:</strong></label>
            <span style="color: tomato;">
              (Min File Size is 10 KB to 15 KB)
                </span>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="filedata">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="mt-3">
                <input type="submit" value="SUBMIT" name="send" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>