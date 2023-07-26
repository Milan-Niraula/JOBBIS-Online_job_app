<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vacancy: for Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/dashboard-das.css">
</head>

<body>
    <!-- code for apply for job popup -->
    <div class="apply-form" id="applyPopup">
        <?php
        include("connection.php");
        session_start();
        $error ="";
        if(isset($_POST['submit'])){
           
            $checkuser = "SELECT * FROM `jobaplier` WHERE adverisement = '$_GET[adverisement]' AND username = '$_SESSION[username]' ";
            $result = mysqli_query($connection, $checkuser);
            if(mysqli_num_rows($result)>0){
                $error.= "You have already applied fot that job";
            }
               if($error==""){
                $sql = "INSERT INTO `jobaplier`(`adverisement`, `username`) VALUES ('$_GET[adverisement]','$_SESSION[username]')";
                
                if($connection->query($sql) == true){
                    header('location: dashboard-vacancy.php');
                       }
               }
                    else {
                        echo "ERROR!!";
                    }
                    $connection->close();
                }
        ?>
        <div class="form-container form-container-apply" style="margin-top:5%; margin-left:25%">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" >
            <div class="form-container-applyField">
                <div class="modal-header-blue modal-header">
                    <h5 class="modal-title">  Apply to a Job Vacancy</h5> &nbsp; <p style="opacity:0.5">(<?php echo $_SESSION['username']; ?>)</p>
                    <a class="cancel-btn" type="button" class="close" href="dashboard-vacancy.php"
                        aria-label="close"><span aria-hidden="true">×</span></a>
                </div>
                <h5 style="color:green"> <?php echo $error; ?></h5>
                <div class="col-md-12 content-area-apply">
                    <div class="alert alert-danger" role="alert">
                        Check your details before applying for job.
                    </div>
                    <hr>
                    <div>
                        Advertisement code: <input type="text" class="form-control" id="advertisement"
                         name="advertisement" value="<?php echo $_GET['adverisement'] ?>" aria-describedby="namefield" disabled>
                    </div>
                </div>
                <div style="color:blue">
                    Do you have Minimum Qualification?
                </div>
                <div class="col-md-5 board-box">
                            <div class="radio-label">
                                <label>Qualification <span class="required" style="color: red;">*</span></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="qualification" id="gov"
                                    value="yes" checked>
                                <label class="form-check-label">Yes, i have.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="qualification" id="non-gov"
                                    value="more">
                                <label class="form-check-label">No, i have more than that.</label>
                            </div>
                        </div>
                <div class="button-area">
                    <button type="submit" class="btn btn-primary" id="submit" name="submit" >Apply </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>