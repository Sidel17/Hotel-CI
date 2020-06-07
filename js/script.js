$('.nav-link').on('click', function (){
    $('.nav-link').removeClass('active');
    //this = li yang sedang di klik
    $(this).addClass('active');

    
});
