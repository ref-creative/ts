<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?=site_name;?> <?=$data["title"];?></title>
    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/front/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/front/css/animate.css">
    <!-- magnific -->
    <link rel="stylesheet" href="assets/front/css/magnific-popup.css">
    <!-- carousel -->
    <link rel="stylesheet" href="assets/front/css/owl.carousel.min.css">
    <!-- isotop -->
    <link rel="stylesheet" href="assets/front/css/isotop.css">
    <!-- ico fonts -->
    <link rel="stylesheet" href="assets/front/css/xsIcon.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="assets/front/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="assets/front/css/responsive.css">
    <script src="assets/front/js/jquery.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="body-inner">
<?php


fetch(ViewPath.'layouts/header');

fetchPAGE($route_path,$data);

fetch(ViewPath.'layouts/footer');

?>
</div>
</body>
</html>
