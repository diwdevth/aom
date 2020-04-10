
$('document').ready(function (){
    $('#send_btn').on("click", function(){
        var name = $('#name').val();
        var numbers = $('#numbers').find(":selected").text();
        var usecmd = $('input[name="usecmd"]');
        var usesleep = $('input[name="usesleep"]');
        var vcmd = 0;
        var vsleep = 0;
        if(usecmd[0].checked == true){
            vcmd = 1;
        }
        if(usesleep[0].checked == true){
            vsleep = 1;
            
        }
        $.ajax({
            url: 'process.php',
            type: 'post',
            data: {
                'name': name,
                'numbers': numbers,
                'usecmd': vcmd,
                'usesleep': vsleep,
                'save': 1
            },
            success: function(response){
                alert("alert: "+response);
            }
        });

        /*var checkboxes = $('input[name="usesleep"]');
        console.dir(checkboxes[0].checked);*/
       
    });
    
});