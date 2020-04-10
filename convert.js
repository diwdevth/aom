$('document').ready(function (){
    startday = new Date();
    clockStart = startday.getTime();
    $.ajax({
    url: 'convert.php',
    type: 'post',
    data: {
        'startday': startday,
        'clockStart': clockStart
    }
    })
});