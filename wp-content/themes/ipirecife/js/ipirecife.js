$(document).ready(function() {

	$("#sou-novo").hover(function() {
    	$(".nav-bottom").toggleClass("sou-novo");
    	$("#caption-novo").toggleClass("show-caption");
    	$("#content-novo").toggleClass("show-caption");
	});

	$("#sou-membro").hover(function() {
    	$(".nav-bottom").toggleClass("sou-membro");
    	$("#caption-membro").toggleClass("show-caption");
    	$("#content-membro").toggleClass("show-caption");
	});

	$("#mensagens").hover(function() {
    	$(".nav-bottom").toggleClass("mensagens");
    	$("#caption-mensagens").toggleClass("show-caption");
    	$("#content-mensagens").toggleClass("show-caption");
	});

  $("#mensagens").mouseenter(
  function(){
    var $this = $(this);
    var offset = $this.offset();
    var width = $this.width();
    var height = $this.height();

    var centerX = offset.left + width / 2;
    var centerY = offset.top + height / 2;

    $(".nav-bottom").after().animate({left:centerX },'slow');

  });
$(".tabb tr").mouseleave(
  function() {
    $(this).find("td #headie").animate({marginLeft:'0px'},'slow')
  });

  	///////////////////////////////////
    //    Scroll To show Shadow         
    ///////////////////////////////////

    $('#logo-color').hide();

    $(window).scroll(function() {
        var y = $(window).scrollTop();
        if (y > 300) {
            $('#logo-color').show();

            $('#logo-bw').hide();

            $(".navbar-default").css({
                'background': 'white'
            });
            
        } else {
            $('#logo-color').hide();
            $('#logo-bw').show();

            $(".navbar-default").css({
                'background': 'transparent'
            });
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
