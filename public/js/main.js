function adicionarActiveNosMenus(){
    $(".nav li a").each(function(index) {
        if($.trim(this.href) == window.location) {
            $(this).closest('li').addClass("active");
        }
    });
}
function atualizarADataDosLinks(){//atualizar o cronometro
    $('.date').each(function (index, value) {
        var xDate=$(this).attr('x-date');
        var dataText=timeSince(xDate);
        $(this).html(dataText);
    });
}
function timeConverter(UNIX_timestamp){//unix epoch to date
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    hour=("00" + hour).slice(-2);
    var min = a.getMinutes();
    min=("00" + min).slice(-2);
    var sec = a.getSeconds();
    sec=("00" + sec).slice(-2);
    //var time = date + '/' + month + '/' + year + ' ' + hour + ':' + min + ':' + sec ;
    var time = date + '/' + month + '/' + year;
    return time;
}

function timeSince(date) {//cronômetro
    var seconds = Math.floor(((new Date().getTime()/1000) - date)),
    interval = Math.floor(seconds / 31536000);
    //if (interval > 1) return interval + " y";
    if (interval >= 1) return timeConverter(date);
    interval = Math.floor(seconds / 2592000);
    //if (interval > 1) return interval + " m";
    if (interval >= 1) return timeConverter(date);
    interval = Math.floor(seconds / 86400);
    //if (interval >= 1) return interval + " d";
    if (interval >= 1) return timeConverter(date);
    interval = Math.floor(seconds / 3600);
    if (interval >= 1) return interval + " h";
    interval = Math.floor(seconds / 60);
    if (interval >= 1) return interval + " m";
    return Math.floor(seconds) + " s";
}
$(function(){
    adicionarActiveNosMenus();
    setInterval(atualizarADataDosLinks, 1000);
});
