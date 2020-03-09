<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="ajax.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Gender</th>
                            <th scope="col">DOB</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="datatable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editPersonal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="validate.php" method="post">
                    <input type="hidden" name="id" id="data-id">
                    <div class="modal-body">
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
                                                <select class="custom-select" id="data-title" name="title">
                                          <option value="Mr">Mr.</option>
                                          <option value="Mrs">Mrs.</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label><strong>First and last name</strong></label>
                                        <div class="input-group">
                                            <input type="text" id="data-fname" name="fname" aria-label="First name" class="form-control" placeholder="First Name">
                                            <input type="text" id="data-lname" name="lname" aria-label="Last name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Father/Husband Name:</strong></label>
                                        <div class="form-group">
                                            <input type="text" name="fhname" id="data-fhname" aria-label="Last name" class="form-control" placeholder="Father/Husband'name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Mothers's Name:</strong></label>
                                        <div class="form-group">
                                            <input type="text" name="mname" id="data-mname" aria-label="Last name" class="form-control" placeholder="Mother's Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-3 ">
                                        <label><strong>Gender:</strong></label>
                                        <div></div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" name="gender" class="custom-control-input" value="Male">
                                                <label class="custom-control-label" for="customRadio1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" name="gender" class="custom-control-input" value="Female">
                                                <label class="custom-control-label" for="customRadio2">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Date Of Birth:</strong></label>
                                        <div class="form-group">
                                            <input type="date" id="data-date" name="dob" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Marital Status:</strong></label>
                                        <div></div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" name="marital_status" class="custom-control-input" value="Married">
                                                <label class="custom-control-label" for="customRadio3">Married</label>
                                            </div>
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" name="marital_status" class="custom-control-input" value="Unmarried">
                                                <label class="custom-control-label" for="customRadio4">Unmarried</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Category:</strong></label>
                                        <div class="form-group">
                                            <select class="custom-select" id="data-category" name="category">
                                            <option value="open">General</option>
                                            <option value="handicap">General(EWS)</option>
                                            <option value="sebc">SEBC</option>
                                            <option value="sc">SC</option>
                                            <option value="st">ST</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-primary" value="Save changes">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>