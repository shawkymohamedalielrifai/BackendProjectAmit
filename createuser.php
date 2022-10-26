<?php
include "connection.php";

$userNameErr = $emailErr = $passwordErr = "";
$userName = $email = $password= "";

if(isset($_POST['submit'])){

    if (empty($_POST["userName"])) {
        $userNameErr = "Name is required";
    
      } else {
        $userName = test_input($_POST["userName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
          $userNameErr = "Only letters and white space allowed";
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
         
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
      if (empty($_POST["password"])) {
          $passwordErr = "password is required";
        } else {
          $password = test_input($_POST["password"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $passwordErr = "Invalid password format";
          }
        } 
    
    if(empty($userNameErr)&& empty($emailErr)&& empty($passwordErr)){

        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $q = "INSERT INTO users(userName,email,password) VALUES('$userName','$email','$password')";
        $query = mysqli_query($conn,$q);
    
    }
      

    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- My style sheet -->
    <link href="css/styles.css" rel="stylesheet" />



    <style>
        span{
            color: red;
        }
    </style>
</head>




<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="indexuser.php">Select Users </a></li>
                   
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4"> Add User </h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">
                      

                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">


                        <?php
                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }
                            ?>

                            <form id="contact-form" name="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                         <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <label for="name" class="">user Name</label>
                                            <input type="text" id="name" name="userName"  value="<?php echo $userName;?>" class="form-control">
                                            <span class="error">* <?php echo $userNameErr;?></span> <br><br>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <label for="email" class="">  email</label>
                                            <input type="text" id="email" name="email" value="<?php echo $email;?>" class="form-control">
                                            <span class="error">* <?php echo $emailErr;?></span>
                                            <br><br>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                           
                            
                                    <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form mb-8">
                                            <label for="password">password</label>
                                            <input type="password" id="password" name="password" value="<?php echo $password;?>" class="form-control">
                                            <span class="error">* <?php echo $passwordErr;?></span> <br><br>

                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->
                                <div>
                           <button class="btn btn-success" type="submit" name="submit">Submit</button>
                           <a class="btn btn-info" type="submit" name="cancel" href="index.php">Cancel</a>
                           </div>
                        </form>
                                                          
                                  
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-4">
                                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                 
                                </li>

                                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                    
                                </li>

                                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                    
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>