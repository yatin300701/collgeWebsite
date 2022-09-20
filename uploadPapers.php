<?php
    require "./partials/_connectDep.php";
    
    $wrongext=false;
    $goterror=false;

    if(isset($_POST["submit"])){


        $user_name=$_POST["name"];
        $user_mail=$_POST["mail"];
        $user_branch=$_POST["branch"];
        $user_subbranch=$_POST["subbranch"];
        $user_sem=$_POST["sem"];
        $user_year=$_POST["year"];
        $user_sub=$_POST["sub"];

       
        $file=$_FILES['file'];
        $filename=$_FILES["file"]["name"];
        $filetemploc=$_FILES['file']['tmp_name'];
        $error=$_FILES['file']['error'];

        $filetempext=explode('.',$filename);
        $fileextention=strtolower(end($filetempext));

        // please upload only in pdf format
        $allowed=array("pdf,docx");
       
            if($error==0){
                // work on it 
                $file_new_name=$user_branch.'_'.$user_subbranch.'_'.$user_sem.'.'.$user_sub.'.'.end($filetempext);
                $file_Destination='allPapers/'.$filenewname;

                move_uploaded_file($filetemploc,$fileDestination);
                
                $sql_query="";

            }
            else{
                $goterror=true;
            }
        
        // else{
        //     $wrongext=true;
        // }
    }
    
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
    <div class="container  my-5">
        <div class="img my-4 py-4 rounded">
            <img src="./images/working.png" class="working-img img-fluid " alt="">
            Help Your Juniors by giving your Past Year Papers
            <a href="http://www.freepik.com">Designed by slidesgo / Freepik</a>
        </div>
        <div class="row">
            <div class="col-6 text-center">
               <h1>Form</h1>
                <form action='uploadPapers.php' method="POST" class="mx-auto my-3" enctype="multipart/form-data">
                    <div class="mb-3 my-3    justify-content-center">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Sameer Tandan">
                    </div>

                    <div class="mb-3 my-3   text-center">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="mail" placeholder="Sameer@123.gmail.com">
                    </div>

                    <div class="mb-3 my-3    justify-content-center">
                        <label for="Branch" class="form-label">Branch</label>
                        <input type="text" list="branch" class="form-control" name="branch" placeholder="Bechlor Of Technology">
                        <!-- <datalist id="browsers"> -->
                        <datalist id="branch">
                            <?php
                                $sql_q = "SELECT * FROM `branches`";
                                $res = mysqli_query($conn, $sql_q);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<option value=".$row['BranchName'].">";
                                }
                            ?>
                              <!-- <option value="Chrome Is sweeter than it"> -->
                        </datalist>
                    </div>
                    <div class="mb-3 my-3   ">
                        <label for="subbranch" class="form-label">Sub-Branch</label>
                        <input type="text" class="form-control" name="subbranch" placeholder="Computer Science">
                    </div>
                    <div class="mb-3 my-3   ">
                        <label for="sem" class="form-label">Semester</label>
                        <input type="number" class="form-control" name="sem" max=8 min=1 placeholder=1>
                    </div>
                    <div class="mb-3 my-3   ">
                        <label for="sub" class="form-label">Subject</label>
                        <input type="number" class="form-control" name="sem" max=8 min=1 placeholder=1>
                    </div>
                    <div class="mb-3 my-3   ">
                        <label for="subbranch" class="form-label">Year</label>
                        <input type="text" class="form-control" name="year" placeholder="2019">
                    </div>
                    <div class="mb-3 my-3  ">
                        <label class="form-label">Upload File</label>
                        <input type="file" name="file">
                    </div>
                    <div class="mb-3 my-3 ">
                    <input type ="submit" class="btn btn-danger" value="submit" name="submit">
                    </div>
                </form>
            </div>


            <div class="col-6">
                <img  id="img-j" class="img-fluid" src="./images/help-juniors.jpg" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-between footer rounded px-3 py-3 my-3">
            <button class="btn btn-light col-2 " onclick="location.href='./'" ><img src="./images/slazzer-edit-image.png" style="height:20px" alt=""></button>
           
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>