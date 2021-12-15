<?php foreach($data['q'] as $rw) {} ?>

<div class="inner-bg"></div>
<section>


    <section class="ts-intro-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 select-ticket">
                    <div class="tab_content seatList" id="event_tab" style="padding:25px;">
                        <h2 style="    margin: 0 0 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;" >Koltuk Seçim Alanı <button class="btn btn-success float-right" style="margin-top:-12px;">BİLET AL</button>
                        <div class="totalPrice" ></div>
                        </h2>
                        <div class="seats-area col-lg-12" style="float:left;">

                        </div>

                        <div class="col-lg-12 seats-info-area" style="float:left;">
                            <div class="seat-info" style="">
                                <div class="seat-box" style="background-color:#0553DD;"></div> Boş
                            </div>
                            <div class="seat-info">
                                <div class="seat-box" style="background-color:#f1b01a;"></div> Geçici Rezerve
                            </div>
                            <div class="seat-info">
                                <div class="seat-box" style="background-color:#333;"></div> Dolu
                            </div>
                            <div class="seat-info">
                                <div class="seat-box" style="background-color:#61b703;"></div> Senin Seçtiğin
                            </div>
                            <div class="kroki">
                                <a class="popup-image" href="kroki/gaun-aks.jpg" title="" target="_blank">Oturma Planı</a>
                            </div>

                        </div>
                        <div class="priceResult"></div>
                        <p>&nbsp;</p>
                        <p></p>
                        <div style="margin-top:40px;">Seçtiğin bilet geçici olarak senin için ayrıldı.</div>
                        <div><b>Biletini alman için sadece 5 dakikan olacak.</b></div>
                        <div>5 dakika&nbsp;içerisinde tamamlanmayan işlemlerde verilen bilet numarası geçersizdir</div>

                        <input type="hidden" id="event" value="<?=$rw['id'];?>" />
                    </div>
                </div>
                <div class="col-lg-12 event-detail">
                    <h4 class="title">ETKİNLİK DETAYLARI
                        <i class="fa fa-file-text-o float-right" ></i>
                        <span class="float-right" style="margin-right:15px; margin-top:-3px;">Kroki</span>
                    </h4>
                    <ul>
                        <li><b>Etkinlik Günü :</b> <?=$rw['gun'];?></li>
                        <li><b>Etkinlik Saati :</b> <?=$rw['saat'];?></li>
                        <li><b>Etkinlik Tarihi :</b> <?=$rw['tarih'];?></li>
                        <li><b>Şehir :</b> <?=$rw['il'];?></li>
                        <li><b>Etkinlik Yeri :</b> <?=$rw['yer'];?></li>
                        <li><b>Online Satış :</b> <?php echo $rw['online'] == 1 ? "Açık" : "Kapalı";?></li>
                    </ul>
                </div>
                <div class="col-lg-12" style="margin-top:60px; border-bottom:1px solid #fc3a1d; ">
                    <h2 class="column-title">
                        <?=$rw['baslik'];?>
                    </h2>
                    <div class="col-lg-12 event-image">
                        <img src="https://firsat.fun/files/fd17d086ccddf6ce0697f09d458a6270.jpg" />
                    </div>
                    <div class="intro-content-text">

                        <?=$rw['aciklama'];?>


                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
    $(function(){
        eventSeat(<?=$rw['id'];?>);
    });

</script>

<style>
    .header.header-transparent ul.navbar-nav > li > a { color:#fff !important; }
</style>

