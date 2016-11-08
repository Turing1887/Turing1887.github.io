var fs = require('fs');
const util = require('util');

$(document).ready(function(){
    $("#gsetup-btn").click(function(){
        $(".content").addClass("hidden");
        $(".setup").removeClass("hidden");
    });
    $("#websites-btn").click(function(){
        $(".content").addClass("hidden");
        $(".websites-table").removeClass("hidden");
    });
});
