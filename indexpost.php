<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"> Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="createpost.php">Add New Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="indexpost.php">Select posts</a></li>

                    <li class="nav-item"><a class="nav-link" href="createuser.php">Add New User</a></li>
                    <li class="nav-item"><a class="nav-link" href="indexuser.php">Select users</a></li>

                    <li class="nav-item"><a class="nav-link" href="createcatg.php">Add New Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="indexcatg.php">Select Categories</a></li>


                </ul>
            </div>
        </div>
    </nav>
<div class="container my-4 mt-5">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Content</th>
      <th>Id_User</th>
      <th>Created At </th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql = "select * from blogs";
    $result = $conn->query($sql);
    if(!$result){
        die("Invalide query");
    }
    while($row=$result->fetch_assoc()){
        echo "
    <tr>
    <td>$row[id]</td>
      <td>$row[title]</td>
      <td>$row[content]</td>
      <td>$row[user_id]</td>
      <td>$row[created_at]</td>
      <td>
         <a class='btn btn-success' href='editpost.php?id=$row[id]'>Edit</a>
         <a class='btn btn-danger' href='deletepost.php?id=$row[id]'>Delete</a>

      </td>
</tr>
";
    }
?>
  </tbody>
</table>
</div>
<!-- Footer-->
<footer  class="py-5 bg-dark mt-5">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
     
  </body>
</html>





