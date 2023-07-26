<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:provider-form.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZOBBIS: recruitment(provider)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/dashboard-provider-manage.css">

</head>

<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./CSS/Project-favicon.png" width="120" height="70" alt="Logo">
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
                                <li><button class="dropdown-item" type="button" onclick="openPasswordPopup()"><i
                                            class="fa-solid fa-edit"></i> Change
                                        Password</button></li>
                                        <li><a href="logoutProvider.php"  style="text-decoration:none;"><button class="dropdown-item" type="button"><i class="fa-solid fa-sign-out"></i>
                                        Logout</button></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- for password change popup -->
        <script>
            function openPasswordPopup() {
                document.getElementById("passwordPopup").style.display = "block";
            }
            function closePasswordPopup() {
                document.getElementById("passwordPopup").style.display = "none";
            }
            function openProfilePopup() {
                document.getElementById("profilePopup").style.display = "block";
            }
            function closeProfilePopup() {
                document.getElementById("profilePopup").style.display = "none";
            }
        </script>
    </div>
    <!-- here Navbar ends -->
    <!-- job proviser frofile popup  -->
    <!-- job proviser frofile popup  -->
    <!-- job proviser frofile popup  -->
    <!-- job proviser frofile popup  -->
    <!-- job proviser frofile popup  -->
    <?php
    include("connection.php");
            $companyName     ="";
            $personName      ="";
            $date            ="";
            $website         ="";
            $username   ="";
            $email      ="";
            $phone      ="";
            $mobile      ="";
            $pan        ="";
            $country        ="";
            $province       ="";
            $district      ="";
            $localBody      ="";
            $ward      ="";

            $error="";
            $success="";
      
            if(isset($_POST['submit'])){
            $companyName    =$_POST['companyName'];
            $personName     =$_POST['personName'];
            $date           =$_POST['date'];
            $website        =$_POST['website'];
            $email          =$_POST['email'];
            $phone          =$_POST['phone'];
            $mobile         =$_POST['mobile'];
            $pan            =$_POST['pan'];
            $country        =$_POST['country'];
            $province       =$_POST['province'];
            $district       =$_POST['district'];
            $localBody      =$_POST['localBody'];
            $ward           =$_POST['ward'];

            if($companyName!="" && $personName!= "" )
            // ($companyName!="" && $personName!= "" && $date!="" && $email!=""  && $phone!="" && $mobile!= ""  && $pan!="" && $country!="" && $province!="" && $district!="" && $localBody!="")
                {
                    $query = "UPDATE `providerregistration` SET `companyName`='$companyName',`personName`='$personName',`date`='$date',`website`='$website',`email`='$email',`phone`='$phone',`mobile`='$mobile',`pan`='$pan',`country`='$country',`province`='$province',`district`='$district',`localBody`='$localBody',`ward`='$ward'
                     WHERE username='$_SESSION[username]' ";

                if($connection->query($query) == true){
                $success.= "Successfully inserted.!!";
                   }
               }
               else {               
              $error.= "ERROR: unsuccessfull!! please fill all the required fields and upload valid document.";
                   }
                    $connection->close(); 
       }
    ?>
    <div class="popup-form" id="profilePopup">
        <form action="" method="post" class="form-container">
                    <?php
                    include("connection.php");
                    $sql ="SELECT * FROM `providerregistration` Where username= '$_SESSION[username]' ";
                    $result = $connection->query($sql);
                    if(!$result){
                       die("invalid query.");
                    }
                    while($row=$result->fetch_assoc()){
                       ?>
            <div class="form-container-job">
                <div class="modal-header-blue modal-header">
                    <h5 class="modal-title">Job Provider Profile</h5>
                    <button class="cancel-btn" type="button" class="close" onclick="closeProfilePopup()"
                        aria-label="close"><span aria-hidden="true">×</span></button>
                </div>
                 <!-- name -->
            <div class="row">
            <h5> General </h5>
            <span class="required" style="color: red;"><?php// echo $error; ?></span>
                <div class="col-6">
                    <label class="form-label">Company Name <span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="companyName" name="companyName" value="<?=$row['companyName']; ?>" aria-describedby="namefield">
                </div>
                <div class="col-6">
                    <label class="form-label">Contact person Name</label>
                    <input type="text" class="form-control" id="personName" name="personName" value="<?=$row['personName']; ?>" aria-describedby="namefield">
                </div>
            </div>
            <br>
            <!-- gender -->
            <div class="row">
                <div class="col-4">
                    <label class="form-label">Company Established Date<span class="required"
                            style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="date" name="date" value="<?=$row['date']; ?>">
                </div>
                <div class="col-6">
                    <label class="form-label">Company website</label>
                    <input type="text" class="form-control" id="website" name="website" value="<?=$row['website']; ?>">
                </div>
            </div><br>
            <!-- email & username -->
            <div class="row">
            <h5> User Detail </h5>
                <div class="col-4">
                    <label class="form-label">Username <span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="namefield" value="<?=$row['username']; ?>" disabled >
                </div>
                <div class="col-6">
                    <label class="form-label">Email<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="namefield" value="<?=$row['email']; ?>">
                </div>
            </div>
            <br>
            <!-- phone number-->
            <div class="row">
            <h5> Contact Detail </h5>
                <div class="col-4">
                    <label class="form-label">Phone Number <span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="namefield" value="<?=$row['phone']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="namefield" value="<?=$row['mobile']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">PAN Number<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="pan" name="pan" aria-describedby="namefield" value="<?=$row['pan']; ?>">
                </div>
            </div><br>
            <!-- address -->
            <div class="row">
                <h5> Address Detail </h5>
                <div class="col-4">
                    <label class="form-label"> Country<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="country" name="country" aria-describedby="namefield" value="<?=$row['country']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Province</label>
                    <input type="text" class="form-control" id="province" name="province" aria-describedby="namefield" value="<?=$row['province']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">District<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="district" name="district" aria-describedby="namefield" value="<?=$row['district']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">Municipal<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="localBody" name="localBody" aria-describedby="namefield" value="<?=$row['localBody']; ?>">
                </div>
                <div class="col-4">
                    <label class="form-label">ward<span class="required" style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="ward" name="ward" aria-describedby="namefield" value="<?=$row['ward'] ;?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6 button-box">
                    <div class="row">
                        <div class=" col-md-3">
                            <button type="button" class="btn cancel-button"
                                onclick="closeProfilePopup()">cancel</button>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" name="submit" class="btn submit-button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php
            }
            ?>
        </form>
       
    </div>






    <div class="content-container">
        <div class="row">
            <!-- my approached vertical nav -->
            <div class="content-container">
                <div class="row">
                    <div class="col-2 vertival-nav">
                        <div class="nav-content provider-nav">
                        </div>
                        <div class="button-profile">
                            <button type="button" class="btn-nav" onclick="openProfilePopup()">Job Provider
                                Profile</button>
                        </div>
                        <div class="row"><a href="dashboard-provider-add.php" style="text-decoration: none;">
                            <div class="col-lg-12">
                                <div class=" btn card card-stats cardbg-blue">
                                    <div>
                                        <div class="icon">
                                            <div class="ic-transaction">
                                                <i class="fa-solid fa-add"></i>
                                            </div>
                                        </div>
                                        <p class="title">click here to Add Job</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="footer">
                            <div class="footer-content">
                                <hr>
                                <p>Copyright 2023 &copy; Jobbes</p>
                            </div>
                        </div>
                    </div>
                    <!-- content area -->
                    <div class="col-10">
                        <div class="dashboard-main">
                            <h4>Job Provider Dashboard</h4>
                        </div>
                        <span class="required" style="color: red;"><?php echo $error; ?></span>
                        <span class="required" style="color: green;"><?php echo $error; ?></span> 
                        <div class="card card-callot mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="flex-center col-10 align-items-center">
                                        <div class="ml-3">
                                            <h6>Complete your profile.</h6>
                                        </div>
                                    </div>
                                    <div class="flex-center col-2 align-items-center">
                                        <a href="#" class="btn btn-profile btn-primary">Go
                                            to Profile</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="container-applied" style="margin-top: 3rem;">
                            <div class="title-applied">
                                <h5>Manage Job Applicants</h5>
                            </div>
                            <!-- job lists table -->
                            <div class="table-container">
                                <table class="table">
                                    <thead>
                                        <tr role="row">
                                            <th title="Toggle ShortBy">
                                                Job Advertisement Number
                                                <span class="ml-2"></span>
                                            </th>
                                            <th role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                                Client's username
                                                <span class="ml-2"></span>
                                            </th>
                                            <th role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                                Action
                                                <span class="ml-2"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                             include("connection.php");
                                             $sql ="SELECT * FROM `job`
                                            INNER JOIN `jobaplier` ON job.adverisement = jobaplier.adverisement
                                              WHERE `job`.username='$_SESSION[username]' ";
                                             $result = $connection->query($sql);
                                             if(!$result){
                                                die("invalid query.");
                                            }
                                            while($row=$result->fetch_assoc()){
                                                ?>
    
                                        <tr>
                                            <td><?=$row['adverisement']; ?></td>
                                            <td><?=$row['username']; ?></td>
                                            <td>
                                             <a class="btn btn-success" <?php
                                              echo "href='show-more-provider.php?username=$row[username]' " ; ?>>Show More </a>
                                            </td>                                  
                                        </tr>
                                        <?php
                                             }
                                             ?>
                            </tbody>
                                </table>

                                <!-- table ends -->
                            </div>
                        </div>
                        <!-- client code  -->
                        <!-- client code  -->
                        <!-- client code  -->
                        <!-- client code  -->

                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    </div>

</body>

</html>