$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
    if(listaMenu.is(':hidden')== true){
        var icone = $('.botao-nav-mobile i');
        icone.removeClass('fa fa-bars');
        icone.addClass('fa-xmark');
        listaMenu.slideToggle();
    }else{
        var icone = $('.botao-nav-mobile i');
        icone.removeClass('fa-xmark');
        icone.addClass('fa fa-bars');
        listaMenu.slideToggle();

  
    
   
    }
}
    )}
)
