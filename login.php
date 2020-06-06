<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>

</head>
<body>
<?php     
require './nav.php';
navbarforlogin();
?>
    

    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center ">
            <!-- Content -->
            <div class="container ">
                <!--Grid row-->
                <div class="row h-100">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 mt-10 text-white text-center my-auto " id="login">
                        <h1 class=" h1-reponsive  text-uppercase font-weight-bold mb-0  pt-5 animate__animated  animate__fadeInDownBig"><strong>Company Name</strong></h1>
                        <hr class="hr-light my-4 animate__animated animate__lightSpeedInLeft">
                        <h5 id="bname" class="text-uppercase mb-4 animate__animated  animate__fadeInDownBig "><strong>Login</strong></h5>
                        <form action="server.php" method="post">
                            <div class="form-group animate__animated animate__lightSpeedInLeft row ">
                                <input type="email" name="email" class="form-control bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>
                            <div class="form-group animate__animated animate__lightSpeedInLeft row">
                                <input type="password" name="password" class="form-control  bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <input type="submit" name="login_user" value="Login" class="btn btn-outline-light animate__animated animate__lightSpeedInLeft  mx-3">
                            <a class="btn btn-outline-light animate__animated animate__lightSpeedInLeft  " onclick="showregister()">Register now</a>
                        </form>



                    </div>
                    <div class="col-md-12 mb-4 mt-10 text-white text-center my-auto " id="register">
                        <h1 class=" h1-reponsive  text-uppercase font-weight-bold mb-0  pt-5 animate__animated  animate__fadeInDownBig"><strong>Company Name</strong></h1>
                        <hr class="hr-light my-4 animate__animated animate__lightSpeedInLeft">
                        <h5 id="bname" class="text-uppercase mb-4 animate__animated  animate__fadeInDownBig "><strong>Register</strong></h5>
                        <form action="server.php" method="post">
                            <div class="form-group animate__animated animate__lightSpeedInLeft row ">
                                <input type="text" name="name" class="form-control bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputEmail1" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group animate__animated animate__lightSpeedInLeft row ">
                                <input type="email" name="email" class="form-control bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputEmail1" placeholder="Enter email" required>

                            </div>
                            <div class="form-group animate__animated animate__lightSpeedInLeft row">
                                <input type="password" name="password_1" class="form-control  bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="form-group animate__animated animate__lightSpeedInLeft row ">
                                <input type="password" name="password_2" class="form-control bg-transparent text-white rounded col-md-6 mx-3 mx-md-auto" id="exampleInputEmail1" placeholder="Confirm Password" required>

                            </div>
                            <input type="submit" value="Register" name="reg_user" class="btn btn-outline-light animate__animated animate__lightSpeedInLeft mx-3 ">
                            <a class="btn btn-outline-light animate__animated animate__lightSpeedInLeft  " onclick="showlogin()">Go to Login</a>
                        </form>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <script>
        let login = document.getElementById("login");
        let register = document.getElementById("register");

        function showregister() {
            login.style.display = "none";
            register.style.display = "block";
        }

        function showlogin() {
            login.style.display = "block";
            register.style.display = "none";
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>