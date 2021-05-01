<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Cabinet Dentaire | Centre Dentaire Largou Tiznit</title>

    <meta name="keywords" content="Cabinet Dentaire" />
    <meta name="description" content="Centre Dentaire Largou Tiznit">
    <meta name="author" content="dentaire.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Bootstrap css datepicker and timepicker -->
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/synature.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-medical-2.css">
    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-medical-2.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#specialite").hover(function() {
                document.getElementById("acc").className = "nav-link";
                document.getElementById("spe").className = "nav-link active";
                document.getElementById("ser").className = "nav-link";
                document.getElementById("apr").className = "nav-link";
                document.getElementById("con").className = "nav-link";
            });
            $("#services").hover(function() {
                document.getElementById("acc").className = "nav-link";
                document.getElementById("spe").className = "nav-link";
                document.getElementById("ser").className = "nav-link active";
                document.getElementById("apr").className = "nav-link";
                document.getElementById("con").className = "nav-link";
            });
            $("#about-us").hover(function() {
                document.getElementById("acc").className = "nav-link";
                document.getElementById("spe").className = "nav-link";
                document.getElementById("ser").className = "nav-link";
                document.getElementById("apr").className = "nav-link active";
                document.getElementById("con").className = "nav-link";
            });
            $(".accueil").hover(function() {
                document.getElementById("acc").className = "nav-link active";
                document.getElementById("spe").className = "nav-link";
                document.getElementById("ser").className = "nav-link";
                document.getElementById("apr").className = "nav-link";
                document.getElementById("con").className = "nav-link";
            });
        });

    </script>
</head>

<body onLoad=typeWriter()>

    @yield('content')

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Bootstrap js datepicker and timepicker -->
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>

    <!-- Demo -->
    <script src="js/demos/demo-auto-services.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>
</body>

</html>
