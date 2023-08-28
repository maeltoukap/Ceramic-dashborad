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
                    <a href="views/users.php" class="dashboard"><i class="material-icons">dashboard</i><span>Utilisateurs</span></a>
                </li>

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
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">


                <div class="row ">
                    <div class="col-lg-6 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <!-- <div class="card-header card-header-text">
                                <h4 class="card-title">Liste des utilisateurs</h4>
                                <p class="category">Liste des derniers utilisateurs</p>
                            </div> -->
                            <div class="card-content table-responsive">
                                <?php
                                    if(isset($_POST['generer'])){
                                        include '../generator.php';

                                        generate();
                                    }
                                ?>
                                <img class="card-img-top" src="../img/logo2.png" alt="Card image cap">
                                <p class="card-text">Generer puis imprimer les coupons qui seront inseré dans les sacs de ciment Ceramic</p>
                                <form method="POST">
                                    <input type="submit" name="generer" class="btn btn-primary" value="Generer">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-header">
          <h5 class="modal-title mt-0">Tickets QR Codes </h5>
        </div>
        <div class="modal-body"  >
          <div class="row" id="div">
          <div *ngFor="let Code of ListCode">
         <div class="card mr-0 mb-4 ml-2  border-top">
           <div class="card-body mt-0 mb-0">
             <div class="row mt-0 mb-0">
               <img src="/img/logo2.png" height="40" width="60" class="mr-4 mt-0 mb-0">
               <!-- <qrcode [qrdata]="Code" [width]="60" [errorCorrectionLevel]="'M'" class="mr-4 mt-0 mb-0"></qrcode> -->
               <div class="column font-size-10 mt-0 mb-0 mr-auto align-items-center mr-center"><h4 class="font-size-17 mt-0 mb-0 txt-align-center">CERAMIC SERVICES</h4><br>BP 8340 Douala <br>Tel: 699 438 516 / 651 747 110<br><strong>{{Code}}</strong></div>
               <img src="/img/logo2.png" height="40" width="40" class="mr-1 ml-2">
             </div>
             <div class="container mt-1 mb-1">
               <p class="font-size-10 mt-0 mb-0 mr-center txt-align-center">Scannez le QR Code <i class="far fa-hand-point-up"></i> avec l'application
                 (a telecharger sur <br><u>https://www.app.ceramicsarl.com</u>) et beneficiez<strong>de 400 Francs CFA</strong> 
                .<br>Vos sacs vides sont changes au prix de <strong>50 Francs CFA</strong> a la direction</p>
             </div>
           </div>
         </div>
         </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button"(click)="createPdf()" [disabled]="loading==true" class="btn btn-light"><span *ngIf="!loading">Exporter en PDF</span><span *ngIf="!!loading" class="spinner-border text-secondary m-0 width-10 height-10"  role="status"></span></button>
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