<?php
    session_start();
    require '../userlogin/config.php';
    if(isset($_POST['delnews'])){

        $nid = $_POST['nid'];
        $sql = "DELETE FROM `news` WHERE `newsID` = '$nid'";
        mysqli_query($con, $sql);
    }

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
                                    <a class="nav-link" href="layout-static.php">Vehicle Tax </a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Income Tax</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                NEWS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Tax Calculator
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>-->
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="./changerate.php">Update Vehicle Tax </a>
                                            <a class="nav-link" href="../news/calculator.php">Income Tax</a>
                                            <a class="nav-link" href="../news/non-resi.php">Non-Resident Tax</a>
                                            
                                        </nav>
                                    </div>
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
                    <form method="post">
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">TAXMANDU - ADMIN PANNEL</h2>
                        <h4>DELETE NEWS</h4>
                        <div class="form">           
                            <div >
                                <div class="breadcrumb-item active"><h5>Enter a news id to delete:</h5>
                                <input class="one" type="text" id="nid" name="nid" placeholder="News ID"><br>
                                </div>
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn-outline-dark" id="delnews" name="delnews">Delete</button>
                            </div>

                        </div>
                    </div>
                    </form>
                </main>

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
                    <style>
                        .form{
                            margin-left: 250px;
                            margin-top: 80px; 
                        }
                        .two{
                            width: 400px;
                        }
                        .one{
                            width: 400px;
                        }
                        .three{
                            width: 400px;
                        }
                        .News{
                            height: 200px;
                            width: 600px;
                        }
								
.btn-outline-dark {
    margin-left: 150px;
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

</style>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
