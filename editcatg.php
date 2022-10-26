
<?php
include "connection.php";
$id="";
$category_name="";
$post_id="";


$error = "";
$success = "";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location: test/index.php");
        exit;
    }
    $id =$_GET['id'];
    $sql = "select * from catig where id=$id";
    $result  = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header ("location: test/index.php");
        exit ;
    }
    $category_name = $row["category_name"];
    $post_id = $row["post_id"];

}
else{
   
    $category_name = $_POST["category_name"];
    $post_id = $_POST["post_id"];
   

    $sql = "update catig set category_name='$category_name' where id='$id'";
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
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
                    <h2 class="h1-responsive font-weight-bold text-center my-4"> Edit Category </h2>
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
                                            <label for="category_name" class="">Category_Name</label>
                                            <input type="text" id="category_name" name="category_name" value="<?php echo $category_name;?>" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-4">
                                            <label for="post_id" class=""> Post_Id</label>
                                            <input type="text" id="post_id" name="post_id" value="<?php echo $post_id;?>"  class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                               

                                <!--Grid row-->
                                
                                <div>
                           <button class="btn btn-success" type="submit" name="submit">Submit</button>
                           <a class="btn btn-info" type="submit" name="cancel" href="indexcatg.php">Cancel</a>
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