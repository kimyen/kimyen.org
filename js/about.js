// script for rotating-box

var frequency = 10000;
var n = 0;
var show;
var arr = ["zero", "one", "two", "three"];

$(document).ready(function(){       
    
    $('#rotating-box').hover(function(){
        clearInterval(show);
    });
    
    $('#rotating-box').mouseleave(function(){
        clearInterval(show);
        show = setInterval(display, frequency);
    });
    
    show = setInterval(display, frequency);
    
    for (var i = 0; i < 4; i++) {
        $($('.button')[i]).click(function() {
            change($(this).attr('id'));
        });
    }
});

function display(){
    $($('.frame')[n]).slideToggle().addClass("hidden");
    $($('.button')[n]).removeClass("shown");
    n++;
    if (n > 3) { n = 0; }
    $($('.frame')[n]).slideToggle().removeClass("hidden");
    $($('.button')[n]).addClass("shown");
}

function change(id){    
    clearInterval(show);
    var i = jQuery.inArray(id, arr);
    $($('.frame')[n]).slideToggle().addClass("hidden");
    $($('.button')[n]).removeClass("shown");
    
    $($('.frame')[i]).slideToggle().removeClass("hidden");
    $($('.button')[i]).addClass("shown");
    
    n = i;  
    show = setInterval(display, frequency);
}
