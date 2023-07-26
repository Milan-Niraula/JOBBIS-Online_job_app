<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:admin-login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN Dashboard: (Provider)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/admin-dashboard-provider.css">

</head>

<body>
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img src="./CSS/Project-favicon.png" width="120" height="70" alt="Logo">
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <div class="nav-content col-lg-12">
                            <li class="nav-item">
                                JOBBIS- Job Recruitment Management System
                            </li>
                        </div>

                        <div>
                            <button class="btn-nav" type="button" onclick="openForm()" id="dropdownMenu2"
                                data-bs-toggle="dropdown">
                                <i class="fa-solid fa-sign-out"></i> Logout
                            </button>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- popup box for log out conformation -->
    <div class="popup-container" id="myForm">
        <div class="form-container-job">
            Are you sure to logout?
            <button class="btn" type="button" style="margin-left: 20%; margin-top: -10%; color: red;"
                onclick="closeForm()">X</button>
            <hr>
            <div class="row">
                <div class=" col-md-6">
                    <button type="button" class="btn cancel-button" onclick="closeForm()">NO</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn  submit-button"><a href="logoutAdmin.php">Yes</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <!-- end of popup logout container -->
    <!-- vertical nav -->
    <div class="content-container">
        <div class="row">
            <!-- my approached vertical nav -->
            <div class="col-2 vertival-nav">
                <div class="nav-content admin-nav">
                    <h5>Admin: <?php echo $_SESSION['username']; ?></h5>
                </div>
                <div class="col-lg-12"><a href="admin-dashboard-job.php"  style="text-decoration: none;">
                    <div class="card card-stats cardbg-purple">
                        <button type="button" class="job-application" id="job-application" name="job-application">
                            <div>
                                <div class="icon">
                                    <div class="ic-transaction">
                                        <i class="fa-solid fa-random"></i>
                                    </div>
                                </div>
                                <p class="title">Manage Job Applications</p>
                        </button>
                    </div></a>
                </div>
                <div class="col-lg-12"><a href="admin-dashboard-client.php"  style="text-decoration: none;">
                    <div class="card card-stats cardbg-blue">
                        <button type="button" class="job-seeker" id="job-seeker">
                            <div>
                                <div class="icon">
                                    <div class="ic-transaction">
                                        <i class="fa-solid fa-cog"></i>
                                    </div>
                                </div>
                                <p class="title">Manage Client</p>
                            </div>
                        </button>
                    </div></a>
                </div>
                <div class="col-lg-12">
                    <div class="card card-stats cardbg-green">
                        <button type="button" class="job-provider" id="job-provider">
                            <div>
                                <div class="icon">
                                    <div class="ic-transaction">
                                        <i class="fa-solid fa-cog"></i>
                                    </div>
                                </div>
                                <p class="title">Manage provider</p>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-content">
                        <hr>
                        <p>Copyright 2023 &copy; Jobbes</p>
                    </div>
                </div>
            </div>
            <!-- vertical nav ends -->
            <!-- content area -->
            <div class="col-10">
                <div class="dashboard-main">
                    <h3> Job Provider Management Dashboard</h3>
                </div>
                <!-- job lists table -->
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr role="row">
                                <th style="width: 15rem;" title="Toggle ShortBy">
                                     Organization Name
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 15rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                Contact Person Name 
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 20rem;" title="Toggle ShortBy">
                                Current Address
                                   <span class="ml-2"></span>
                               </th>
                               <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                               Username
                                <span class="ml-2"></span>
                                </th>
                                <th style="width: 15rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Email
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Phone/mobile Number
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    PAN number
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 15rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    website
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Established Date
                                    <span class="ml-2"></span>
                                </th>
                                <th style="width: 10rem;" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Action
                                    <span class="ml-2"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                 include("connection.php");
                                 $sql ="SELECT * FROM `providerregistration`";
                                 $result = $connection->query($sql);
                                 if(!$result){
                                    die("invalid query.");
                                 }
                                 while($row=$result->fetch_assoc()){
                                    ?>
                            <tr>
                                <td><?=$row['companyName']; ?></td>
                                <td><?=$row['personName']; ?></td>
                                <td><?=$row['localBody']; ?> -<?=$row['ward']; ?>,<?=$row['district']; ?> <?=$row['country']; ?></td>
                                <td><?=$row['username']; ?></td>
                                <td><?=$row['email']; ?></td>
                                <td><?=$row['phone']; ?> <?=$row['mobile']; ?></td>
                                <td><?=$row['pan']; ?></td>
                                <td><?=$row['website']; ?></td>
                                <td><?=$row['date']; ?></td>
                                <td><a class="btn btn-danger" <?php echo " href='admin-dashboard-provider.php?id=$row[id]' title='delete'"; ?>>
                                              Delete </a></td>  
                            </tr>
                            <?php
                                 }
                                 ?>
                    
                        </tbody>
                        <?php
                         // this php code is for delete
                        if(isset($_GET['id'])){
                          $id=$_GET['id'];
                          $delete = "DELETE FROM `providerregistration` where id='$id'";
                          $result1= mysqli_query($connection, $delete);

                          if($result1){
                        ?>
                        <!-- start message -green -->
                        <div class="alert alert-success">
                          <strong >Deleted!!</strong>  Deleted data successfully.!!
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
                    </table>

                    <!-- table ends -->
                </div>
            </div>
        </div>

    </div>
    </div>

        </form>
    </div>

</body>