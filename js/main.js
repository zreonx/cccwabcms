$(".sidebar ul li").on('click', function(){
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
});

$(".open-btn").on('click', function(){
    $(".sidebar").addClass('active');
});

$(".close").on('click', function(){
    $(".sidebar").removeClass('active');
});