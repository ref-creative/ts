$(function(){
    if($.cookie("city") == null) {
        $('.body-inner').hide();
        $('body').append('<div class="modalSlot"><div class="cityModal"><div class="col-lg-12>"><h4 class="title">Şehrini Seç</h4></div><div class="col-lg-12"><div class="cityBox" city="Gaziantep"><span class="cityCode">27</span><span class="cityName">Gaziantep</span></div></div></div></div>');
    }

   $('.cityBox').click(function(){
     var city = $(this).attr('city');
     $.get('?page=selectCity&city='+city,(res) => {
         if(res==1) {
             $.cookie("city",city);
             $('.modalSlot').remove();
             //$('.body-inner').fadeIn();
             window.location.replace('?page=home');
         }
     });
   });
   //$.removeCookie("city");
});