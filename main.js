$(document).ready(function() {
function showpopup(){        
    $('.pop-up').addClass('show');
    $('.pop-up-wrap').addClass('show');
    $("#close").click(function (){
        $('.pop-up').removeClass('show');
        $('.pop-up-wrap').removeclass('show'); 
    });
    
}
$(document).ready(function(){
    $('#minombre').hide();
    $('#close').on('click',function(){
        $('#minombre').show();
        $('#minombre').click(function(){
            $('#minombre').hide(3000);
            
        })
    })
})




$(".botonn").click(showpopup);
setTimeout(showpopup,2000);
});












