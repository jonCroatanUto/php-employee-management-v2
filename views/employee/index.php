<!DOCTYPE html>
<html lang="en" class="h-100">

<?php
session_start();
if(isset($_SESSION["employeeData"])){
    
    $formMethod = "PUT";

    $name = $_SESSION["employeeData"][0]["emp_name"];
    $lastName = $_SESSION["employeeData"][0]["emp_lastName"];
    $email = $_SESSION["employeeData"][0]["emp_email"];
    $gender = $_SESSION["employeeData"][0]["emp_gender"];
    echo $gender;
    $city =$_SESSION["employeeData"][0]["emp_city"];
    $streetAddress = $_SESSION["employeeData"][0]["emp_streetAddress"];
    $state = $_SESSION["employeeData"][0]["emp_state"];
    $age = $_SESSION["employeeData"][0]["emp_age"];
    $postalCode = $_SESSION["employeeData"][0]["emp_postalCode"];
    $phoneNumber = $_SESSION["employeeData"][0]["emp_phoneNum"];
    // Setting up select echo string
    $options = "";
    $genderArray = array("", "woman", "man", "other", "No answer");
    foreach ($genderArray as $genderItem) {
        if ($gender == $genderItem && $gender == "") {
            $options .= "<option hidden selected>Choose...</option>";
        } elseif ($gender == $genderItem && $gender != "") {
            $options .= "<option selected>" . $genderItem . "</option>";
        } else {
            $options .= "<option>" . $genderItem . "</option>";
        }
    }
}else{

    $formMethod = "POST";

    $name = "";
    $lastName = "";
    $email = "";
    $gender = "";
    $city="";
    $streetAddress = "";
    $state = "";
    $age = "";
    $postalCode = "";
    $phoneNumber = "";

    $options = "";
    $genderArray = array("", "woman", "man", "other", "No answer");
    foreach ($genderArray as $genderItem) {
        if ($gender == $genderItem) {
            $options .= "<option hidden selected>Select</option>";
        } else {
            $options .= "<option>" . $genderItem . "</option>";
        }
    }
}





?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>assets/css/main.css">
    <title>Employee page</title>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jsgrid/dist/jsgrid.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('BASE_URL'); ?>assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo constant('BASE_URL'); ?>assets/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo constant('BASE_URL'); ?>assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="d-flex flex-column h-100">
    <?php
    // include "../assets/html/header.html";
    ?>

    <div class="container-fluid">

        <main class="col-lg-8 col-md-10 p-2 mx-auto gy-2">
            <div class="pb-2">
                <h2 id="employeeTitle">Employee</h2>
            </div>
            <div class="col">
                <form class="needs-validation" action="updateEmployee" method="POST" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="name" placeholder="" value="<?php echo $name;?>" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo($lastName);?>">
                        </div>
                        <div class="col-md-8">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="user@example.com" value="<?php echo($email);?>"required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                            <small class="text-muted">We'll never share this email with anyone else.</small>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender">
                            <?php echo $options; ?>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city"value="<?php echo($city);?>" required>
                            <div class="invalid-feedback">
                                Please enter the employee's city.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="streetAddress" class="form-label">Street Address</label>
                            <input type="number" class="form-control" id="streetAddress" placeholder="1234" value="<?php echo($streetAddress);?>"required>
                            <div class="invalid-feedback">
                                Please enter the street number.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" placeholder="CA" value="<?php echo($state);?>" required>
                            <div class="invalid-feedback">
                                Please enter the state.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" placeholder="22" value="<?php echo($age);?>" required>
                            <div class="invalid-feedback">
                                Please enter the employee's age.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="postalCode" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode" placeholder="394221" value="<?php echo($postalCode);?>" required>
                            <div class="invalid-feedback">
                                Please enter the employee's postal code.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="phoneNumber" placeholder="123456789" value="<?php echo($phoneNumber);?>" required>
                            <div class="invalid-feedback">
                                Please enter the phone number.
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                        <a href="./dashboard.php" class="btn btn-secondary">Return</a>

                    </div>

                </form>
                <div id="responseMsg"></div>
            </div>
    </div>
    <div class="modal fade" id="errorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-danger">
                <div class="modal-header border-0">
                    <h3 class="modal-title text-light mx-auto" id="errorModalLabel">Error!</h3>
                </div>
                <div class="modal-body text-center text-light h5">
                    This id is not related to any user
                </div>
                <div class="modal-footer border-0">
                    <a href="./dashboard.php" class="btn btn-light mx-auto">Go back to dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successfulAddModal" tabindex="-1" aria-labelledby="successfulAddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h3 class="modal-title mx-auto" id="successfulAddModalLabel">Success!</h3>
                </div>
                <div class="modal-body text-center h5">
                    The employee has been added to the database
                </div>
                <div class="modal-footer border-0">
                    <a href="./dashboard.php" class="btn btn-primary mx-auto">Go back to dashboard</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    </div>
    <script></script>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>assets/js/employee.js"></script>
    <?php

        // if(isset($_SESSION["employeeData"])){
        //     unset($_SESSION["employeeData"]);
        // };?>
    <?php

    // if (isset($_GET["id"])) {
    //     echo "<script type='text/javascript'>setUserId(" . $_GET["id"] . ")</script>";
    //     echo "<script type='text/javascript'>populateEmployeeForm()</script>";
    // } elseif (isset($_GET["new"]) && $_GET["new"] === "true") {
    //     echo "<script type='text/javascript'>newEmployeeForm();</script>";
    // }
    // ?>

    // <?php
    // include "../assets/html/footer.html";
    // ?>
</body>

</html>