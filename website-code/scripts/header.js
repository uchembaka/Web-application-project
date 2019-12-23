
  $(function() {
      $(window).on("scroll", function() {
          if($(window).scrollTop() > 50) {
              $(".extra_header").css("display", "none"); //remove secondary header
              $(".site_header").css("border-bottom-style", "solid")
              $(".site_header").css("border-width", "thin")
              $(".site_header").css("border-color", "#005A6D")
              //$(".desc").css("font-size", "1em");
              $(".search").css("display", "none");
              $(".logo_desk").attr("src","/Website-code/images/logo_mob.png");

          } else {
             $(".extra_header").css("display", "block"); //add scondary header
            $(".logo_desk").attr("src","/Website-code/images/logo_useable.png");
            //$(".desc").css("font-size", "1.5em");
            $(".search").css("display", "inline");
          }
      });
  });
