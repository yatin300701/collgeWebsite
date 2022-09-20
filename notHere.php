<?php
require "./partials/_connectDep.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./styles/notHerecss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
            <?php
           if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $to="yatin300701@gmail.com";
            $sub="help DB";
            // echo $_POST["name"];
            $message=$_POST["name"]."_".$_POST["email"]."_".$_POST["itext"];
            $message="";
               mail($to,$sub,$message);
           }
                
            ?>






    <!-- <a href="http://www.freepik.com">Designed by slidesgo / Freepik</a> -->
    <div class="container my-2">
        <div class="img my-4 py-4 rounded">
            <img src="./images/working.png" class="working-img " alt="">
            Got Any Problem. Please fill the form. 
            <a href="http://www.freepik.com">Designed by slidesgo / Freepik</a>
        </div>
        <div class="top text-center">
            We are working continusly on this website. If you got any problem please inform us by filling this form.
            <div class="form col-6 text-center mx-auto my-5">
                <form action="./notHere.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Text</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                        name="itext" rows="5"></textarea>
                        <!-- <input type="text" class="form-control"  id="exampleInputPassword1"> -->
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
         
        <div class="d-flex justify-content-between footer rounded px-3 py-3 my-3">
            <button class="btn btn-light col-2 " onclick="location.href='./'" ><img src="./images/slazzer-edit-image.png" style="height:20px" alt=""></button>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>