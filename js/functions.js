			jQuery(document).ready(function(){		

				var go = true;

				$(window).scroll(function() {
					if ($(this).scrollTop() > 50 && go) {
						$("header:not(.fixed)").css("opacity","0");
						$("header.fixed").css("top","0");
						go = false;
					} else if ($(this).scrollTop() < 50 && !go) {
						$("header:not(.fixed)").css("opacity","1");
						$("header.fixed").css("top","-170px");
						go = true;
					}
				});


				$( "header nav a" ).click(function() {
					$("html, body").animate({scrollTop: $("#" + $(this).attr("data-url")).offset().top-100}, 800); 
				});

				$("[rel='home']").click(function() {
					jQuery('body,html').animate({scrollTop:0},500);
				});

				$("[rel='scroll']").click(function() {
					$("html, body").animate({scrollTop: $("#o-que-fazemos").offset().top-100}, 800); 
				});

				$( "[rel='home']" ).each(function() {
					if($(this).closest("header").is(".fixed")){
						$(this).find("img").attr("src","http://www.labmellow.com.br/img/golden_logo.png");
					}
				});

			});	