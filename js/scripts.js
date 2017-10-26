(function ($, root, undefined) {

	$(function () {

		'use strict';

		if (window.location.search === "?success=true") {
    $('.darken').css('display', 'block');
		$('.node').css('display', 'block');
}

$(".closeButton, #repeatBtn").click(function(){
    $("#darken, .node").fadeOut("fast");
});

$(document).mouseup(function (e)
{
var container = $(".node");

if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $("#darken, .node").fadeOut("fast");
        $('html, body').css('overflowY', 'auto');
    }
});

	});

})(jQuery, this);
