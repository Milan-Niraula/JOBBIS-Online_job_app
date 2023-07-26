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
$fname      ="";
$mname      ="";
$lname      ="";
$dob        ="";
$gender     ="";
$username   ="";
$email      ="";
$phone      ="";
$nid        ="";
$citizen        ="";
$password       ="";
$confirmpw      ="";

$error="";
$usernameError = "";
$emailError ="";
$nameError ="";
$lnameError ="";
$passwordError ="";
$confirmpwError ="";


if(isset($_POST['submit'])){
$fname      =$_POST['fname'];
$mname      =$_POST['mname'];
$lname      =$_POST['lname'];
$dob        =$_POST['dob'];
// $gender         =$_POST['gender'];
$username       =$_POST['username'];
$email      =$_POST['email'];
$phone          =$_POST['phone'];
$nid        =$_POST['nid'];
$citizen        =$_POST['citizen'];
$password       =$_POST['password'];
$confirmpw      =$_POST['confirmpw'];

   if($fname=="" || $lname=="" || $username=="" || $email=="" || $password=="" || $confirmpw==""){
    $error.="please fill all the required fields.";
    }

    else {
        if(!preg_match("/^[a-zA-z]*$/" ,$fname)){
            $nameError.="Only letters are valid.";
        }
        
        if(!preg_match("/^[a-zA-z]*$/" ,$lname)){
            $lnameError.="not valid";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError.= "this email is not in valid format";
        }
        $checkuser = "SELECT * FROM `clientregistration` WHERE username = '$username' ";
        $result = mysqli_query($connection, $checkuser);
        if(mysqli_num_rows($result)>0){
            $usernameError.= "this username is already taken";
        }
        if(strlen($username)<5 || strlen($username)>30){
            $usernameError.="username must be within 5 to 30 letters.";
        }
        if(strlen($password)<5 || strlen($password)>30){
            $passwordError.="password must between 5 to 30 characters.";
        }
        if ($password != $confirmpw){
            $confirmpwError.="passwords didn't matched.";
        }
    }
   if($error=="" && $nameError=="" && $usernameError==""&& $emailError==""&& $passwordError=="" && $confirmpwError=="")
    {
        $query = " INSERT INTO `clientregistration`(`fname`, `mname`, `lname`, `dob`, `gender`, `username`, `email`, `nid`, `phone`, `citizenNo`,  `password`)
                                        VALUES ('$fname', '$mname', '$lname', '$dob', '$gender', '$username','$email', '$nid', '$phone', '$citizen', '$password')";
        
        $sql =" INSERT INTO `clientdocument`( `username`) VALUES ('$username')";

        if(($connection->query($query) && $connection->query($sql))  == true){
            echo "Successfully inserted."; 
            header("location:client-form.php");        
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
        </div>
        <div class="col-3">
            <p style="color: gray; opacity: 0.5;">(client)</p>
        </div>
        </div>
            <hr>
            <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
            <!-- name -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">First Name <span class="required" style="color: red;">*<?php echo $error; echo $nameError; ?></span></label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $mname; ?>"  aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">Last Name <span class="required" style="color: red;">* <?php echo $error; echo $lnameError; ?></span></label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>"  aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- gender -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Date of Birth <span class="required" style="color: red;">*  <?php echo $error; ?></span></label>
                    <input type="text" class="form-control" id="dob" name="dob"  value="<?php echo $dob; ?>" >
                </div>
                <div class="col-6">
                    <div class="radio-label">
                        <label>Gender <span class="required" style="color: red;">*</span></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male"
                            value="male">
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female"
                            value="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other"
                            value="other">
                        <label class="form-check-label" for="other">
                            Other
                        </label>
                    </div>
                </div>
            </div><br>
            <!-- email & username -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Username <span class="required" style="color: red;">* <?php echo $error; echo $usernameError; ?></span></label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>"  aria-describedby="namefield">
                </div>
                <div class="col-6">
                    <label class="form-label">Email<span class="required" style="color: red;">*<?php echo $emailError; ?></span></label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>"  aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- phone number-->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Phone Number <span class="required" style="color: red;">* <?php echo $error; ?></span></label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>"   aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">National ID</label>
                    <input type="text" class="form-control" id="nid" name="nid" value="<?php echo $nid; ?>"  aria-describedby="namefield">
                </div>
                <div class="col-4">
                    <label class="form-label">Citizenship Number<span class="required" style="color: red;">* <?php echo $error; ?></span></label>
                    <input type="text" class="form-control" id="citizen-number" name="citizen" value="<?php echo $citizen; ?>"  aria-describedby="namefield">
                </div>
            </div><br>
            <!-- password field -->
            <div class="row">
                <div class="col-5">
                    <label class="form-label">Password<span class="required" style="color: red;">* <?php echo $error; echo $passwordError; ?></span></label>
                    <input type="password" class="form-control" id="password" name="password"  value="<?php echo $password; ?>"  aria-describedby="namefield">
                </div>
                <div class="col-5">
                    <label class="form-label">Confirm Password<span class="required" style="color: red;">* <?php echo $error; echo $confirmpwError; ?></span></label>
                    <input type="password" class="form-control" id="conform password" name="confirmpw" value="<?php echo $confirmpw; ?>"  aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- submit button -->
            <div class="row">
                <div class="col-4">
                    <a href="client-form.php">
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