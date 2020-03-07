<?php
session_start();

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    session_unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <form action="validate.php" method="post">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-white">Personal Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-1">
                                    <div class="input-group">
                                        <label><strong>Title:</strong></label>
                                        <div class="input-group-prepend">
                                            <select class="custom-select" id="inputGroupSelect01" name="title">
                                          <option value="Mr">Mr.</option>
                                          <option value="Mrs">Mrs.</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label><strong>First and last name</strong></label>
                                    <div class="input-group">
                                        <input type="text" name="fname" aria-label="First name" class="form-control" placeholder="First Name">
                                        <input type="text" name="lname" aria-label="Last name" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label><strong>Father/Husband Name:</strong></label>
                                    <div class="form-group">
                                        <input type="text" name="fhname" aria-label="Last name" class="form-control" placeholder="Father/Husband'name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label><strong>Mothers's Name:</strong></label>
                                    <div class="form-group">
                                        <input type="text" name="mname" aria-label="Last name" class="form-control" placeholder="Mother's Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-3 ">
                                    <label><strong>Gender:</strong></label>
                                    <div></div>
                                    <div class="form-check-inline">
                                        <div class="custom-control custom-radio mr-2">
                                            <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="Male">
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio mr-2">
                                            <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="Female">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label><strong>Date Of Birth:</strong></label>
                                    <div class="form-group">
                                        <input type="date" name="date" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label><strong>Marital Status:</strong></label>
                                    <div></div>
                                    <div class="form-check-inline">
                                        <div class="custom-control custom-radio mr-2">
                                            <input type="radio" id="customRadio3" name="maritalstatus" class="custom-control-input" value="Married">
                                            <label class="custom-control-label" for="customRadio3">Married</label>
                                        </div>
                                        <div class="custom-control custom-radio mr-2">
                                            <input type="radio" id="customRadio4" name="maritalstatus" class="custom-control-input" value="Unmarried">
                                            <label class="custom-control-label" for="customRadio4">Unmarried</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label><strong>Category:</strong></label>
                                    <div class="form-group">
                                        <select class="custom-select" id="inputGroupSelect01" name="category">
                                            <option value="open">General</option>
                                            <option value="handicap">General(EWS)</option>
                                            <option value="sebc">SEBC</option>
                                            <option value="sc">SC</option>
                                            <option value="st">ST</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block disabled">SUBMIT</button>
                                </div>
                            </div>
                </form>
                </div>
                </div>


                
            </div>
</body>

</html>