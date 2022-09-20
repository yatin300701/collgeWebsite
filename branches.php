<?php
require "./partials/_connectDep.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/branchescss.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Gu:Branches</title>
</head>

<body>
    <div class="container">
        <div class="top-section container">
            <span class="top-parts-1">
                Last Year Papers
            </span>
            <span class="top-parts-2">
                <img src="./images/papers.png" style="height: 251px;" alt="">
            </span>
            <span class="top-parts-3">
                <img src="./images/GU-removebg-preview.png" style="height: 91px;" alt="">
                Branches
            </span>
        </div>
        <div class="midbody text-center">
            <!-- take branches from db-branch and their address dynamically-->
            <?php
            $sql_q = "SELECT * FROM `branches`";
            $res = mysqli_query($conn, $sql_q);
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<div class="card mb-3 mx-3 my-3" style="max-width: 540px;">
                <div class="row g-0">
                 
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title">'. $row["BranchName"] .'</h5>
                      <p class="card-text">This is a wider card with supporting text .</p>
                      <a href="subBranch.php/?bno=' . $row["BranchNo"] . '&pageno=2" class="btn mx-3 my-2 btn-success " style="width:220px;">Link</a>
                    </div>
                  </div>
                </div>
              </div>';
            }
            ?>
            <!-- '<a href="subBranches.php/?bno=' . $row["BranchNo"] . '&pageno=2" class="btn mx-5 my-5 btn-success " style="width:320px;">' . $row["BranchName"] . '</a>' -->
        </div>
            <hr>
        <div class="d-flex justify-content-between footer rounded px-3 py-3 my-3">
            <button class="btn btn-light col-2 " onclick="location.href='./'" ><img src="./images/slazzer-edit-image.png" style="height:20px" alt=""></button>
            <button class="btn btn-light col-2 " onclick="location.href='/GuProject/notHere.php'" >Branch Not Here</button>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<!-- <a href="https://www.freepik.com/free-vector/young-people-walking-front-college-university-flat-illustration_12291397.htm#query=college&position=0&from_view=search">Image by pch.vector</a> on Freepik -->

</html>