

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

function sendMail() {
    var link = "mailto:timzschage@gmail.com"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape("This is my subject")
             + "&body=" + escape(document.getElementById('topics').value)
    ;

    window.location.href = link;
}