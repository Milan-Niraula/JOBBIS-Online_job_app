<?php
include("connection.php");
session_start();
if(empty($_SESSION['username'])){
    header("location:Client-form.php");
}
$profile    ="";
$signature  ="";
$frontCitizen="";
$backCitizen ="";
$error="";
if(isset($_POST['submit']))
{
    // for profile
    $profile = $_FILES["profile"]["name"];
    $tempprofile = $_FILES["profile"]["tmp_name"];
    $ProfilePhoto ="zobbis/".$profile;
    move_uploaded_file($tempprofile, $ProfilePhoto);
    // for signature
    $signature = $_FILES["signature"]["name"];
    $tempSign = $_FILES["signature"]["tmp_name"];
    $signImage ="zobbis/".$signature;
    move_uploaded_file($tempSign, $signImage);
    // for front side citizenship
    $frontCitizen = $_FILES["uploadFileFront"]["name"];
    $tempFront = $_FILES["uploadFileFront"]["tmp_name"];
    $citizenFront ="zobbis/".$frontCitizen;
    move_uploaded_file($tempFront, $citizenFront);
    // for backside of citizenship
    $backCitizen = $_FILES["uploadFileBack"]["name"];
    $tempBack = $_FILES["uploadFileBack"]["tmp_name"];
    $citizenBack ="zobbis/".$backCitizen;
    move_uploaded_file($tempBack, $citizenBack);

    // code run successfully dont touch it
        // code run successfully dont touch it



    if($profile!="" && $signature!="" && $frontCitizen!="" && $backCitizen!=""){
        $query = "UPDATE `clientdocument` SET`username`='$_SESSION[username]',`photo`='$ProfilePhoto ',`signature`='$signImage',`frontDocs`='$citizenFront',`backDocs`='$citizenBack'
         WHERE  username='$_SESSION[username]' ";
        // "INSERT INTO `clientdocument`(`photo`, `signature`, `frontDocs`, `backDocs`) 
            // VALUES ('$ProfilePhoto ','$signImage','$citizenFront','$citizenBack ')";

            if($connection->query($query) == true){
            echo "Successfully inserted.";           
            }
        }
        else {
            $error.="ERROR: please upload all required documents.";
        }
          $connection->close();      
}
?>
<!-- create a folder named 'zobbis' in working file folder -->
<!-- update query as per the table -->
<!-- my table structure is  ( 'id',`photo`, `signature`, `frontDocs`, `backDocs`)-->
<!-- here table name is clientdocument -->
<!-- here input file has done but not worked well for photo and signature, if we will get time we can do on it -->
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZOBBIS: recruitment(Client)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/my-profile-document.css">
    <style>
        /* css code for personal to make it blue */
        .no-underline {
            text-decoration: none;
            color: black;
        }
        .no-underline-document {
            text-decoration: none;
            color: white;
            padding-left: 5%;
        }
        .color-for-links {
            background-color: rgb(35, 35, 219);
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img src="./zobbis/Project-favicon.png" width="120" height="70" alt="Logo">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="nav-content">
                            <li class="nav-item">
                                JOBBIS- Job Recruitment Management System
                            </li>

                        </div>
                        <div class="dropdown">
                            <button class="btn-nav" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-user"></i> <?php echo $_SESSION['username']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button" onclick="openPasswordPopup1()"><i
                                            class="fa-solid fa-edit"></i> Change
                                        Password</button></li>
                                        <li><a href="logout.php"  style="text-decoration:none;"><button class="dropdown-item" type="button"><i class="fa-solid fa-sign-out"></i>
                                        Logout</button></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- for password change popup -->
        <script>
            function openPasswordPopup1() {
                document.getElementById("passwordPopup").style.display = "block";
            }
            function closePasswordPopup() {
                document.getElementById("passwordPopup").style.display = "none";
            }
        </script>

        <div class="popup-form" id="passwordPopup">
            <form action="/action_page.php" class="form-container popup-form-password">
                <div class="form-container-password">
                    <div class="modal-header-blue modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <button class="cancel-btn" type="button" class="close" onclick="closePasswordPopup()"
                            aria-label="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="row">
                        <div class="col-md-12 board-box">
                            <label>Existing password<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="password" id="password" name="password"
                                placeholder="Enter current password">
                        </div>
                        <div class="col-md-12 board-box">
                            <label>New Password<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="password" id="password" name="password"
                                placeholder="Enter new password">
                        </div>
                        <div class="col-md-12 board-box">
                            <label>Confirm new Password<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="password" id="password" name="password"
                                placeholder="Confirm New Password">
                        </div>
                        <div class="col-md-6 board-box"></div>
                        <div class="col-md-4 board-box">
                            <button type="button" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- for password change popup completes here -->
        <!-- for password change popup completes here -->
        <!-- for password change popup completes here -->
    </div>
    <!-- here Navbar ends -->
    <div class="content-container">
        <div class="row">
            <!-- my approached vertical nav -->
            <div class="col-2">
                <div class="content-area">
                    <button type="button" class="btn-dash"><a href="dashboard-client.php">Dashboard</a></button>
                    <button type="button" class="btn-dash"><a href="#">My Profile</a></button>
                    <button type="button" class="btn-dash"><a href="vacancy.php">Vacancy</a></button>
                    <!-- html codes for footer -->
                    <div class="footer">
                        <div class="footer-content">

                            <hr>
                            <p>Copyright 2023 &copy; Jobbes</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content area -->
            <div class="col-10 content-area-form">
                <div class="dashboard-main">
                    <h4> My Profile</h4>
                </div>
                <div class="profile-nav">
                    <ul class="grid-list">
                        <a href="dashboard-my-profile-personal.php" class="active active no-underline"
                            aria-current="page">
                            <li class="nav-itemilist">
                                Personal
                            </li>
                        </a>
                        <a href="dashboard-my-profile-education.php" class="active active no-underline"
                            aria-current="page">
                            <li class="nav-itemilist">
                                Education
                            </li>
                        </a>
                        <a href="#" class="active active no-underline-document" style="text-decoration: none;
                    color: white;
                    padding-left: 5%;" aria-current="page">
                            <li class="nav-itemilist color-for-links">

                                <strong>Documents</strong>
                            </li>
                        </a>
                        <a href="dashboard-my-profile-preview.php" class="active active no-underline"
                            aria-current="page">
                            <li class="nav-itemilist">
                                Preview
                            </li>
                        </a>
                    </ul>

                </div>
                <div class="dashboard-main">
                            <?php
                                 include("connection.php");
                                 $uname = $_SESSION['username'];
                                 $sql ="SELECT * FROM `clientdocument` WHERE username='$uname' ";
                                 $result = $connection->query($sql);
                                 if(!$result){
                                    die("invalid query.");
                                 }
                                 while($row=$result->fetch_assoc()){
                                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="initial">
                            <h4> Documents Upload </h4> <span style="color:red; font-size: 24px;"><?php echo $error; ?></span>
                        </div><br>
                        <!-- code for photograph and signature -->
                        <div class="row">
                            <div class="col-6">
                                <div class="line-and-text" style="display: flex; align-items: center;">
                                    <h5>Scanned photograph<span class="text-danger">*</span></h5>
                                    <hr style="width: 65%; margin-left: auto;">
                                </div>
                                <div class="image-box">
                                
                                    <?php echo "<img src='$row[photo]'; alt='profile photo'> "; ?>
                                </div>
                                <div>
                                <input type="file" name="profile" value=""/>
                                </div>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        Size of image must be below 500KB.
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="line-and-text" style="display: flex; align-items: center;">
                                    <h5>Scanned Signature<span class="text-danger">*</span></h5>
                                    <hr style="width: 65%; margin-left: auto;">
                                </div>
                                <div class="image-box">
                                <?php echo "<img src='$row[signature]'; alt='scanned signature'> "; ?>
                                </div>
                                <div>
                                <input type="file" name="signature" value=""/>
                                </div>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        Size of image must be below 500KB.
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-12">
                                <div class="line-and-text" style="display: flex; align-items: center;">
                                    <h5>Your Citizenship Details</h5>
                                    <hr style="width: 80%; margin-left: auto;">
                                </div>
                                <div>
                                    <p> Mondatory upload a photo of the candidate.</p>
                                </div>
                            </div>
                        </div>
                        <!-- for citizenship upload -->
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <h6>Front side of your citizenship<span class="text-danger">*</span></h6>
                                </div>
                               <a href="<?=$row['frontDocs']; ?>"><p style="color:blue"><?=$row['frontDocs']; ?> </p></a>
                                <div>
                                <input type="file" name="uploadFileFront" value=""/>
                                </div>
                                <div class="alert alert-info mt-2">
                                    Please upload your Front Side photo of document in (jpg/png/jpeg) format.
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <h6>Back side of your citizenship<span class="text-danger">*</span></h6>
                                </div>
                                <a href="<?=$row['backDocs']; ?>"><p style="color:blue"><?=$row['backDocs']; ?> </p></a>
                                <div>
                                <input type="file" name="uploadFileBack" value=""/>
                                </div>
                                <div class="alert alert-info mt-2">
                                    Please upload your Back Side photo of document in (jpg/png/jpeg) format.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <button type="submit" name="submit" class="btn btn-nav">submit</button>
                        </div>
                    </form>
                        <?php
                                 }
                                 ?>
                </div>

            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>