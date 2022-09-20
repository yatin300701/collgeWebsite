<?php
$active=false;

if(isset($_GET["pageno"])){
    $active = true;
}
else{
    $active=false;
}

?>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GU Student Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php
                        $pusit=""; 
                        if($active==false){
                            $pushit="active";
                        }
                        else{
                            $pushit="";
                        }
                        echo '<a class="nav-link '.$pushit.'" aria-current="page" href="/">Home</a>';
                        ?>
                     
                    </li>
                    <li class="nav-item">
                    <?php
                        
                        if($active==true){
                            if($_GET["pageno"]==1){
                               
                                $pushit="active";
                            }
                            
                        }
                        else{
                            $pushit="";
                        }
                        echo '<a class="nav-link '.$pushit.'" aria-current="page" href="/">Papers</a>';
                        ?>
                    </li>
                    <li class="nav-item">
                    <?php
                        $pushith="";
                        if($active==true){
                            if($_GET["pageno"]==2){
                                $pushith="active";
                            }
                           
                        }
                        else{
                            $pushit="";
                        }
                        echo '<a class="nav-link '.$pushith.'" aria-current="page" href="/">Notes</a>';
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>