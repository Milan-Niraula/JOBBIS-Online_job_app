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
    <link rel="stylesheet" href="./CSS/dashboard-provider-add.css">

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
            function openPasswordPopup(){
                document.getElementById("passwordPopup").style.display="block";
            }
            function closePasswordPopup(){
                document.getElementById("passwordPopup").style.display="none";
            }
            function openProfilePopup(){
                document.getElementById("profilePopup").style.display="block";
            }
            function closeProfilePopup(){
                document.getElementById("profilePopup").style.display="none";
            }
        </script>

        <div class="popup-form" id="passwordPopup">
            <form action="/action_page.php" class="form-container  popup-form-password">
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
        <!-- for password change popup -->
    </div>
    <!-- here Navbar ends -->
    <!-- job proviser frofile popup  -->
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
            <span class="required" style="color: red;"><?php echo $error; ?></span>
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
                            <button type="button" class="btn-nav" onclick="openProfilePopup()">Job Provider Profile</button>
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
                            <h4>Dashboard</h4>
                        </div>
                        <p style="color:green"><?php echo $success; ?> </p>
                         <p style="color:red"><?php echo $error; ?> </p>
                         <label><span class="required" style="color: red;"><?php echo $error; ?></span></label>
                         <label><span class="required" style="color: green;"><?php echo $error; ?></span></label>                    
                        <div>
                        <div class="card card-callot mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="flex-center col-10 align-items-center">
                                        <div class="ml-3">
                                            <h6>Complete your profile first.</h6>
                                        </div>
                                    </div>
                                    <div class="flex-center col-2 align-items-center">
                                    <button type="button" class="btn btn-primary" onclick="openProfilePopup()">Go to Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-md-0 mb-3">
                                <div class=" btn card card-stats cardbg-blue" onclick="openForm()">
                                    <div>
                                        <div class="icon">
                                            <div class="ic-transaction">
                                                <i class="fa-solid fa-cog"></i>
                                            </div>
                                        </div>
                                        <p class="title">Add Job</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-4 mb-md-0 mb-3">
                                <div class=" btn card card-stats cardbg-green"><a href="dashboard-provider-manage.php">
                                        <div>
                                            <div class="icon">
                                                <div class="ic-transaction">
                                                    <i class="fa-solid fa-random"></i>
                                                </div>
                                            </div>
                                            <p class="title">Manage Job Application</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- code for lists -->
                        <div class="container-applied" style="margin-top: 3rem;">
                            <div class="title-applied">
                                <h5>Added Job Lists</h5>
                            </div>
                            <div class="table-container">
                                <table class="table">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 15rem;" title="Toggle ShortBy">
                                                Advertisement Code
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Title
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Role
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Position
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                 style="cursor: pointer;">
                                                Sevice
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" style="width: 100px;" role="columnheader"
                                                title="Toggle ShortBy" style="cursor: pointer;">
                                                class/level
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 15rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Last date of Submission
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Salary
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Education
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 15rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Minimum Requirement
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                Total Vacancy
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 30rem;" class="table-description" role="columnheader"
                                                title="Toggle ShortBy" style="cursor: pointer;">
                                                Description
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                type
                                                <span class="ml-2"></span>
                                            </th>
                                            <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy"
                                                style="cursor: pointer;">
                                                action
                                                <span class="ml-2"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php
                                 include("connection.php");
                                 $sql ="SELECT * FROM `job` WHERE username='$_SESSION[username]' ";
                                 $result = $connection->query($sql);
                                 if(!$result){
                                    die("invalid query.");
                                 }
                                 while($row=$result->fetch_assoc()){
                                    ?>
                               
                                <tr>
                                    <td><?=$row['adverisement'];?></td>
                                    <td><?=$row['title'];?></td>
                                    <td><?=$row['role'];?></td>
                                    <td><?=$row['position'];?></td>
                                    <td><?=$row['service'];?></td>
                                    <td><?=$row['level'];?></td>
                                    <td><?=$row['submissionDate'];?></td>
                                    <td><?=$row['salary'];?></td>
                                    <td><?=$row['education'];?></td>
                                    <td><?=$row['gpa'];?></td>
                                    <td><?=$row['vacancy'];?></td>
                                    <td><?=$row['description'];?></td>
                                    <td><?=$row['type'];?></td>
                                    <td><a class="btn btn-danger" <?php echo " href='dashboard-provider-add.php?id=$row[id]' title='delete'"; ?>>
                                              Delete </a></td>                                  
                                </tr>
                               <?php
                                 }
                                ?>
                            </tbody>
                                </table>
                                <?php
                         // this php code is for delete
                        if(isset($_GET['id'])){
                          $id=$_GET['id'];
                          $delete = "DELETE FROM `job` where id='$id'";
                          $result1= mysqli_query($connection, $delete);

                          if($result1){
                        ?>
                        <!-- start message -green -->
                        <div class="alert alert-success">
                          <strong>success!!</strong> User Deleted successfully.!!
                         </div>
                         <?php
                          }else {
                            ?>
                            <div class="alert alert-warning">
                              <!-- end message gran -->
                              <strong>Error!</strong> Try again.
                          </div>
                          <!-- end message red -->
                          <?php
                          }
                        }
                        ?>

                                <!-- table ends -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    </div>


    <!-- pop form filling box for add job -->
    <div class="popup-form" id="myForm">
        <form action="" method="post"  class="form-container">
            <?php
            include("connection.php");
            $adverisement   ="";
            $title          ="";
            $role           ="";
            $position       ="";
            $service        ="";
            $serviceGroup   ="";
            $level          ="";
            $submissionDate ="";
            $salary         ="";
            $education      ="";
            $gpa            ="";
            $vacancy        ="";
            $description    ="";
            $type           ="";

            $formatError    ="";
            $formatError1    ="";
            $error          ="";
            $success        ="";

            if(isset($_POST['addjob'])){
            $adverisement   =$_POST['adverisement'];
            $title          =$_POST['title'];
            $role           =$_POST['role'];
            $position       =$_POST['position'];
            $service        =$_POST['service'];
            $serviceGroup   =$_POST['serviceGroup'];
            $level          =$_POST['level'];
            $submissionDate =$_POST['submissionDate'];
            $salary         =$_POST['salary'];
            $education      =$_POST['education'];
            $gpa            =$_POST['gpa'];
            $vacancy        =$_POST['vacancy'];
            $description    =$_POST['description'];
            $type           =$_POST['type'];
            
            if($adverisement=="" || $position=="" || $salary=="" || $education=="" || $gpa=="" ||$vacancy==""){
                $error.="please fill all the required fields.";
                }
            
                else {
                    if(is_int($vacancy)){
                        $formatError.="vacancy seat must be in integer format.";
                    }
                    $checkuser = "SELECT * FROM `job` WHERE adverisement = '$adverisement' ";
                    $result = mysqli_query($connection, $checkuser);
                    if(mysqli_num_rows($result)>0){
                        $formatError1.= "$adverisement already taken";
                    }
                }
               if($error=="" && $formatError=="" && $formatError1=="")
                {
                    $query1 = " INSERT INTO `job`(`username`, `adverisement`, `title`, `role`, `position`, `service`, `serviceGroup`, `level`, `submissionDate`, `salary`, `education`, `gpa`, `vacancy`, `description`, `type`)
                             VALUES ('$_SESSION[username]','$adverisement', '$title','$role','$position','$service','$serviceGroup','$level','$submissionDate','$salary','$education','$gpa','$vacancy','$description','$type') ";

                    $query2 = "INSERT INTO `jobaplier`(`adverisement`) VALUES ('$adverisement')";
                    if(($connection->query($query1) && ($connection->query($query2))) == true){
                        $success.= "Successfully inserted."; 
                        // header("location:provider-form.php");        
                        }
                    }
                    else {
                        $error.= "ERROR:.";
                    } 

            }
            ?>
            <div class="form-container-job">
                <div class="modal-content">
                    <div class="modal-header-blue modal-header">
                        <h4 class="modal-title" style="margin-left: 5%;">Job Description</h4>
                        <button class="cancel-btn" type="button" class="close" onclick="closeForm()"
                            aria-label="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div>
                    <p style="color:green"><?php echo $success; ?> </p>
                         <p style="color:red"><?php echo $error; ?> </p>
                        <div>
                    <div class="row">
                        <div class="col-md-12 board-box">
                            <label>Advertisement Code<span class="text-danger">* <?php echo $formatError1; ?></span></label><br>
                            <input class="input-field" type="text" id="title" name="adverisement" value="<?php echo $adverisement; ?>"
                                placeholder="00001/2079-2080">
                        </div> 
                        <div class="col-md-12 board-box">
                            <label>Job Title<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="title" name="title" value="<?php echo $title; ?>"
                                placeholder="Enter title of job...">
                        </div>
                        <div class="col-md-12 board-box">
                            <label>Role<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="role" name="role" value="<?php echo $role; ?>"
                                placeholder="main role of employees...">
                        </div>
                        <div class="col-md-12 board-box">
                            <label>Position<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="Position" name="position" value="<?php echo $position; ?>"
                                placeholder="Enter Education Faculty Name...">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Service<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="service" name="service" value="<?php echo $service; ?>"
                                placeholder="Enter field of work...">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Service-Group</label><br>
                            <input class="input-field" type="text" id="serviceGroup" name="serviceGroup" value="<?php echo $serviceGroup; ?>"
                                placeholder="Enter Service group of employees...">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Level<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="level" name="level" value="<?php echo $level; ?>"
                                placeholder="Enter working level of employees...">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Last Date of Submission<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="submissionDate" name="submissionDate" value="<?php echo $submissionDate; ?>"
                                placeholder="Enter working level of employees...">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Salary<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="salary" name="salary" value="<?php echo $salary; ?>">
                        </div>

                        <div class="col-md-5 board-box">
                            <label>Education<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="education" name="education" value="<?php echo $education; ?>">
                        </div>
                        <div class="col-md-5 board-box">
                            <label>Minimum Percentage/GPA<span class="text-danger">*</span></label><br>
                            <input class="input-field" type="text" id="gpa" name="gpa" value="<?php echo $gpa; ?>">
                        </div>
                        <div class="col-md-5 board-box">
                            <label> Total Vacant Seat<span class="text-danger">* <p style="color:red"><?php echo $formatError; ?> </p></span></label><br>
                            <input class="input-field" type="text" id="vacancy" name="vacancy" value="<?php echo $vacancy; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 board-box">
                            <label>Description<span class="text-danger">*</span></label><br>
                            <textarea rows="4" cols="40" name="description" value="<?php echo $description; ?>" ></textarea>
                        </div>
                        <div class="col-md-5 board-box">
                            <div class="radio-label">
                                <label>Work type <span class="required" style="color: red;">*</span></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="gov"
                                    value="office-based">
                                <label class="form-check-label">Office-based</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="non-gov"
                                    value="on-site">
                                <label class="form-check-label">On-site</label>
                            </div>
                        </div>
                        <div class="col-md-10 board-box">
                            <div class="alert alert-info mt-2">
                                Mondetary Fill all the Form Field.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 button-box">
                            <div class="row">
                                <div class=" col-md-3">
                                    <button type="button" class="btn cancel-button"
                                        onclick="closeForm()">cancel</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" name="addjob" class="btn  submit-button" >Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- javascript for add job -->
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
    </div>

</body>

</html>