$(function(){

});

function eventSeat(id){
    $.getJSON('?page=eventseat&e='+id,(veri) => {
        $.each(veri,(index,val) => {
            $('.seats-area').append('<div class="seats-row" id="r-'+val.sira+'"><div class="seat-box" style="background-color:#f00;">'+val.sira+'</div></div>')
            var newData = val.data;
            console.log(val.sira);
            $.each(newData,(index,add) => {
                if((add.user_id > 0) && (add.durum == 1)) {
                    //rezerve
                    $('#r-'+val.sira).append('<div class="seat-box rezerve"  tid="'+add.id+'" id="s'+add.id+'">'+add.koltuk+'</div>');
                }else if((add.user_id > 0) && (add.durum == 0)) {
                    $('#r-'+val.sira).append('<div class="seat-box sold"  tid="'+add.id+'" id="s'+add.id+'">'+add.koltuk+'</div>');
                }else {
                    $('#r-'+val.sira).append('<div class="seat-box empty"  tid="'+add.id+'" id="s'+add.id+'">'+add.koltuk+'</div>');
                }
            });


        });
        getPrice($('#event').val());

        $('.seat-box').on("click", function() {
            var sid = $(this).attr('tid');
           $.get('?page=check&seatID='+sid,(data) => {
               if(data == 1) {
                   var notice = "Seçtiğin koltuk senin için rezerve edildi";
                   $('#s'+sid).removeClass('empty');
                   $('#s'+sid).addClass('rezerve');
                   getPrice($('#event').val());
               }else if(data == 2){
                   var notice = "Seçtiğin koltuk rezerve edilemez. { rezerve edilmiş } ";
               }else if(data == 3){
                   var notice = "Seçim kaldırıldı";
                   $('#s'+sid).removeClass('rezerve');
                   $('#s'+sid).addClass('empty');
                   getPrice($('#event').val());
               }
               //alert(notice);
           })
        });
    })
}


function getPrice(e){
    $.getJSON('?page=getprice&e='+e,(data) => {
        var total = parseInt(0);
        var result = $('.priceResult');
        result.html(''); $('.totalPrice').text('');
        $.each(data,(i,v) => {
            result.append('<li>'+v.sira+'-'+v.koltuk+'</li>');
            total += parseInt(v.fiyat);
        });
        $('.totalPrice').text(total+'₺');
    });

}