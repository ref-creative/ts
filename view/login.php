<div class="inner-bg"></div>
<div class="container">
    <section>
        <div class="col-lg-12">
            <div class="col-lg-5" style="margin:0 auto 0 auto; margin-top:100px;">
                <form method="post" action="?page=login">
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 form">
                        <h4>Üye Girişi</h4>
                    </div>
                    <div class="col-lg-12 form">
                        <label>E-posta</label>
                        <input type="text" class="form-control" name="mail" />
                    </div>
                    <div class="col-lg-12 form">
                        <label>Şifre</label>
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <div class="col-lg-6">
                        <a href="">Şifremi unuttum ?</a>
                    </div>
                    <div class="col-lg-12">
                        Henüz üye değilseniz <a href="?page=register">üye </a>olmak için <a href="?page=register">tıklayın</a>
                    </div>
                    <div class="col-lg-6 display-4">
                        <button class="btn btn-success">GİRİŞ YAP</button>
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