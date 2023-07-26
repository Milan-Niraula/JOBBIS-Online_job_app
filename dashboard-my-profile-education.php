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
    <link rel="stylesheet" href="./CSS/my-profile-education.css">

    <style>
        /* css code for education to make it blue */
        .no-underline {
            text-decoration: none;
            color: black;
        }
        .no-underline-education {
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
                        <a href="#" class="active active no-underline-education" style="text-decoration: none;color: white;
                    padding-left: 5%;" aria-current="page">
                            <li class="nav-itemilist color-for-links">

                                <strong>Education</strong>
                            </li>
                        </a>
                        <a href="dashboard-my-profile-document.php" class="active active no-underline"
                            aria-current="page">
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
                    <h5>Education</h5>
                    <div class="col-md-12">
                        <div class="alert alert-info mt-2">
                            Add your degree individually.
                        </div>
                    </div>
                    <div class="add-icon">
                        <button type="button" class="btn btn-primary btn-add" onclick="openForm()"><i
                                class="fa-solid fa-plus"></i> Add</button>
                    </div>
                </div>
                <!-- table -->
                <div class="dashboard-main">
                    <div class="table-container" style="overflow: auto; width: 100%; height: 100%;">
                        <table class="table">
                            <thead>
                                <tr role="row">
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Board Name
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Level
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Faculty
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Percentage/GPA
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Division/Grade
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Major subject
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                    Description
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Education Type
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Marksheet
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Certificate
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Equivalent Certificate
                                        <span class="ml-2"></span>
                                    </th>
                                    <th colspan="1" role="columnheader" title="Toggle ShortBy" style="cursor: pointer;">
                                        Action
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
                                    <td><a class="btn btn-danger" <?php echo " href='dashboard-my-profile-education.php?id=$row[id]' title='delete'"; ?>>
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
                          $delete = "DELETE FROM `clienteducation` where id='$id'";
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

                        <!-- table ends -->
                    </div>
                    <div class="next-button" style="margin-top: 3rem;"><a style="text-decoration:none;" href="dashboard-my-profile-document.php">
                        <button type="button" class="btn btn-primary">Next</button></a>
                     </div>
                     <div class="col-md-12">
                        <div class="alert alert-danger">
                            If you made mistake while adding education details then delete that correspond data and add again. 
                        </div>
                    </div>
                
                <?php
                include("connection.php");
                $board      = "";
                $level      = "";
                $faculty    = "";
                $gpa        = "";
                $division   = "";
                $subject    = "";
                $description= "";
                $type       = "";
                $marksheet  = "";
                $certificate= "";
                $euivalent  = "";
                $error      = "";
                $color = "red";

                if(isset($_POST['submit'])){
                    $board      =$_POST['board'];
                    $level      =$_POST['level'];
                    $faculty    =$_POST['faculty'];
                    $gpa        =$_POST['gpa'];
                    $division   =$_POST['division'];
                    $subject    =$_POST['subject'];
                    $description=$_POST['description'];
                    $type       =$_POST['type'];

                    //file upload for marksheet
                    $marksheet = $_FILES["Marksheet"]["name"];
                     $tempName = $_FILES["Marksheet"]["tmp_name"];
                     $markFile ="zobbis/".$marksheet;
                     move_uploaded_file($tempName, $markFile);
                     
                    //file uploading for the character certificate
                    $certificate = $_FILES["CharCertificate"]["name"];
                    $tempChar = $_FILES["CharCertificate"]["tmp_name"];
                    $charFile ="zobbis/".$certificate;
                    move_uploaded_file($tempChar, $charFile);

                    //file uploading for the Equivalent certificate
                    $euivalent = $_FILES["CharCertificate"]["name"];
                    $tempEquv = $_FILES["CharCertificate"]["tmp_name"];
                    $equvFile ="zobbis/".$euivalent;
                    move_uploaded_file($tempEquv, $equvFile);

                    if($board!="" && $level!="" && $faculty!="" && $gpa!="" && $division!="" && $subject!="" && $description!="" && $marksheet!="" && $certificate!="")
                    { 

                        $query ="INSERT INTO `clienteducation`(`username`, `board`, `level`, `faculty`, `gpa`, `grade`, `subject`, `description`, `type`, `marksheet`, `certificateChar`, `certificateEqui`)
                         VALUES ('$_SESSION[username]', '$board','$level','$faculty','$gpa','$division','$subject','$description','$type','$markFile','$charFile','$equvFile')";

                            if($connection->query($query) == true){
                                ?>
                                <h5 style="color: green">Successfully inserted.!!</h5>
                                <?php   
                             }
                    }
                    else { 
                        ?>
                        <div>
                    <h5 style="color:red">ERROR: unsuccessfull!! please fill all the required fields and upload valid docement</h5>
                        </div>
                    <?php
                    }
                      $connection->close(); 
                }
                ?>


                 <div>
                    <h5 style="color:red"><?php echo $error; ?></h5>
            </div>   





                    <div class="popup-form" id="myForm">
                        <form action="" method="POST" enctype="multipart/form-data" class="form-container">
                            <div class="form-container-education">
                                <div class="modal-content">
                                    <div class="modal-header-blue modal-header">
                                        <h5 class="modal-title">Education Description</h5>
                                        <button class="cancel-btn" onclick="closeForm()" type="button" class="close"
                                            aria-label="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="row"> <?php echo $error; ?>
                                        <div class="col-md-12 board-box">
                                            <label>Board<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="board" name="board"
                                                placeholder="Enter Education Board Name...">
                                        </div>
                                        <div class="col-md-12 board-box">
                                            <label>Level<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="level" name="level"
                                                placeholder="Enter Your Degree Level...">
                                        </div>
                                        <div class="col-md-12 board-box">
                                            <label>Faculty<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="faculty" name="faculty"
                                                placeholder="Enter Education Faculty Name...">
                                        </div>
                                        <div class="col-md-3 board-box">
                                            <label>GPA/Percentage<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="gpa" name="gpa">
                                        </div>
                                        <div class="col-md-3 board-box board-box-division">
                                            <label>Division/Grade<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="division" name="division">
                                        </div>
                                        <div class="col-md-4 board-box">
                                            <label>Major Subject<span class="text-danger">*</span></label><br>
                                            <input class="input-field" type="text" id="subject" name="subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 board-box">
                                            <label>Description<span class="text-danger">*</span></label><br>
                                            <textarea rows="4" cols="40" id="description" name="description"></textarea>
                                        </div>
                                        <div class="col-md-5 board-box">
                                            <div class="radio-label">
                                                <label>Education type <span class="required"
                                                        style="color: red;">*</span></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type"
                                                    id="gov" value="government">
                                                <label class="form-check-label">Government</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type"
                                                    id="non-gov" value="nonGovernment">
                                                <label class="form-check-label">Non-government</label>
                                            </div>
                                        </div>
                                        <div class="col-md-10 board-box">
                                            <div class="alert alert-info mt-2">
                                                Please upload your scanned document in (pdf/jpg/png/jpeg) format.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 board-box">
                                            <div>
                                                <h6>Marksheet/Gradesheet<span class="text-danger">*</span></label></h6>
                                            </div>
                                            <div class="citizenship" style="color: blue; opacity: 0.5;">marksheet.pdf</div>
                                            <div>
                                                <input type="file" name="Marksheet" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-5 board-box">
                                            <div>
                                                <h6>Character Certificate<span class="text-danger">*</span></label></h6>
                                            </div>
                                            <div class="citizenship" style="color: blue; opacity: 0.5;">certificate.pdf</div>
                                            <div>
                                            <input type="file" name="CharCertificate" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-5 board-box">
                                            <div>
                                                <h6>Equivalent certificate</label></h6>
                                            </div>
                                            <div class="citizenship" style="color: blue; opacity: 0.5;">equiv-certificate.pdf</div>
                                            <div>
                                            <input type="file" name="Equivalent" value=""/>
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
                                                <div class="col-md-3"><a href="#">
                                                    <button type="submit" name="submit" class="btn  submit-button">Submit</button>
                                                  </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>

                <script>
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }
                </script>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>

</html>