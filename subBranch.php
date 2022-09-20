<?php
require "./partials/_connectDep.php";
if ($_GET["bno"]) {
    $branch = $_GET["bno"];
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
    <link rel="stylesheet" href="/GuProject//styles/subbranchescss.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="top text-center rounded my-3">
            <span>
                Last Year Papers
            </span>
            <span>
                <img src="/GuProject/images/papers.png" style=" height:300px;" alt="">
            </span>
            <span>
                <img src="/GuProject/images/GU-removebg-preview.png" style="width: 100px;" alt="">
                Sub-Branch
            </span>
        </div>
        <div class="mid-body">
            <?php
            $sql_q = "SELECT * FROM `subbranch` WHERE `branchNo` = $branch";
            $res = mysqli_query($conn, $sql_q);
            while ($row = mysqli_fetch_assoc($res)) {
        
             echo ' <div class="card mb-3 mx-3 my-3 cld"  style="max-width: 540px; height="120px";>
                <div class="row g-0">
                 
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title">' . $row["subBranch"] . '</h5>
                      <p class="card-text">This is a wider card with supporting text .</p>
                      <a href="/GuProject/semester.php/?sub_bno=' . $row["subBranchNo"] . '&bno=' . $branch . '&pageno=1" class="btn btn-success">' . $row["subBranch"] . '</a>
                    </div>
                  </div>
                </div>
              </div>';
            }
            ?>
            <div class="d-flex justify-content-between footer rounded px-3 py-3 my-3" style=" position: absolute;
    bottom: 0; width:100%; max-width:1300px">
            <button class="btn btn-light col-2 " onclick="location.href='./'" ><img src="/GuProject/images/slazzer-edit-image.png" style="height:20px" alt=""></button>
            <button class="btn btn-light col-2 " onclick="location.href='/GuProject/notHere.php'" >Sub-Branch Not Here</button>
        </div>
        </div>
        
        
    </div>



    <img src="./images/linkedin.png" alt="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>