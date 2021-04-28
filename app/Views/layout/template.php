<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <title>Podnesia</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/e84730ea7c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="visible h-100">
            <div class="d-flex flex-column h-100">
                <div class="sidebar-header mb-5">
                    <img src="/img/podnesia.png">
                    <p class="text-center">
                        <?= $name; ?></p>

                </div>
                <div>
                    <ul class="list-unstyled components">
                        <!-- <li class="active">
                
                </li> -->
                        <li>
                            <a href="/home"><i class="fas fa-home fa-lg" style="padding-right: 20px;"></i>HOME</a>
                        </li>
                        <li>
                            <a href="/kategori"><i class="fas fa-podcast fa-lg" style="padding-right: 20px;"></i>PODCAST</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-info-circle fa-lg" style="padding-right: 20px;"></i>ABOUT</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex justify-content-center mt-auto align-items-center">

                    <a href=""><i class="fab fa-instagram fa-2x" style="padding: 10px;"></i></a>
                    <a href=""><i class="fab fa-facebook fa-2x" style="padding: 10px;"></i></a>
                    <a href=""><i class="fab fa-twitter fa-2x" style="padding: 10px;"></i></a>

                </div>
            </div>



        </nav>


        <!-- Page Content Holder -->
        <div id="content" class="visible">
            <nav class="navbar sticky-top navbar-light">
                <div class="container-fluid">
                    <div id="btn-sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="<?php echo base_url('login/logout') ?>">Logout</a>
                </div>
            </nav>
            <?= $this->renderSection('content'); ?>
        </div>









        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#btn-sidebar').on('click', function() {
                    $('#sidebar').toggleClass('visible');
                    $('#content').toggleClass('visible');
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

</body>

</html>