jQuery(document).ready(function($){$(".hero .banner-top").addClass("top-end"),$(".hero .banner-bot").addClass("bot-end"),$(".hero .jumbotron h1").addClass("h1-end");var a;a=$(".navbar").outerHeight(),$("#bs-example-navbar-collapse-1 ul li a[href^='#']").on("click",function(o){o.preventDefault();var e=this.hash;$("html, body").animate({scrollTop:$(e).offset().top-a},300,function(){window.location.hash=e})}),$(".navbar-collapse").click("li",function(){$(".navbar-collapse").collapse("hide")})});