$(document).ready(function() {

	$("#sou-novo").hover(function() {
      $(".nav-bottom").toggleClass("sou-novo");          //Muda a cor da barra de fundo
    	$(".lavalamp-object").toggleClass("sou-novo");     //Muda a cor do triangulo lavalamp
      $("#content-novo").toggleClass("push-img-left");    //Mostra os links
    	$("#caption-novo").toggleClass("show-caption");
  });

  $("#sou-membro").hover(function() {
      $(".nav-bottom").toggleClass("sou-membro");
      $(".lavalamp-object").toggleClass("sou-membro");
      $("#caption-membro").toggleClass("show-caption");
	});

	$("#mensagens").hover(function() {
      $(".nav-bottom").toggleClass("mensagens");
    	$(".lavalamp-object").toggleClass("mensagens");
    	$("#caption-mensagens").toggleClass("show-caption");
	});


  	///////////////////////////////////
    //     Mostra logo no scroll     // 
    ///////////////////////////////////

    $(window).scroll(function() {

        var y = $(window).scrollTop();
        var windowHeight = (window.innerHeight)*0.20; //pega ,em pixels, 20% do tamanho da janela

        if (y > windowHeight) { //compara a distancia do top da janela com o tamanho da janela

            $('#logo-color').show();
            $('#logo-bw').hide();

            $(".nav-home").addClass("navbar-white");

            $("#btn-fixed").addClass("btn-fixed");
            
        } else {
            $('#logo-color').hide();
            $('#logo-bw').show();

            $(".nav-home").removeClass("navbar-white");

            $("#btn-fixed").removeClass("btn-fixed");
        }
    });

    $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 200,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            dots: true
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

});


