<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Ceramic Pay
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
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
                <h3><img src="img/logo2.png" class="img-fluid" /><span>Ceramic Services</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="bg-primary">
                    <a href="#" class="dashboard"><i class="material-icons" style="color:#fff">dashboard</i><span class="text-light">Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="views/users.php" class="dashboard"><i class="material-icons">dashboard</i><span>Utilisateurs</span></a>
                </li>
                <li class="active">
                    <a href="views/search.php" class="dashboard"><i class="material-icons">search</i><span>Recherche</span></a>
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

                        <a class="navbar-brand" href="#"> Dashboard </a>

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
                                    <a class="nav-link" href="views/search.php">
                                        <span class="material-icons">search</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">group</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>utilisateurs</strong></p>
                                <?php
                                include "php/api/api.php";

                                $countUsers = countUsers();
                                $datas = json_decode($countUsers, true);
                                ?>
                                <h3 class="card-title"><?= $datas ?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="views/users.php">Voir les details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">timer</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <?php
                                
                                $countNonValid = countNonValid();
                                ?>
                                <p class="category"><strong>Non Validés</strong></p>
                                <h3 class="card-title"><?=$countNonValid?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Product-wise sales
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        <!--follow_the_signs-->
                                        done_all_sharp
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <?php
                                
                                $countValid = countValid();
                                ?>
                                <p class="category"><strong>Validés</strong></p>
                                <h3 class="card-title"><?=$countValid?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        attach_money
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <?php
                                
                                $countMoney = $countValid*400;
                                ?>
                                <p class="category"><strong>Depenses</strong></p>
                                <h3 class="card-title"><?=$countMoney?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Liste des scans</h4>
                                <p class="category">Valider et payer les scans des utilisateurs</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Telephone</th>
                                            <th>Nombre scan</th>
                                            <th>Merite</th>
                                            <th>Actions</th>
                                            <th>Visualiser</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $getScan = getScan();
                                            // $resp = $response;
                                            // $content = json_decode(file_get_contents("https://ceramic-services.000webhostapp.com/ceramic/web/getUser.php"));
                                            // print_r($content);
                                            // var_dump(array($getAllCli));
                                            // echo "$getUSer[5]";
                                            // echo $getUSer;
                                            // var_dump($_GET['key']);
                                            $data = json_decode($getScan, true);
                                            
                                            // if(isset($_POST['valider'])){
                                            //     setScan();
                                            //     var_dump(setScan());
                                            // }
                                            foreach ($data as $scans => $scan) {

                                                // $val = array_count_values($scan);
                                                // var_dump($val);

                                                // var_dump($user);
                                                // var_dump($nom);
                                                // $frequency++;
                                                // $id = $frequency;

                                                // $id = $scan['idUser'];
                                                $id = $scan['idUser'];
                                                $nom = $scan['nom'];
                                                $tel = $scan['telephone'];
                                                $sca = $scan['scan'];
                                                $merite = $scan['merite'];
                                                // $date = $scan['date_scan'];
                                                echo "<tr>
                                                <td>$id</td>
                                                <td>$nom</td>
                                                <td>$tel</td>
                                                <td>$sca</td>
                                                <td>$merite</td>
                                                <td><a href='index.php?key=$id' class='btn btn-success'>Valider</a></td>
                                                <td><a href='views/scans.php?key=$id' class='btn btn-success'>Voir</a></td>
                                                
                                                </tr>
                                                
                                                ";
                                                // echo "$name";
                                            }
                                            if(isset($_GET['key']) && include 'php/web/setScan.php'){
                                                $setScan = setScan($_GET['key']);
                                            }
                                            if(isset($_GET['key']) && include 'php/web/getUserQrCode.php'){
                                                $getUserQrCode = getUserQrCode($_GET['key']);
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

                <div class="col-md-6">
                    <p class="copyright d-flex justify-content-end"> &copy 2021 Design by
                        Mael Toukap BootStrap Admin Dashboard
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
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


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