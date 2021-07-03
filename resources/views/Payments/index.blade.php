<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h2 class="text-info"> &nbsp; &nbsp; &nbsp;MAKE A ONE-TIME GIFT</h2><br>
                <form action="" method="POST">
                    <div class="container">
                    
                    <div class="row">
                        <div class="col-4 bg-green">
                            <button type="button" onclick="adding(100)" class="btn btn-info btn-lg btn-flat">100</button>
                        </div>
                        <div class="col-4">
                            <button type="button" onclick="adding(250)" class="btn btn-info btn-lg btn-flat">250</button>
                        </div>
                        <div class="col-4">
                            <button type="button" onclick="adding(500)" class="btn btn-info btn-lg btn-flat">500</button>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-4 bg-green">
                            <button type="button" onclick="adding(1000)" class="btn btn-info btn-lg btn-flat">1000</button>
                        </div>
                        <div class="col-4">
                            <button type="button" onclick="adding(5000)" class="btn btn-info btn-lg btn-flat">5000</button>
                        </div>
                        <div class="col-4">
                            <button type="button"  onclick="adding(9900)" class="btn btn-info btn-lg btn-flat">9900</button>
                        </div>
                    </div>
                    <br>
                    <input type="text" name="" required id="maxValue" class="form-control" placeholder="Name your own amount may be 25,000 Rwf" id=""><br>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <input type="checkbox" checked class="form-check-input" class="form-check-input" name="" id="">I'll cover my transaction fee
                        </div>
                    </div>&nbsp;
                    <script src="https://checkout.flutterwave.com/v3.js"></script>
                    <button class="btn form-control btn-info" type="button" onClick="makePayment()">Donate</button>
                </form>
            </div>
            <div class="col-3"></div>

        </div>
    </div>
</body>
</html>

<script>
    function adding(value){
        var finalVal = document.getElementById('maxValue');
        
        finalVal.value = value;
    }

  function makePayment() {
        var finalVal = document.getElementById('maxValue');
        if (finalVal.value != "") {
            window.location.href = "donateXYZ/"+finalVal.value
        }
        else{
            alert("Fill out field");
        }
  }
</script>