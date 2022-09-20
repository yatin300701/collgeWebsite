<?php
require "./partials/_connectDep.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./styles/indexcss.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <!-- top-section -->

        <div class="top-section">
            <img class="top-gu-logo" src="./images/GU-removebg-preview.png" alt="GU Image">
            <div class="top-right-section">
                <div class="top-right-text text-center ">GU Student's Portal <br><span class="top-right-sub-text">Made for lerners</span> </div>
            </div>
            <img src="./images/students.png" class="student_img " alt="">

        </div>

        <!-- body  : notes and past papers  -->

        <div class="row">
            <div class="col-6 last-year-papers">
                <img src="./images/papers.png" class="last-year-papers-img img-fluid " alt="">
                <button onclick="location.href='./branches.php?pageno=1'" class="btn  btn-success last-year-paper-txt">Last Year Papers</button>
            </div>
            <div class="col-6 notes">
                <img src="./images/notes.png" class="notes-img img-fluid " alt="">
                <button class="btn  btn-success last-year-paper-txt">Notes</button>
            </div>

        </div>

        <!-- body : help section -->
        <div class="row help-section my-5 rounded">
            <div class="col-12 help-col my-2 help-col-top">
                Help Your Juniors!
            </div>
            <div class="col-12 help-col my-2">
                This is new website with very less content. Please help your juniors by providing your end-sem papers. And if possible your notes too.
            </div>
            <button class="btn btn-success btn-help"><a href="./uploadPapers.php" style="text-decoration:none; color:white">Help Us</a></button>
        </div>

        <!-- bottom section -->
        <div class="row bottom-section">
            <div class="col-9 bottom-section-left">
                <div class="btm-sec">
                    Students
                </div>
                <div>
                    From B.Tech. (need design)
                </div>
               
            </div>
            <div class="col-3 bottom-section-right">
                <div class="contact">Contact Us</div>
                <div>
                    <a href="https://www.linkedin.com/in/yatin-choudhary/" target="_blank"><img class="linkedin l-logo" src="./images/linkedin.png" alt="Linked In"></a>
                    <a href="https://www.instagram.com/yatin_choudhary_01/" target="_blank"><img class="insta l-logo" src="./images/instagram.png" alt="Insta"></a>
                </div>
                <a href="https://www.flaticon.com/free-icons/linkedin" class="extra" title="linkedin icons">Linkedin icons created by riajulislam - Flaticon</a>
                <a href="https://www.flaticon.com/free-icons/instagram" class="extra" title="instagram icons">Instagram icons created by Pixel perfect - Flaticon</a>
            </div>
        </div>

    </div>

    <!-- <a href="https://www.flaticon.com/free-icons/linkedin" title="linkedin icons">Linkedin icons created by riajulislam - Flaticon</a> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>