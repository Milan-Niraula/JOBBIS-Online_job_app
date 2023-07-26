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
    <link rel="stylesheet" href="./CSS/my-profile-preview.css">
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
                                <li><button class="dropdown-item" type="button" onclick="openPasswordPopup1()"><i class="fa-solid fa-edit"></i> Change
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
            function openPasswordPopup1(){
                document.getElementById("passwordPopup").style.display="block";
            }
            function closePasswordPopup(){
                document.getElementById("passwordPopup").style.display="none";
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
            <div class="col-2 vertical-nav">
                <div class="vertical-nav-area">
                    <button type="button" class="btn-dash"><a href="dashboard-client.php">Dashboard</a></button>
                    <button type="button" class="btn-dash"><a href="#">My Profile</a></button>
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
            <div class="col-10 content-area-form">
                <div class="dashboard-main">
                    <h4> My Profile</h4>
                </div>
                <div class="profile-nav">
                    <ul class="grid-list content-grid">
                        <a href="dashboard-my-profile-personal.php" class=" no-underline" aria-current="page">
                            <li class="nav-itemilist">
                                Personal
                            </li>
                        </a>
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
                        <a href="#" class="no-underline-personal" style="text-decoration: none;
                        color: white;
                        padding-left: 5%;" aria-current="page">
                            <li class="nav-itemilist  color-for-links">
                                <strong>Preview</strong>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="dashboard-main">    
                    <?php
                    // $userName = $_GET[$_SESSION['username']];
                    include("connection.php");
                    $query=  "SELECT *
                    FROM `clientregistration`
                    --  INNER JOIN `clienteducation` ON clientregistration.username = clienteducation.username
                    INNER JOIN `clientdocument` ON clientregistration.username = clientdocument.username
                    Where clientregistration.username='$_SESSION[username]' and clientdocument.username='$_SESSION[username]' ";

                    // WHERE table1.some_column = 'some_value' AND table2.another_column = 'another_value';
                    // $sql ="SELECT * FROM `clientregistration` Where username='$_SESSION[username]' ";
                    $result = $connection->query($query);
                    if(!$result){
                       die("invalid query.");
                    }
                    while($row=$result->fetch_assoc()){
                    
                       ?>


                    <div class="form-area">
                        <div class="dashboard-main">
                            <h5>Basic Info</h5>
                        </div>
                        <!-- name -->
                        <div class="row row-board">
                            <div class="col-4">
                                <diV>
                                    <label class="form-label">Full Name: <?=$row['fname']; ?> <?=$row['mname']; ?> <?=$row['lname']; ?> </label>
                                </diV>
                                <div>
                                    <label class="form-label">Date of Birth: <?=$row['dob']; ?>  </label>
                                </div>
                                <div>
                                    <label>Gender: <?=$row['gender']; ?> </label>
                                </div>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-3">
                                <div class="image-box">
                                <?php echo "<img src='$row[photo]'; alt='photo'> "; ?>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-main" style="margin-top: 3rem;">
                            <h5>Family Details</h5>
                        </div>
                        <!-- family -->
                        <div class="row row-board">
                            <div class="col-4">
                                <div>
                                    <label class="form-label">Fathers Name: <?=$row['fatherName']; ?> </label>
                                </div>
                                <div>
                                    <label class="form-label">Mothers Name: <?=$row['motherName']; ?>  </label>
                                </div>
                                <div>
                                    <label class="form-label">Husband's/Wife's Name: <?=$row['spouseName']; ?>  </label>
                                </div>
                            </div>
                            <div class="col-5">
                            </div>
                            <div class="col-3">
                                <div class="image-box">
                                <?php echo "<img src='$row[signature]'; alt='scanned signature'> "; ?>
                                </div>
                            </div>
                        </div>
                        <!-- citizenship -->
                        <div class="dashboard-main" style="margin-top: 3rem;">
                            <h5>Citizenship Details</h5>
                        </div>
                        <div class="row row-board">
                            <div class="col-3">
                                <label class="form-label">Citizenship No.: <?=$row['citizenNo']; ?>  </label>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Issued District: <?=$row['citizenIssued']; ?>  </label>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Issued Date: <?=$row['citizenDate']; ?>  </label>
                            </div>
                        </div>
                        <div class="dashboard-main" style="margin-top: 3rem;">
                            <h5>Extra</h5>
                        </div>
                        <!-- extra field -->
                        <div class="row row-board">
                            <div class="col-3">
                                <label class="form-label">Employment Status: <?=$row['employment']; ?>  </label>
                            </div>
                            <div class="col-3">
                                <div class="radio-label">
                                    <label class="form-label">Marital Status: <?=$row['marriage']; ?> </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="form-label">Father's Education Status: <?=$row['fatherEducation']; ?> </label>
                            </div>
                        </div>
                          <!-- document preview -->
                          <div class="dashboard-main" style="margin-top: 3rem;">
                            <h5>Document Details:</h5>
                        </div>
                        <div class="row row-board">
                            <div class="col-4">
                            <label class="form-label">FatherFront Side Citizenship: </label>
                                <div class="citizenship" style="color: blue;"><a href="<?=$row['frontDocs']; ?>"><?=$row['frontDocs']; ?></a></div>
                            </div>
                            <div class="col-4">
                            <label class="form-label">FatherBack Side Citizenship:</label>
                                <div class="citizenship" style="color: blue;"> <a href="<?=$row['backDocs']; ?>"><?=$row['backDocs']; ?></a></div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <!-- contents ends here -->                     
                        <!-- Education field -->
                        <div class="dashboard-main" style="margin-top: 3rem;">
                            <h5>Education Details:</h5>
                        </div>
                        <div class="table-container">
                            <table class="table">
                                <thead>
                                    <tr role="row">
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Board Name
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Level
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Faculty
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Division/Grade
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Percentage/GPA
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                           Major Subject
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Description
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Education Type
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Marksheet
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Certificate
                                            <span class="ml-2"></span>
                                        </th>
                                        <th colspan="1" role="columnheader" title="Toggle ShortBy"
                                            style="cursor: pointer;">
                                            Equivalent Certificate
                                            <span class="ml-2"></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 include("connection.php");
                                 $sql ="SELECT * FROM `clienteducation` WHERE username='$_SESSION[username]' ";
                                 $result = $connection->query($sql);
                                 if(!$result){
                                    die("invalid query.");
                                 }
                                 while($row=$result->fetch_assoc()){
                                    ?>
                                <tr>
                                    <td><?=$row['board'];?></td>
                                    <td><?=$row['level'];?></td>
                                    <td><?=$row['faculty'];?></td>
                                    <td><?=$row['gpa'];?></td>
                                    <td><?=$row['grade'];?></td>
                                    <td><?=$row['subject'];?></td>
                                    <td><?=$row['description'];?></td>
                                    <td><?=$row['type'];?></td>
                                    <td><a href="<?=$row['marksheet'];?>"><?=$row['marksheet'];?></a>
                                    </td>
                                    <td><a href="<?=$row['certificateChar'];?>"><?=$row['certificateChar'];?></a></td>
                                    <td><a href="<?=$row['certificateEqui'];?>"><?=$row['certificateEqui'];?></a></td>                  
                                </tr>
                                <?php
                                 }
                                ?>
                                </tbody>
                            </table>
                        </div>
                      
                        <div class="dashboard-main" style="margin-top: 3rem;">
                            <div class="alert alert-info mt-2">
                                Make sure you have updated all details before apply to any vacancy.
                            </div>
                        </div>
                    </div>
                   
                    <!-- dashboard ends -->
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>