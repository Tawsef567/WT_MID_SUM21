<?php
$card_holder_name ="";
$card_number ="";
$expire_date ="";
$cvc ="";
$amount ="";

$err_card_holder_name ="";
$err_card_number ="";
$err_expire_date ="";
$err_cvc ="";
$err_amount ="";

$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //card holder name//
		if(empty($_POST["card_holder_name"])){
			$hasError=true;
			$err_card_holder_name="-Card Holder Name Required-";
		}
		else
		{
			$card_holder_name = $_POST["card_holder_name"];
		}
    //card number//
        if(empty($_POST["card_number"])){
            $hasError=true;
            $err_card_number="-Card Number Required-";
        }
        elseif (strlen($_POST["card_number"]) <=16){
			$hasError = true;
			$err_card_number = "-Your CARD NUMBER can not exceed above 16 numbers-";
		}
        else
        {
            $card_number = $_POST["card_number"];
        }
    //Expire date//
        if(empty($_POST["expire_date"])){
            $hasError=true;
            $err_expire_date="-Expire Date Required-";
        }
        else
        {
            $expire_date = $_POST["expire_date"];
        }
    //CVC//
    if(empty($_POST["cvc"])){
        $hasError=true;
        $err_cvc="-CVC Required-";
    }
    elseif (strlen($_POST["cvc"]) <=3){
        $hasError = true;
        $err_cvc = "-Your CVC number can not be above 3-";
    }
    else
    {
        $cvc = $_POST["cvc"];
    }
    //Amount//
    if(empty($_POST["amount"])){
        $hasError=true;
        $err_amount="-Amount Required-";
    }
    else
    {
        $amount = $_POST["amount"];
    }

    if(!$hasError)
    {
    echo $_POST["card_holder_name"]."<br>";
    echo $_POST["card_number"]."<br>";
    echo $_POST["expire_date"]."<br>";
    echo $_POST["cvc"]."<br>";
    echo $_POST["amount"]."<br>";
    }
}
?>
<html>
    <head>
        <title>Payment Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    
    <body>

     
<!--- Navabr Start--->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Car Management System</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../carlist/carlist.php">Car List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../brandlist/brandlist.php">Brand List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../bookingpage.php">Booking page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login.php">Log in</a>
        </li>
      </ul>
    </div>
    </div>
</nav>

<!--- Navabr End--->

        <form action="booking.php">
            <fieldset style="background: url('payment_page_background.jpg') no-repeat" height="100%">
                
                <legend>Credit Card Info</legend>
                <table>
                    <tr>
                        <td align="right">Card Holder Name</td>
                        <td>
                            :<input name="card_holder_name" value="<?php echo $card_holder_name;?>" type="text" placeholder="The name on your card"><br>
                            <span style="color:red;"><?php echo $err_card_holder_name;?></span>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">Card Number</td>
                            <td>
                                :<input name="card_number" value="<?php echo $card_number;?>" type="number" placeholder="Type your card number"><br>
                                <span style="color:red;"><?php echo $err_card_number;?></span>
                            </td>
                        </tr>
                    <tr>
                        <td align="right">Expire Date</td>
                                <td>
                                    :<input name="expire_date" value="<?php echo $expire_date;?>" type="number" placeholder="Type your expire date"><br>
                                    <span style="color:red;"><?php echo $err_expire_date;?></span>
                                </td>
                            </tr>
                    </tr>
                    <tr>
                    <td align="right">CVC</td>
                                <td>
                                    :<input name="cvc" value="<?php echo $cvc;?>" type="number" placeholder="cvc is at the back of card"><br>
                                    <span style="color:red;"><?php echo $err_cvc;?></span>
                                </td>
                    </tr>
                    <tr>
                    <td align="right">Amout</td>
                                <td>
                                    :<input name="amount" value="<?php echo $amount;?>" type="number" placeholder="The price"><br>
                                    <span style="color:red;"><?php echo $err_amount;?></span>
                                </td>
                    </tr>
                    <tr>
					    <td><button><a href="../index.php">Payment Confirm</a></button></td>
				    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>