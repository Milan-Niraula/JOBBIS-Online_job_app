
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
    <link rel="stylesheet" href="./CSS/my-profile-personal.css">

    <style>
        /* css code for personal to make it blue */
        .no-underline {
            text-decoration: none;
            color: black;
        }

        .no-underline-personal {
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
<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:Client-form.php");
}
?>
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
                                <i class="fa-solid fa-user"></i>  <?php echo $_SESSION['username']; ?>  
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button"><i class="fa-solid fa-edit"
                                            onclick="openPasswordPopup1()"></i> Change Password</button></li>
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
    </div>
    <!-- here Navbar ends -->
    <div class="content-container">
        <div class="row">
            <!-- my approached vertical nav -->
            <div class="col-2">
                <div class="content-area">
                    <button type="button" class="btn-dash"><a href="dashboard-client.php">Dashboard</a></button>
                    <button type="button" class="btn-dash"><a href="">My Profile</a></button>
                    <button type="button" class="btn-dash"><a href="dashboard-vacancy.php">Vacancy</a></button>
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

            <!-- code for update PHP -->
            <!-- code for update PHP -->
            <!-- code for update PHP -->
            <!-- code for update PHP -->
            <!-- code for update PHP -->




            <div class="col-10 content-area-form">

                <?php
                    include("connection.php");
                    $fname= "";
                    $mname= "";
                    $lname= "";
                    $dob= "";
                    $gender= "";

                    $fatherName ="";
                    $motherName = ""; 
                    $spouseName = "";

                    $citizenNo = "";
                    $citizenIssued = "";
                    $citizenDate= "";
                    
                    $mobile= "";
                    $phone= "";
                    $email= "";

                    $employment= "";
                    $marriage= "";
                    $fatherEducation= "";

                    $country = "";
                    $province = "";
                    $district = "";
                    $localBody = "";
                    $ward= ""; 
                    $tole= "";

                    $error="";                                      
                    if(isset($_POST['submit']))
                    {
                
                //    $id        = $_GET['id'];
                //    $username        = $_GET['username'];
                   $fname         = $_POST['fname'];
                   $mname         = $_POST['mname'];
                   $lname         = $_POST['lname'];
                   $dob           = $_POST['dob'];
                //    $gender        = $_POST['gender'];

                   $fatherName       = $_POST['fatherName'];
                   $motherName       = $_POST['motherName'];
                   $spouseName       = $_POST['spouseName'];

                   $citizenNo       = $_POST['citizenNo'];
                   $citizenIssued   = $_POST['citizenIssued'];
                   $citizenDate     = $_POST['citizenDate'];

                   $mobile           = $_POST['mobile'];
                   $phone            = $_POST['phone'];
                   $email            = $_POST['email'];
                   
                   $employment      = $_POST['employment'];
                //    $marriage        = $_POST['marriage'];
                   $fatherEducation = $_POST['fatherEducation'];

                   $country         = $_POST['country'];
                   $province        = $_POST['province'];
                   $district        = $_POST['district'];
                   $localBody       = $_POST['localBody'];
                   $ward            = $_POST['ward'];
                   $tole            = $_POST['tole'];
                   // form validation
                
                   if($fname!="" && $lname!= "" && $dob!="" && $mobile!=""  && $email!="" && $phone!= ""  && $fatherName!=""  && $citizenNo!="" && $country!="" && $province!="" && $district!="" && $localBody!="")
                   {
                    $query ="UPDATE `clientregistration` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`dob`='$dob',`gender`='$gender',`fatherName`='$fatherName',`motherName`='$motherName',`spouseName`='$spouseName',`email`='$mobile',`mobile`='$mobile',`phone`='$phone',`citizenNo`='$citizenNo',`citizenIssued`='$citizenIssued',`citizenDate`='$citizenDate',`employment`='$employment',`marriage`='$marriage',`fatherEducation`='$fatherEducation',`country`='$country',`province`='$province',`district`='$district',`localBody`='$localBody',`ward`='$ward',`tole`='$tole'
                     WHERE username='$_SESSION[username]' ";
                   
                    // $query ="INSERT INTO `clientregistration`( `fname`, `mname`, `lname`, `dob`, `gender`, `fatherName`, `motherName`, `spouseName`, `email`, `mobile`, `phone`,  `citizenNo`, `citizenIssued`, `citizenDate`, `employment`, `marriage`, `fatherEducation`, `country`, `province`, `district`, `localBody`, `ward`, `tole`)
                                                    //  VALUES ('$fname','$mname','$lname','$dob','$gender','$fatherName','$motherName','$spouseName','$email','$mobile','$phone','$citizenNo','$citizenIssued','$citizenDate','$employment','$marriage','$fatherEducation','$country','$province','$district','$localBody','$ward','$tole')";

                       if($connection->query($query) == true){
                         // header('location:dashboard-my-profile-education.php');
                           ?>
                    <h5 style="color: green">Successfully inserted.!!</h5>
                    <?php           
                        }
                    }
                    else { 
                    ?>
                    <div>
                    <h5 style="color:red; margin-top: 2rem;">ERROR: unsuccessfull!! please fill all the required fields and upload valid
                        document</h5>
                        </div>
                        <?php
                        }
                         $connection->close(); 
                         }
                ?> 
                <!-- insertion successful now trying for the update the same field -->
                <!-- insertion successful now trying for the update the same field -->
                <!-- insertion successful now trying for the update the same field -->
                <!-- insertion successful now trying for the update the same field -->
                

                <div class="dashboard-main">
                    <h4> My Profile</h4>
                </div>
                <div class="profile-nav">
                    <ul class="grid-list">
                        <a href="" class="no-underline-personal" style="text-decoration: none;
                            color: white;
                            padding-left: 5%;" aria-current="page">
                            <li class="nav-itemilist color-for-links">
                                <strong>Personal</strong>
                            </li>
                        <a href="dashboard-my-profile-education.php" class="no-underline" aria-current="page">
                            <li class="nav-itemilist">
                                Education
                            </li>
                        </a>
                        <a href="dashboard-my-profile-document.php" class="no-underline" aria-current="page">
                            <li class="nav-itemilist">
                                Documents
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
                    <div class="form-area">
                    <?php
                    // $userName = $_GET[$_SESSION['username']];
                    include("connection.php");
                    $sql ="SELECT * FROM `clientregistration` Where username='$_SESSION[username]' ";
                    $result = $connection->query($sql);
                    if(!$result){
                       die("invalid query.");
                    }
                    while($row=$result->fetch_assoc()){
                    
                       ?>
                                           
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="dashboard-main">
                                <h5>Basic Info</h5>
                            </div>
                            <!-- name -->
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">First Name <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="fname" name="fname" value="<?=$row['fname']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" value="<?=$row['mname']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Last Name <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="lname" name="lname" value="<?=$row['lname']; ?>"
                                        aria-describedby="namefield">
                                </div>
                            </div>
                            <!-- gender -->
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Date of Birth <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="dob" name="dob" value="<?=$row['dob']; ?>">
                                </div>
                                <div class="col-3" style="margin-top: 1rem;">
                                    <div class="radio-label">
                                        <label>Gender <span class="required" style="color: red;">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"
                                            value="male">
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" 
                                            value="female">
                                        <label class="form-check-label">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"
                                            value="other">
                                        <label class="form-check-label">Other</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Username </label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION['username']; ?>" disabled>
                                </div>
                            </div>
                            </div>
                            <div class="dashboard-main" style="margin-top: 3rem;">
                                <h5>Family Details</h5>
                            </div>
                            <!-- family -->
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Fathers Name <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="fatherName" name="fatherName" value="<?=$row['fatherName']; ?>">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Mothers Name</label>
                                    <input type="text" class="form-control" id="motherName" name="motherName" value="<?=$row['motherName']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Husband's/Wife's Name</label>
                                    <input type="text" class="form-control" id="spouseName" name="spouseName" value="<?=$row['spouseName']; ?>"
                                        aria-describedby="namefield">
                                </div>
                            </div>
                            <!-- citizenship -->
                            <div class="dashboard-main" style="margin-top: 3rem;">
                                <h5>Citizenship Details</h5>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Citizenship No. <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="citizenNo" name="citizenNo" value="<?=$row['citizenNo']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Issued District <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="citizen-area" name="citizenIssued" value="<?=$row['citizenIssued']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Issued Date <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="citizen-date" name="citizenDate" value="<?=$row['citizenDate']; ?>"
                                        aria-describedby="namefield">
                                </div>
                            </div>
                            <!-- contact -->
                            <div class="dashboard-main" style="margin-top: 3rem;">
                                <h5>Contact Details</h5>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Mobile number <span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?=$row['mobile']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?=$row['phone']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Email<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="Email" name="email" value="<?=$row['email']; ?>"
                                        aria-describedby="namefield">
                                </div>
                            </div>
                            <div class="dashboard-main" style="margin-top: 3rem;">
                                <h5>Extra</h5>
                            </div>
                            <!-- extra field -->
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Employment Status <span class="required"
                                            style="color: red;">*</span></label>
                                    <select id="emp-status" name="employment" style="height: 50%; width: 100%;" value="<?=$row['employment']; ?>">
                                        <option></option>
                                        <option value="Umemployment">Umemployment</option>
                                        <option  value="Self-Employment">Self-Employment</option>
                                        <option value="Government Service">Government Service</option>
                                        <option  value="Non-Government Service">Non-Government Service
                                        </option>
                                    </select>

                                </div>
                                <div class="col-3" style="margin-top: 1rem;">
                                    <div class="radio-label">
                                        <label style="margin-left: 20%;">Marital Status <span class="required"
                                                style="color: red;">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marriage"
                                            value="married">
                                        <label class="form-check-label">married</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marriage" 
                                            value="unmarried">
                                        <label class="form-check-label">Unmarried</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marriage" 
                                            value="single">
                                        <label class="form-check-label">Single</label>
                                    </div>

                                </div>
                                <div class="col-3">
                                    <label class="form-label">Father's Education Status </label>
                                    <select id="father-education" name="fatherEducation" value="<?=$row['fatherEducation']; ?>"
                                        style="height: 50%; width: 100%;">
                                        <option value=""></option>
                                        <option value="Educated">Educated</option>
                                        <option value="Uneducated">Uneducated</option>

                                    </select>
                                </div>
                            </div>
                            <!-- address info -->
                            <div class="dashboard-main" style="margin-top: 3rem;">
                                <h5>Address Details</h5>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label class="form-label">Country<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="country" name="country" value="<?=$row['country']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Province<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="province" name="province" value="<?=$row['province']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">District<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="district" name="district" value="<?=$row['district']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Local Body<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="localBody" name="localBody" value="<?=$row['localBody']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Ward No.<span class="required"
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="ward" name="ward" value="<?=$row['ward']; ?>"
                                        aria-describedby="namefield">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Tole/Street</label>
                                    <input type="text" class="form-control" id="tole" name="tole" value="<?=$row['tole']; ?>"
                                        aria-describedby="namefield">
                                </div>
                            </div>
                            <div class="next-button" style="margin: 3rem; width: 5rem;">
                                <button type="submit" name="submit" class="btn-dash">Next</button>
                            </div>
                        </form>

                        <?php
                        }
                        ?>
                                  
                    </div>
                </div>


            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>