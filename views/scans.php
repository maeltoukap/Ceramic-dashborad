<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Ceramic Pay
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>


    <?php
    // include 'php/web/getUser.php';
    // $getUSer = getUser();
    ?>

    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../img/logo2.png" class="img-fluid" /><span>Ceramic Services</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../index.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="users.php" class="dashboard"><i class="material-icons">dashboard</i><span>Utilisateurs</span></a>
                </li>
                <li class="active">
                    <a href="search.php" class="dashboard"><i class="material-icons">search</i><span>Recherche</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
                        </ul>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                </div>


            </ul>


        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Scans </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">apps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">person</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="search.php">
                                        <span class="material-icons">search</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Liste des Scans</h4>
                                <p class="category">Liste des derniers Scans</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Numero de coupon</th>
                                            <th>Date de scan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include "../php/web/getUserQrCode.php";

                                            $getUserQrCode = getUserQrCode($_GET['key']);
                                            // $resp = $response;
                                            // $content = json_decode(file_get_contents("https://ceramic-services.000webhostapp.com/ceramic/web/getUser.php"));
                                            // print_r($content);
                                            // var_dump(array($getAllCli));
                                            // echo "$getUSer[5]";
                                            // echo $getUSer;
                                            $data = $getUserQrCode;
                                            // var_dump($data[IdUser]);
                                            // $result = $data['data'];
                                            // var_dump($getUserQrCode);
                                            
                                            foreach ($data as $users => $user) {
                                                
                                                // var_dump($user);
                                                // var_dump($nom);
                                                $id = $user['idScan'];
                                                $QrCode = $user['qrCode'];
                                                $date = $user['date_scan'];
                                                $valider = $user['valider'];
                                                $valider == 2? $resp = "En attente": $resp = "Payé";
                                                // $date = $user['date_inscription'];
                                                echo "<tr>
                                                <td>$id</td>
                                                <td>$QrCode</td>
                                                <td>$date</td>
                                                <td>$resp</td>
                                                </tr>
                                                
                                                ";
                                                // echo "$name";
                                            }
                                            ?>
                                            <!-- <td><input type='submit' value='Valider' class='btn btn-success'></td> -->
                                            <!-- <td>1</td>
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tim Sebastian</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Morris</td>
                                            <td>$31,123</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>South Africa</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hulk Hogan</td>
                                            <td>$43,120</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Angelina Jolie </td>
                                            <td>$12,140</td>
                                            <td>Australia</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        <li>
                                            <a href="#">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Company
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </nav> -->

                            </div>
                            <div class="col-md-6">
                                <p class="copyright d-flex justify-content-end"> &copy 2021 Design by Mael Toukap Ceramic Admin Dashboard
                                     <!-- <a href="#">  Mael Toukap  </a>  Ceramic Admin Dashboard -->
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>