<header id="header" class="header header header-transparent h-transparent2">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-6">
                <!-- logo-->
                <a class="navbar-brand logo" href="?page=home">
                    <img src="assets/front/images/logo2-1.png" alt="" width="200">
                </a>
            </div><!-- end col -->

            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg text-lg-center justify-content-end">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="dropdown nav-item active">
                                <a href="?page=home" class="" >Anasayfa</a>

                            </li>
                            <li class="dropdown nav-item">
                                <a href="" class="" data-toggle="dropdown">Etkinlikler <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="">Konser</a></li>
                                    <li><a href="">Tiyatro</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a href=""> İletişim </a>

                            </li>

                                <?php if($_SESSION["login"]) { ?>
                                <li class="nav-item dropdown"><a><?=Auth::User()->name?></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="?page=logout">Oturumu Kapat</a></li>
                                    </ul>
                                </li>
                                <?php } else { ?>
                                    <li class="nav-item dropdown"><a>Üyelik</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="?page=login">Üye Girişi</a></li>
                                            <li><a href="?page=register">Kayıt Ol</a></li>
                                        </ul>
                                    </li>
                                <?php } ?>
                            <li>
                                <a>Şehir : <span style="color:#fc3a1d"><?=$_SESSION["city"];?></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end col -->
        </div>

    </div><!-- container end-->
</header>