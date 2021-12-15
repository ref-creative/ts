<div class="inner-bg"></div>
<div class="container">
    <section>
        <div class="col-lg-12">
            <div class="col-lg-5" style="margin:0 auto 0 auto; margin-top:100px;">
                <form method="post" action="?page=register">
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 form">
                            <h4>Üyelik Formu</h4>
                        </div>
                        <div class="col-lg-12 form">
                            <label>İsim</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="col-lg-12 form">
                            <label>Telefon</label>
                            <input type="text" class="form-control" name="phone" />
                        </div>
                        <div class="col-lg-12 form">
                            <label>E-posta</label>
                            <input type="text" class="form-control" name="mail" />
                        </div>
                        <div class="col-lg-12 form">
                            <label>Şifre</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <div class="col-lg-12">
                            Zaten üyeyseniz <a href="?page=login">giriş</a> yapmak için <a href="?page=login">tıklayın</a>
                        </div>
                        <div class="col-lg-6 display-4">
                            <button class="btn btn-success">KAYIT OL</button>
                        </div>
                        <div class="col-lg-12" style="color:#f00;">
                            <?=$data["message"];?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<style>
    .header.header-transparent ul.navbar-nav > li > a { color:#fff !important; }
</style>