// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.



$(document).ready(function(e){

// This plugin added by Chris Voorberg - February 9 2013 for the Articles page

	$(".panelshow").click(function(){
	$(this).toggleClass("active");
	$(this).next(".panel").stop('true','true').slideToggle("slow");
	});


// This plugin added by Chris Voorberg - April 2, 2013 for Voting

    $('.voteIcons').click(function(){

        var caselawID = $(".caselawID").text();
        var vote = $(".voteIcons").value();

        $.post(
        '../include/vote.inc.php',
        { caselawID: caselawID, vote: vote },
        function (data){
        $('.voteIcons').html(data);
        });
    });

});