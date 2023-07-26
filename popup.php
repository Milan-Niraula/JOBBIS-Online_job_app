<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login Choosing option</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/popup.css">

</head>

<body>

    <div class="popup-container">
        <div class="popup-content">
            <!-- Content goes here -->
            <div class="icon">
                <a href="home.php">
                    <i class="fa-sharp fa-solid fa-xmark" style="float: right; color: red;"></i>
                </a>
            </div>
            <h5>Click here to login.</h5>
            <hr>
            <div class="button-field">
                <div class="row">
                <div class="col-client col-6">
                    <a href="Client-form.php" target="_blank">
                        <button type="button" class="btn btn-primary">I'm a Jobseeker</button>
                    </a>
                </div>
                <div class="col-provider col-6">
                    <a href="provider-form.php" target="_blank">
                        <button type="button" class="btn btn-success">I'm a Employer</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>


</body>

</html>