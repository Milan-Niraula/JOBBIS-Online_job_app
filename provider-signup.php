<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration page for client.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/client-Signup.css">
</head>
<?php
include("connection.php");
$companyName     ="";
$personName      ="";
$date            ="";
$address        ="";
$website         ="";
$username   ="";
$email      ="";
$phone      ="";
$mobile      ="";
$pan        ="";
$password       ="";
$confirmpw      ="";

$error="";
$usernameError = "";
$emailError ="";
$passwordError ="";
$confirmpwError ="";


if(isset($_POST['submit'])){
$companyName      =$_POST['companyName'];
$personName      =$_POST['personName'];
$date             =$_POST['date'];
$address        =$_POST['address'];
$website        =$_POST['website'];
$username       =$_POST['username'];
$email      =$_POST['email'];
$phone          =$_POST['phone'];
$mobile         =$_POST['mobile'];
$pan        =$_POST['pan'];
$password       =$_POST['password'];
$confirmpw      =$_POST['confirmpw'];

   if($companyName=="" || $personName=="" || $username=="" || $email=="" || $phone=="" || $mobile=="" ||$pan=="" || $password=="" || $confirmpw==""){
    $error.="please fill all the required fields.";
    }

    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError.= "$email is not valid email format";
        }
        $checkuser = "SELECT * FROM `providerregistration` WHERE username = '$username' ";
        $result = mysqli_query($connection, $checkuser);
        if(mysqli_num_rows($result)>0){
            $usernameError.= "$username already taken";
        }
        if(strlen($username)<5 || strlen($username)>30){
            $usernameError.="$username must be within 5 to 30 letters.";
        }
        if(strlen($password)<5 || strlen($password)>30){
            $passwordError.="password must between 5 to 30 characters.";
        }
        if ($password != $confirmpw){
            $confirmpwError.="passwords didn't matched.";
        }
    }
   if($error=="" && $usernameError==""&& $emailError==""&& $passwordError=="" && $confirmpwError=="")
    {
        $query = " INSERT INTO `providerregistration`(`companyName`, `personName`, `date`, `address`, `website`, `username`, `email`, `phone`, `mobile`, `password`)
                                             VALUES ('$companyName ','$personName','$date ','$address','$website','$username','$email','$phone','$mobile','$password')";
        
        if($connection->query($query)  == true){
            echo "Successfully inserted."; 
            header("location:provider-form.php");        
            }
        }
        else {
            echo "ERROR:.";
        } 
}
?>
<body>
   
    <div class="popup-container">
        <div class="popup-content">
            <!-- Content goes here -->
            <div class="icon">
                <a href="home.php">
                    <i class="fa-sharp fa-solid fa-xmark" style="float: right; color: red;"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h5>Complete your Registration.</h5>
                    <h5 style="color:red"><?php echo $error; ?> </h5>
                </div>
                <div class="col-3">
                    <p style="color: gray; opacity: 0.5;">(organization)</p>
                </div>
            </div>
            <hr>
            <form method="post" action="">
            <!-- name -->
            <div class="row">
                <div class="col-6">
                    <label class="form-label">Company Name <span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="company-name" name="companyName" value="<?php echo $companyName; ?>" aria-describedby="namefield">
                </div>
                <div class="col-6">
                    <label class="form-label">Contact person Name</label>
                    <input type="text" class="form-control" id="c-person-name" name="personName" value="<?php echo $personName; ?>" aria-describedby="namefield">
                </div>

            </div>
            <br>
            <!-- detail -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Company Established Date<span class="required"
                            style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="date" name="date" value="<?php echo $date; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Current Address</label>
                    <input type="text" class="form-control" id="Address" name="address" value="<?php echo $address; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Company website</label>
                    <input type="text" class="form-control" id="website" name="website" value="<?php echo $website; ?>">
                </div>
            </div><br>
            <!-- email & username -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Username <span class="required" style="color: red;">* <?php echo $usernameError; ?></span></label>
                    <input type="text" class="form-control" id="username"name="username" value="<?php echo $username; ?>" aria-describedby="namefield">
                </div>
                <div class="col-6">
                    <label class="form-label">Email<span class="required" style="color: red;">* <?php echo $emailError; ?></span></label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- phone number-->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Phone Number <span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile; ?>" aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">PAN Number<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="pan-number" name="pan" value="<?php echo $pan; ?>" aria-describedby="namefield">
                </div>
            </div><br>
            <!-- password field -->
            <div class="row">
                <div class="col-5">
                    <label class="form-label">Password<span class="required" style="color: red;">* <?php echo $passwordError; ?></span></label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" aria-describedby="namefield">
                </div>
                <div class="col-5">
                    <label class="form-label">Confirm Password<span class="required"
                            style="color: red;">* <?php echo $confirmpwError; ?></span></label>
                    <input type="password" class="form-control" id="conform password" name="confirmpw" value="<?php echo $confirmpw; ?>" aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col-4">
                    <a href="provider-form.php">
                        <button type="button" class="btn btn-failed">Back to Login</button>
                    </a>
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <button type="submit" id="submit" name="submit" class="btn btn-submit">Submit</button>
                </div>
            </div>
            </form>
        </div>

    </div>
</body>

</html>