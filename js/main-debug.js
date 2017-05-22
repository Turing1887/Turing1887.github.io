

$(document).ready(function(){
    $("#gsetup-btn").click(function(){
        $(".content").addClass("hidden");
        $(".setup").removeClass("hidden");
    });
    $("#websites-btn").click(function(){
        $(".content").addClass("hidden");
        $(".websites-table").removeClass("hidden");
    });
    $("#misc-btn").on("click",function(){
        $(".content").addClass("hidden");
        $(".misc").removeClass("hidden");
    });

});
