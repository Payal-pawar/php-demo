<?php
session_start();
$message = '';

if(isset($_SESSION['success'])){
    $message = $_SESSION['success'];
    $message_class = 'success';
    $_SESSION['success'] = '';
}

if (isset($_SESSION['error'])) {
    $message = $_SESSION['error'];
    $message_class = 'danger';
    $_SESSION['error'] = '';
}
?>

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
        <div class="container-fluid">
            <div class="row">
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

                <!--  Personal Details -->
                <div class="col-md-12 mt-3">
                    <form action="validate.php" method="post">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h5 class="text-white">Personal Details</h5>
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
                                                <option value="Ms">Ms.</option>
                                                <option value="Dr">Dr.</option>

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
                                            <input type="date" name="dob" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label><strong>Marital Status:</strong></label>
                                        <div></div>
                                        <div class="form-check-inline">
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" id="customRadio3" name="marital_status" class="custom-control-input" value="Married">
                                                <label class="custom-control-label" for="customRadio3">Married</label>
                                            </div>
                                            <div class="custom-control custom-radio mr-2">
                                                <input type="radio" id="customRadio4" name="marital_status" class="custom-control-input" value="Unmarried">
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
                            </div>
                        </div>
                        <br>
                        <!--  Communication Details -->
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h5 class="text-white">Communication Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>Present Address:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="pres-address" name="pre_address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>State:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select states-selector" id="pres-state" name="state">
                                                <option value="gujarat">GUJARAT</option>
                                                <option value="del">DELHI</option>
                                                <option value="assm">ASSAM</option>
                                                <option value="bihar">BIHAR</option>
                                                <option value="goa">GOA</option>
                                                <option value="danddiu">DAMAN & DIU</option>
                                                <option value="harya">HARYANA</option>
                                                <option value="kerala">KERALA</option>
                                                <option value="jhar">JHARKHAND</option>
                                                <option value="ori">ORISSA</option>
    
                                            </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>District:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select district-selector" id="pres-dist" name="district">
                                                    <option value="">--Select--</option>
                                                    <option value="ahd">Ahmedabad</option>
                                                    <option value="bharuch">bharuch</option>
                                                    <option value="baroda">vadodara</option>
                                                    <option value="anand">anand</option>
                                                    <option value="srt">surat</option>
                                                    <option value="rajkot">Rajkot</option>
                                                    <option value="bhavnagar">bhavnagar</option>
                                                    <option value="dahod">dahod</option>
                                                    <option value="gandhi">Gandhinagar</option>
                                                    <option value="jamnagar">jamnagar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Taluka:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select taluka-selector" id="pres-tal" name="taluka">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Pincode:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" name="pincode" id="pres-pincode" style="width:100%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Mobile No:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" name="mob" id="" style="width:100%;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Nationality:</strong></lable>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" name="nationality" id="" value="Indian">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check-inline">
                                                    <div class="custom-control custom-checkbox mr-2">
                                                        <input type="checkbox" id="filldetail" name="" class="custom-control-input">
                                                        <label class="custom-control-label" for="filldetail">Correspondence As Above</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>Permanent Address:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <textarea class="form-control" col="5" id="perm-address"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>State:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select states-selector" id="perm-state" name="state">
                                            <option value="gujarat">GUJARAT</option>
                                            <option value="del">DELHI</option>
                                            <option value="assm">ASSAM</option>
                                            <option value="bihar">BIHAR</option>
                                            <option value="goa">GOA</option>
                                            <option value="danddiu">DAMAN & DIU</option>
                                            <option value="harya">HARYANA</option>
                                            <option value="kerala">KERALA</option>
                                            <option value="jhar">JHARKHAND</option>
                                            <option value="ori">ORISSA</option>

                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><strong>District:</strong></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select district-selector" id="perm-dist" name="district">
                                                    <option value="">--Select--</option>
                                                    <option value="ahd">Ahmedabad</option>
                                                    <option value="bharuch">bharuch</option>
                                                    <option value="baroda">vadodara</option>
                                                    <option value="anand">anand</option>
                                                    <option value="srt">surat</option>
                                                    <option value="rajkot">Rajkot</option>
                                                    <option value="bhavnagar">bhavnagar</option>
                                                    <option value="dahod">dahod</option>
                                                    <option value="gandhi">Gandhinagar</option>
                                                    <option value="jamnagar">jamnagar</option>
                                                </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Taluka:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <select class="custom-select taluka-selector" id="perm-tal" name="taluka">
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Pincode:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" name="pin" id="perm-pincode" style="width:100%;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <lable><strong>Email:</strong></lable>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="" style="width:100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">SAVE</button>
                            </div>

                    </form>
                    </div>
                </div>
            </div>
    </body>

    </html>