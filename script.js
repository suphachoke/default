/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    var n = 18;
    responsive(n);
    $(".content").css("display", "inline");
    $(".footer").css("display", "block");
    setTimeout(function () {
        responsive(n);
        $(window).resize();
    }, 500);
});

$(window).resize(function () {
    responsive(0);
});

function navbarChange(n) {
    $(".mainnav").attr("class", "mainnav-r1");
}

function navbarDefault() {
    $(".mainnav-r1").attr("class", "mainnav");
}

function responsive(n) {
    var w = $(window).width() - n;
    //alert(w);
    $(".heading").width(w);
    $(".navbar").width(w);
    $(".footer").width(w);
    var lm = 0;
    if ($(window).width() < 350) {
        $(".heading .center").css("background", "url(images/logo_mini.png) no-repeat top left");
        $(".navbar .right").css("background", "url(images/head_c2.png) repeat-x top left");
        $(".logo").css("width","120px");
        $("#smallnav").attr("display","block");
		$(".mainnav").addClass("mainnav-r1");
    } else if ($(window).width() < 600) {
        $(".heading .center").css("background", "url(images/logo_mini.png) no-repeat top left");
        $(".navbar .right").css("background", "url(images/head_c2.png) repeat-x top left");
        $(".logo").css("width","120px");
		$("#smallnav").css("display","block");
		$(".mainnav").addClass("mainnav-r1");
    } else if ($(window).width() < 1050) {
        $(".heading .center").css("background", "url(images/logo_short.png) no-repeat top left");
        $(".navbar .right").css("background", "url(images/head_c2.png) repeat-x top left");
        $(".logo").css("width","150px");
		$("#smallnav").css("display","block");
		$(".mainnav").addClass("mainnav-r1");
    } else if ($(window).width() < 1250) {
        $(".heading .center").css("background", "url(images/logo.png) no-repeat top left");
        $(".navbar .right").css("background", "url(images/head_r2.png) no-repeat top left");
        $(".logo").css("width","auto");
		$("#smallnav").css("display","none");
		$(".mainnav").removeClass("mainnav-r1");
		$(".mainnav").removeClass("open");
    } else {
        $(".heading .center").css("background", "url(images/logo.png) no-repeat top left");
        $(".navbar .right").css("background", "url(images/head_r2.png) no-repeat top left");
		$("#smallnav").css("display","none");
        $(".logo").css("width","auto");
		$(".mainnav").removeClass("mainnav-r1");
		$(".mainnav").removeClass("open");
    }
    $(".content td").width(w - (2 * lm));
    //$("body").width(w - lm);

    //additional rules
    $(".admin_menu").parent().css("border-right", "1px solid gray");
    var cHeight = 0;
    $("#committee").find(".tri-col ul").each(function () {
        var tv = $("#committee").offset().top;
        addY = $(this).offset().top - tv;
        if (($(this).outerHeight(true) + addY) > cHeight) {
            cHeight = ($(this).outerHeight(true) + addY);
        }
    });
    $("#committee").find(".bi-col ul").each(function () {
        var tv = $("#committee").offset().top;
        addY = $(this).offset().top - tv;
        if (($(this).outerHeight(true) + addY) > cHeight) {
            cHeight = ($(this).outerHeight(true) + addY);
        }
    });
    $("#committee").find(".uni-col ul").each(function () {
        var tv = $("#committee").offset().top;
        addY = $(this).offset().top - tv;
        if (($(this).outerHeight(true) + addY) > cHeight) {
            cHeight = ($(this).outerHeight(true) + addY);
        }
    });
    $("#committee").height(cHeight);
}

$(".member_btn").click(function () {
    if ($(".member_menu").css("display") == "none") {
        $(".member_menu").show();
    } else {
        $(".member_menu").hide();
    }
});

$(".member_menu").find("li").click(function () {
    window.location.href = $(this).data('href');
});

$(".navbar .menu td").click(function () {
    window.location.href = $(this).data('link');
});

$(function () {
    $('a[href*=#]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top}, 1000, 'swing');
    });

	$('#smallnav').on('click', function (e) {
		$('.mainnav-r1').toggleClass('open');
	});
});

/*$("#smallnav a").click(function () {
    if ($(".mainnav-r1").css("display") == "none") {
        $(".mainnav-r1").animate({height: "toggle"}, 500, 'swing');
    } else {
        $(".mainnav-r1").animate({height: "toggle"}, 500, 'swing');
    }
});*/

$("#cfp").click(function () {
    window.open('./document/cfp.pdf', '_blank');
});

$("#tmp").click(function () {
    window.open('./document/template.zip', '_blank');
});

$("#sub").click(function () {
    window.open('./submission', '_self');
});
