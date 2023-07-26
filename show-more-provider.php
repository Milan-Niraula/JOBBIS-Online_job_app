<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciient Detail(admin)</title>
    <link href="https:ADMIN Dashboard: (client)//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/show.more.css">
</head>

<body>
       <!-- client code  -->
       <div class="popup-form dashboard-main">
                <div class="modal-header-blue modal-header">
                    <h2 class="modal-title">Client Description</h2>
                <a class="btn btn-danger" <?php echo " href='dashboard-provider-manage.php' title='back to main page'" ; ?>>x</a>
                </div>
        <div class="dashboard-main">    
            <?php
            session_start();
            include("connection.php");
            if(isset($_GET['username'])){
                $username = $_GET['username'];
            $query=  "SELECT *
            FROM `clientregistration`
            --  INNER JOIN `clienteducation` ON clientregistration.username = clienteducation.username
            INNER JOIN `clientdocument` ON clientregistration.username = clientdocument.username
            Where clientregistration.username = '$username' and clientdocument.username = '$username' ";

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
                    <h3>Basic Info</h3>
                </div>
                <!-- name -->
                <div class="row row-board">
                    <div class="col-4">
                        <div>
                            <label class="form-label">Full Name: <?=$row['fname']; ?> <?=$row['mname']; ?> <?=$row['lname']; ?> </label>
                        </div>
                        <div>
                            <label class="form-label">Date of Birth: <?=$row['dob']; ?>  </label>
                        </div>
                        <div>
                            <label class="form-label">Gender: <?=$row['gender']; ?> </label>
                        </div>
                    </div>
                    <div class="col-5"></div>
                    <div class="col-3">
                        <div class="image-box">
                        <?php echo "<img src='$row[photo]'; alt='photo' ?> "; ?>
                        </div>
                    </div>
                </div>
                <div class="dashboard-main" style="margin-top: 3rem;">
                    <h3>Family Details</h3>
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
                <div class="dashboard-main" style="margin-top: 3rem;">
                    <h3>Address</h3>
                </div>
                <!-- address -->
                <div class="row row-board">
                    <div class="col-4">
                        <div>
                            <label class="form-label">Current Address: <?=$row['localBody']; ?>-<?=$row['ward']; ?> <?=$row['district']; ?> <?=$row['province']; ?>, <?=$row['country']; ?>
                         </label>
                        </div>
                        
                        <div>
                            <label class="form-label">Username: <?=$row['username']; ?> </label>
                        </div>
                        <div>
                            <label class="form-label">Email: <?=$row['email']; ?> </label>
                        </div>
                        <div>
                            <label class="form-label">mobile: <?=$row['mobile']; ?> </label>
                        </div>
                        <div>
                            <label class="form-label">phone: <?=$row['phone']; ?> </label>
                        </div>
                    </div>
                </div>
                <!-- citizenship -->
                <div class="dashboard-main" style="margin-top: 3rem;">
                    <h3>Citizenship Details</h3>
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
                    <h3>Extra</h3>
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
                    <h3>Document Details:</h3>
                </div>
                <div class="row row-board">
                    <div class="col-4">
                        <p>Front Side Citizenship: </p>
                        <div class="citizenship" style="color: blue;"><a href="<?=$row['frontDocs']; ?>"><?=$row['frontDocs']; ?></a></div>
                    </div>
                    <div class="col-4">
                        <p>Back Side Citizenship:</p>
                        <div class="citizenship" style="color: blue;"> <a href="<?=$row['backDocs']; ?>"><?=$row['backDocs']; ?></a></div>
                    </div>
                </div>
                <?php
                }
            }
                ?>
                <!-- contents ends here -->                     
                <!-- Education field -->
                <div class="dashboard-main" style="margin-top: 3rem;">
                    <h3>Education Details:</h3>
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
                         if(isset($_GET['username'])){
                            $username = $_GET['username'];
                         $sql ="SELECT * FROM `clienteducation` WHERE username='$username' ";
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
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row">
                <div class = col-3>
                <a class="btn btn-danger" <?php echo " href='dashboard-provider-manage.php' title='back to main page'" ; ?>><i class="fa fa-chevron-circle-left" style="color:red" aria-hidden="true"></i>BACK</a>
                    </div>
            <!-- dashboard ends -->
        </div>
    </div>
</body>
</html>