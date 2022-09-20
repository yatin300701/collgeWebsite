<?php
require "./partials/_connectDep.php";
if ($_GET["sub_bno"]) {
    $branch = $_GET["bno"];
    $sub_branch = $_GET["sub_bno"];
} else {
    header("location:/GuProject");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="/GuProject/styles/showPaperscss.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="top text-center rounded my-5">
            <span>
                Last Year Papers
            </span>
            <span>
                <img src="/GuProject/images/papers.png" style=" height:300px;" alt="">
            </span>
            <span>
                <img src="/GuProject/images/GU-removebg-preview.png" style="width: 100px;" alt="">
                Year Wise
            </span>
        </div>
        <div class="mid-body">
          <!-- find bno , semno and subbno in papers tables and give ans -->
            <?php
              
          
            ?>
            
        </div>
    </div>
    <div class="container">
    <div class="d-flex justify-content-between footer rounded px-3 py-3 my-5">
                <button class="btn btn-light col-2 " onclick="location.href='/GuProject'"><img src="/GuProject/images/slazzer-edit-image.png" style="height:20px" alt=""></button>
                <button class="btn btn-light col-2 " onclick="location.href='./'">Help Us</button>
            </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>