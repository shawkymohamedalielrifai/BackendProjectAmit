<?php
include "connection.php";
$id="";
$title="";
$content="";
$user_id="";

$error = "";
$success = "";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:test/indexpost.php");
        exit;
    }
    $id =$_GET['id'];
    $sql = "select * from blogs where id=$id";
    $result  = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header ("location:test/indexpost.php");
        exit ;
    }
    $title = $row["title"];
    $content = $row["content"];
    $user_id = $row["user_id"];
}
else{
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_POST["user_id"];
    
    $sql = "update blogs set title='$title' ,content ='$content' ,user_id = '$user_id' where id='$id'";
    $result = $conn->query($sql);
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
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="indexpost.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#!" aria-current="page">Contact</a></li>
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
                    <h2 class="h1-responsive font-weight-bold text-center my-4"> Edit Post </h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">
                      

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="" method="POST">



                            <input type="hidden" name="id" value="<?php echo $id;?>" class="form-control">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <label for="title" class="">Title</label>
                                            <input type="text" id="title" name="title" value="<?php echo $title;?>" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <label for="content" class="">  Content</label>
                                            <input type="text" id="content" name="content" value="<?php echo $content;?>"  class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                               

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <label for="user_id">user_Id</label>
                                            <textarea type="text" id="user_id" name="user_id" value="<?php echo $user_id;?>"  rows="2"
                                                class="form-control md-textarea"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->
                                <div>
                           <button class="btn btn-success" type="submit" name="submit">Submit</button>
                           <a class="btn btn-info" type="submit" name="cancel" href="indexpost.php">Cancel</a>
                           </div>
                            </form>
                        
                        <!--Grid column-->

                        <!--Grid column-->
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
    <footer class="py-5 bg-dark mt-5">
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
