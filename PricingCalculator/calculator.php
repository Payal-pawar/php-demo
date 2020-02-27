<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class=".container-fluid">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="category">Options</label>
                            </div>
                            <select name="category" class="custom-select" id="category">
                            <option selected>Apparel</option>
                            <option value="Automotive-accessories">Automotive-accessories</option>
                            <option value="Backpacks">Backpacks</option>
                            <option value="Books">Books</option>
                            <option value="Camera">Camera</option>
                            <option value="Clock">Clock</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="price">Price</label>
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="price" class="form-control" type="text">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="country">Country</label>
                            </div>
                            <select name="country" class="custom-select" id="country">
                            <option value="India" size="60">India</option>
                            <option value="Spain" size="60">Spain</option>
                            <option value="Usa " size="60">Usa</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="weight">Weight</label>
                            </div>
                            <input name="weight" class="form-control" type="text">
                            <div class="input-group-append">
                                <span class="input-group-text">gm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="shipping">Shipping type</label>
                            </div>
                            <select name="shipping" class="custom-select" id="shipping">
                            <option selected>Choose..</option>
                            <option value="Amazone" size="60">Amazon Shipping</option>
                            <option value="Flikart" size="60">Flipkart</option>
                            <option value="Meesho " size="60">Meesho</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" id="btn-check" class="btn btn-primary" name="check">getprice</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Fees</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Referral Fees</td>
                                <td id="text"></td>
                            </tr>
                            <tr>
                                <td>Closing Fees</td>
                                <td id="close"></td>
                            </tr>
                            <tr>
                                <td>Amazone Shipping Fees</td>
                                <td id="shipp"></td>
                            </tr>
                            <tr>
                                <td>Referral+Closing+Shipping fees</td>
                                <td id="total1"></td>
                            </tr>
                            <tr>
                                <td>GST on Referral+Closing+Shipping fees</td>
                                <td id="includeGst"></td>
                            </tr>
                            <tr>
                                <td>Total Amazon Charges</td>
                                <td id="total2"></td>
                            </tr>
                            <tr>
                                <td>You make</td>
                                <td id="Annualamount"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#btn-check').click(function() {
            event.preventDefault();
            var calcdata = {
                category: $('#category').val(),
                price: $('input[name="price"]').val(),
                country: $('#country').val(),
                weight: $('input[name="weight"]').val(),
                shipping: $('#shipping').val()
            };
            //console.log(calcdata);
            $.ajax({
                    url: "http://localhost/assign/PricingCalculator/amazonprice.php",
                    method: "post",
                    data: JSON.stringify(calcdata)
                }).done(
                    function(result) {
                        result = JSON.parse(result);
                        console.log(result);

                        $('#text').html(result.refer);
                        $('#close').html(result.closing);
                        $('#shipp').html(result.shipping);
                        $('#total1').html(result.rcs);
                        $('#includeGst').html(result.gst);
                        $('#total2').html(result.charge);
                        $('#Annualamount').html(result.amount);
                    }

                )
                .fail(function() {
                    console.log("ERROR");
                });
        });

    });
</script>


</html>