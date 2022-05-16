<?php


require "./config.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TAXMANDU - Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">TAXMANDU</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
             <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
             <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
         </div>-->
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="login.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">TAXMANDU</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Tax Calculator System</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        TAX CALCULATOR
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./changerate.php">Update Vehicle Tax </a>
                                    <a class="nav-link" href="../news/calculator.php">Income Tax</a>
                                    <a class="nav-link" href="../news/non-resi.php">Non-Resident Tax</a>

                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                NEWS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Pages
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../news/world.php">World </a>
                                            <a class="nav-link" href="../news/nepal.php">Nepal</a>
                                            <a class="nav-link" href="../news/finance.php">Finance</a>
                                            <a class="nav-link" href="../news/sports.php">Sports</a>
                                            <a class="nav-link" href="../news/business.php">Business</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin Taxmandu
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TAXMANDU - ADMIN PANNEL</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">TAX-RATES</li>
                        </ol>

                        <?php

                        function checkDatabase($motor,$province,$range, $con){

                            $sql = "SELECT * FROM `vehicle_tax` WHERE moto_type ='$motor' AND province ='$province' AND range_cc ='$range'";
                            $result = mysqli_query($con, $sql);
                            if($row = mysqli_fetch_assoc($result)){
                                return false;
                            }
                            else{

                                return true;
                            }


                        }

                        if(isset($_POST['append'])){

                            $province = $_POST['topic'];
                            $range = $_POST['low']."-".$_POST['high'];
                            $price = $_POST['rate'];
                            $motor = $_POST['subject'];
                            if(checkDatabase($motor,$province,$range, $con)) {

                                $sql = "INSERT INTO `vehicle_tax`(`province`, `range_cc`, `price`,`moto_type`) VALUES ('$province','$range','$price','$motor')";
                                mysqli_query($con, $sql);

                            }

                        }

                        if(isset($_POST['save'])){

                            $province = $_POST['topic'];
                            $range = $_POST['chapter'];
                            $price = $_POST['update'];
                            $motor = $_POST['subject'];
                            if(!checkDatabase($motor,$province,$range, $con)) {

                                $sql = "UPDATE `vehicle_tax` SET price = '$price' WHERE province = '$province' AND range_cc = '$range' AND moto_type='$motor'";
                                mysqli_query($con, $sql);

                            }

                        }

                        ?>
                        
                        <div class="row">

                            <form class="margin" method="post" name="form1" id="form1">
                                Vehicle Type: <select name="subject" id="subject">
                                    <option class="one" value="" selected="selected" >Select Vehicle</option>
                                  </select>
                                <br><br>
                                Pradesh: <select name="topic" id="topic">
                                    <option class="two" value="" selected="selected">Select Pradesh</option>
                                  </select>



                                <br><br>
                                <button type="button" class="btn-outline-dark" id="addnew" name="addnews">ADD</button>
                                <button type="button" class="btn-outline-dark" id="updateold" name="addnews">UPDATE</button>
                                <div id="ar" hidden>

                                    <br><br>
                                    Vehicle CC: <input name="low" type="text"/>  <input name="high" type="text"/>
                                    <br><br>
                                    Rate: <input class="rate" type="text" id="rate" name="rate" placeholder="eg: Rs 1800">
                                    <br><br>
                                    <button type="submit" class="btn-outline-dark" id="addnews" name="append"> Append </button>
                                </div>

                                <div id="up" hidden>
                                  <br><br>
                                Vehicle CC: <select name="chapter" id="chapter">
                                    <option class="three" value="" selected="selected">Select Vehicle CC</option>
                                  </select>


                                  <br><br>
                                     Rate: <input class="mainn" type="text" id="update" name="update" placeholder="eg: Rs 1800">
                                  <br><br>

                                  <button type="submit" class="btn-outline-dark" id="addnews" name="save"> Save  </button>

                            </div>
                                </form>

                                
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                
                            </div>
                            <div class="col-xl-6">
                                
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        
                    </div>
                </footer>
            </div>
        </div>
        <script>

            var add = document.getElementById("addnew");
            add.addEventListener("click" ,function(event){

                document.getElementById("ar").hidden = false;
                document.getElementById("up").hidden = true;


            });
            var update = document.getElementById("updateold");
            update.addEventListener("click" ,function(event){

                document.getElementById("ar").hidden = true;
                document.getElementById("up").hidden = false;


            });
            var subjectObject = {
              "BIKE": {
                "Province 1": ["0-150", "151-250", "251-400", "401-650","651-more"],
                "Madhesh": ["0-150", "151-250", "251-400", "401-650","651-more"],
                "Bagmati": ["0-150", "151-225", "226-400", "401-650","651-more"],
                "Gandaki": ["0-150", "151-250", "251-400", "401-650","651-more"],
                "Lumbini": ["0-150", "151-250", "251-400", "401-650","651-more"],
                "Karnali": ["0-150", "151-250", "251-400", "401-650","651-more"],
                "Sudur Paschim": ["0-150", "151-250", "251-400", "401-650","651-more"]    
              }
            }
            window.onload = function() {
              var subjectSel = document.getElementById("subject");
              var topicSel = document.getElementById("topic");
              var chapterSel = document.getElementById("chapter");
              for (var x in subjectObject) {
                subjectSel.options[subjectSel.options.length] = new Option(x, x);
              }
              subjectSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                chapterSel.length = 1;
                topicSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                  topicSel.options[topicSel.options.length] = new Option(y, y);
                }
              }


              topicSel.onchange = function() {
                //empty Chapters dropdown
                chapterSel.length = 1;
                //display correct values
                var z = subjectObject[subjectSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                  chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                }
              }
            }
            </script>
            <style>
                
                .btn-outline-dark {
    margin-left: 10px;
    text-align: center;
    font-weight:bold;
    background:white;
    font-family: roboto, 'sans serif';
    font-size:16px;
    text-transform: uppercase;
    border-radius: 30px;
    border: 2px solid #666666;
    width: 90px;
    color: #666666; 
    
}
.btn-outline-dark:hover {
    background:#2D9CDB;
    color:white;
    cursor:pointer;
	border: 2px solid #2D9CDB;
}

.btn-outline-dark:active {
    background:#2D9CDB;
    color:white;
	border: 2px solid #2D9CDB ;
    transform: scale(0.98);     
    box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
}
.one{
    height:30px;
}
.two{
    margin-left: 20px;
}
.margin{
    margin-left: 240px;
    size: 40px;
}
.main{
    width: 180px;
    height: 24px;
}

            </style>
        <script src="./js/fetchApi.js"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
