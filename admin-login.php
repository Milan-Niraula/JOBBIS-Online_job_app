<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/admin-login.css">
</head>
<?php
include("connection.php");
$username ="";
$password ="";
$error ="";
if(isset($_POST['submit'])){
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query= "SELECT * FROM `admindb` WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);
    if($count!=0){
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$username;
        header('location: admin-dashboard-job.php');
    }
    else {
        $error.= "login failed!! please enter valid data";
    }
}
?>
<body>
    <div class="popup-container">
        <div class="popup-content">
            <div class="icon">
                <a href="home.php">
                    <i class="fa-sharp fa-solid fa-xmark" style="float: right; color: red;"></i>
                </a>
            </div>
            <form method="post" action="">
                <h2 class="text-center">Proceed to Login.</h2>
                <span class="required" style="color: red;"><?php echo $error; ?></span>
                <hr>
                <div class="row">
                    <div class="col-10">
                        <label class="form-label">Username <span class="required" style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="admin-username" name="username" value="<?php echo $username; ?>" aria-describedby="namefield"
                            placeholder="Username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="admin-password" name="password" value="<?php echo $password; ?>" aria-describedby="namefield" placeholder="**********" required>
                    </div>
                </div> <br>
                <div class="form-group">
                    <button class="btn btn-submit" type="submit" name="submit">
                        login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>