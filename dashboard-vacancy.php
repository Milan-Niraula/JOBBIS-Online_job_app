<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:Client-form.php");
}
?>
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
    <link rel="stylesheet" href="./CSS/dashboard-das.css">
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
                                <li><button class="dropdown-item" type="button" onclick="openPasswordPopup()"><i
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
            function openPasswordPopup() {
                document.getElementById("passwordPopup").style.display = "block";
            }

            function closePasswordPopup() {
                document.getElementById("passwordPopup").style.display = "none";
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
                    <button type="button" class="btn-dash"><a href="dashboard-my-profile-personal.php">My
                            Profile</a></button>
                    <button type="button" class="btn-dash"><a href="#">Vacancy</a></button>
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
            <div class="col-10">
                <div class="dashboard-main">
                    <h4>Vacancy</h4>
                </div>
                <div class="card card-callot mb-3">
                    <div class="card-body">
                        <div class="flex-center mb-md-0 mb-3 align-items-center">
                            <div class="ml-3">
                                <h6>Complete your profile.</h6>
                            </div>
                        </div>
                        <div class="flex-center mb-md-0 align-items-center">
                            <a href="dashboard-my-profile-personal.php" class="btn btn-profile btn-primary">Go to
                                Profile</a>
                        </div>
                    </div>
                </div>


                <!-- starts new container table in dashboard -->
                <div class="dashboard-main">
                    <div class="table-container" style="overflow: auto; width: 100%; height: 100%;">
                        <table class="table">
                            <thead>
                                <tr role="row">
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Organization Name
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Advertisement Code 
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Service(service-Group)
                                        <span class="ml-2"></span>
                                    </th>                                    
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Job title
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Post
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Last date of Submission
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Total Vacancy
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Apply
                                        <span class="ml-2"></span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                 include("connection.php");
                                 $sql =  "SELECT *
                                 FROM `job`
                                  INNER JOIN `providerregistration` ON job.username = providerregistration.username ";
                                 $result = $connection->query($sql);
                                 if(!$result){
                                    die("invalid query.");
                                 }
                                 while($row=$result->fetch_assoc()){
                                    ?>
                                 <tr>
                                    <td><?=$row['companyName'];?></td>
                                    <td><?=$row['adverisement'];?></td>
                                    <td><?=$row['service'];?>(<?=$row['serviceGroup'];?>)</td>
                                    <td><?=$row['title'];?></td>
                                    <td><?=$row['position'];?></td>
                                    <td><?=$row['submissionDate'];?></td>
                                    <td><?=$row['vacancy'];?></td>
                                    <td><a type="button" class="btn btn-success" <?php
                                        echo " href='apply-job.php?adverisement=$row[adverisement]' title='apply'" ; ?>>Apply
                                    </a> </td>
                                    
                                </tr>
                                <?php
                                 }
                                ?>
                            </tbody>
                                
                        </table>

                        <!-- table ends -->
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>