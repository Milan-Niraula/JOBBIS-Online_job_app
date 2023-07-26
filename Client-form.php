<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/FORM.CSS">
</head>

<?php
include("connection.php");

$username ="";
$password ="";
$error ="";
if(isset($_POST['login'])){
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query= "SELECT * FROM clientregistration WHERE Username='$username' AND password='$password' ";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);
    if($count!=0){
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$username;
        header('location: dashboard-client.php');
    }
    else {
        $error.= "login failed!! please enter valid data";
    }
}
?>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder">
                <div class="top">
                    <img src="./zobbis/Project-favicon.png" width="150" height="80" alt="Logo">
                </div>
                <div class="bottom">
                    <h4>Client Login Form</h4>
                    <hr>

                    <h5>Create a free account to access premium features</h5>

                    <h6>Your own dashboard</h6>
                    <p>
                        Keep track of your applications and save content to your dashboard.
                    </p>
                    <h6>Personalised Alerts</h6>
                    <p>
                        Get instant notifications about new opportunities in your area of
                        interest.
                    </p>
                    <h6>Latest advice</h6>
                    <p>
                        We'll keep you up-to-date with the latest articles and advice
                        relevant to you.
                    </p>
                </div>
            </div>
            <form method="post" action=""  enctype='multipart/form-data'>
                <h5 style="color:red"> <?php echo $error; ?></h5>
                <a href="home.php">
                    <i class="fa-sharp fa-solid fa-xmark" style="float: right; color: red;"></i>
                </a>
                <h2 class="text-center">Proceed to Login.</h2>  <div class="icon">
            </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder=" Enter Username" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                    <label>Password </label>
                    <input class="form-control" type="password" name="password" value="<?php echo $password; ?>"
                        placeholder=" Enter your Password">
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="login">
                        login
                    </button>
                </div><br>
                <div class="hint">
                    Don't have an account? <a href="client-Signup.php">Sign up.</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>