<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />


    <!-- Page Title -->
    <title> Registration Form</title>


    <!-- Favicon and Touch Icons -->
    <link href="assest/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS | Theme style file -->
    <link href="assest/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Main style file -->
    <link href="assest/css/style.css" rel="stylesheet" type="text/css">

    <!-- CSS | Custom Margin Padding Collection -->
    <link href="assest/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="assest/css/responsive.css" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->
    <link href="assest/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-white-f1 sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget no-border m-0">
                                <ul
                                    class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip sm-pull-none sm-text-center  mb-0">
                                    <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>

                                    <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pull-right top-right-m mbile">
                                <p> Members: <a href="#" class="pr-10">Register</a>
                                    <a href="#">Login</a>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </div>
    </header>
    <!-- Start main-content -->
    <div class="main-content">
        <section class="signup-form ">
            <div class="container">
                <div class="row apply-now ">
                    <div class="col-md-12 ">
                        <div class="signup-title">
                            <h3>
                                Build Your Profile
                            </h3>
                            <h5>This information will let us know more about you.</h5>
                            <?php if (isset($_SESSION['message'])) : ?>
                            <h3> <?php echo $_SESSION['message']; ?></h3>

                            <?php unset($_SESSION['message']); endif; ?>

                        </div>

                        <!-- Contact Form -->

                        <form class="needs-validation" novalidate action="insert.php" method="post"
                            enctype="multipart/form-data">
                            <div class="form-row ">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="validationCustom012">Register As:</label>
                                        <select class="form-control " name="registrationType" id="validationCustom012"
                                            required>
                                            <option value="">Register As</option>
                                            <option value="donor">Donor</option>
                                            <option value="recipient">Recipient</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="researcher">Researcher</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please Choose Any.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name"
                                        aria-describedby="inputGroupPrepend2" name="name" placeholder="Full Name"
                                        required>
                                    <div class="invalid-feedback">
                                        Please choose a Full Name.
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input name="email" id="email" class="form-control " type="email"
                                            placeholder="Email" value="" required>
                                        <div class="invalid-feedback">
                                            Please Enter a Your Email.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Mobile Numebr:</label>
                                        <input type="number" class="form-control" id="phone"
                                            aria-describedby="inputGroupPrepend2" name="phone"
                                            placeholder="Mobile Numebr" required>
                                        <div class="invalid-feedback">
                                            Please choose a Mobile Numebr.
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            aria-describedby="inputGroupPrepend2" placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            Please choose a Password.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pass">Your Password:</label>
                                        <p id="not">Password Did Not Match!</p>
                                        <p id="yes">Password Matched!</p>
                                        <input type="password" class="form-control"
                                            id="validationCustomUserrepeatpassword" name="pass"
                                            aria-describedby="inputGroupPrepend2" placeholder="Repeat Password"
                                            required>
                                        <?php if (isset($_SESSION['confirmmsg'])) : ?>
                                        <div> <?php echo $_SESSION['confirmmsg']; ?></div>

                                        <?php unset($_SESSION['confirmmsg']); endif; ?>


                                        <div class="invalid-feedback">



                                            Please Enter a Your Password.
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender:</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Select Gender.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="age">Date of Birth:</label>
                                        <div class="form-group">
                                            <input name="age" id="age" class="form-control" type="date"
                                                placeholder="Date of Birth" value="" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a Date of Birth.
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <label for="profile_pic">Choose Profile Picture:</label>
                                        <div class="form-group">
                                            <input type="file" id="profile_pic" name="profile_pic" class="form-control"
                                                accept="image/*" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please choose a profile Picture.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <div class="form-group">
                                            <input name="address" id="address" class="form-control " type="text"
                                                placeholder="Address" value="" required>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please Enter Your Address.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="blood_group">Select Blood Group:</label>
                                        <select class="form-control" name="blood_group" id="blood_group" required>
                                            <option value=""> - Choose Blood Type - </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Select Blood Group.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-check pl-0">
                                        <input class="form-check-input" type="checkbox" value="true" id="terms"
                                            name="terms" required>
                                        <label class="form-check-label" for="terms"><span><span></span></span>I
                                            agree <a href="#" class="term-service">Terms of service</a></label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Button Submit-->

                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                    data-loading-text="Please wait..." value="Submit">Submit</button>
                                <div class=" form-button pt-10">
                                    <p>Have an Account? <a href="#"> Login Now!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-222" data-bg-img="assest/images/footer-bg.png">

        <div class="footer-bottom bg-black-333">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="font-14 text-white m-0">
                            © 2019 All Rights Reserved By Pak Blood Bank.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end wrapper -->

    <!--Form Validation-->
    <script>
    (function() {
        window.addEventListener('load', function() {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to

            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission

            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })

    
    </script>
</body>

</html>