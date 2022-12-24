$('.burger').click(function() {
  $('#header .header_bot .menu').toggleClass("active");
  $(this).toggleClass('cross')
});

$('.btn_1').click(function() {
  $('#modal_1').arcticmodal()
});

$('.btn_2').on('click', function() {
  $('#modal_2').arcticmodal();
  $('#prod_title i').remove();
  $(this).next().clone().appendTo('#prod_title');
  var text = $(this).next().text();
  $('#z_title').val(text);
});

$('.reliable .tabs_links ul li').click(function() {
  $('.reliable .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $('.reliable .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
});

$('.example .block_1 .tabs_links ul li').click(function() {
  $('.example .block_1 .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $(this).parent().parent().prev().children('.item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
});

$('.cards .cards_block .tabs_links ul li').click(function() {
  $('.cards .cards_block .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $('.cards .cards_block .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
});

$('.cards .cards_tab .tabs_links ul li').click(function() {
  $('.cards .cards_tab .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $('.cards .cards_tab .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
})

$('.about .block_1 .tabs_links ul li').click(function() {
  $('.about .block_1 .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $('.about .block_1 .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
})

$('.decorative .tabs_links li').click(function() {
  $('.decorative .tabs_links li').removeClass('active');
  $(this).addClass('active');
  $('.decorative .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
});

$('.solve .tabs_links ul li').click(function() {
  $('.solve .tabs_links ul li').removeClass('active');
  $(this).addClass('active');
  $('.solve .tabs_items .item').removeClass('active')
    .eq($(this).index()).addClass('active');
  return false;
});

$('.slider_4').owlCarousel({
    loop:true,
    margin:0,
	nav:true,
	navText:false,
	dots:true,
	responsive:{
		0:{
            items:1,
            nav:true
        },
		500:{
            items:2,
            nav:true
        },

		800:{
            items:3,
            nav:true
        },
		1200:{
            items:5,
            nav:true
        }
    }
});

$('.slider_3').owlCarousel({
    loop:true,
    margin:0,
	items:1,
	nav:true,
	navText:false,
	dots:true,
	autoplay:true,
	autoplayTimeout:7000,
	autoplayHoverPause : true,
});

$('.slider_2').owlCarousel({
    loop:true,
    margin:0,
	items:1,
	nav:true,
	navText:false,
	dots:true,
	autoplay:true,
	autoplayTimeout:7000,
	autoplayHoverPause : true,
});

$('.slider_5555').owlCarousel({
    loop:true,
    margin:0,
	items:1,
	nav:true,
	navText:false,
	dots:true,
	// autoplay:true,
	autoplayTimeout:7000,
	autoplayHoverPause : true,
});

$('.slider_1').owlCarousel({
    loop:true,
    margin:0,
	items:1,
	nav:true,
	navText:false,
	dots:true,
	// autoplay:true,
	autoplayTimeout:7000,
	autoplayHoverPause : true,
});

if (navigator.userAgent.indexOf('Mac OS X') != -1) {
  $("body").addClass("mac");
  $("html").addClass("mac");
} else {
  $("body").addClass("pc");
  $("html").addClass("pc");
}

$(document).ready(function() {
	$(".select").selectBox();
});

$(document).ready(function(){

	function falidator(item) {
		check = true;
		$(item).find('input').each(function() {
			if($(this).hasClass('required') && $(this).val() == '') {
				check = false;
				$(this).css('border', '1px red solid');
			} else {
				$(this).css('border', '1px transparent solid');
			}
		});
		if(check) {
			return true;
		} else {
			return false;
		}
	}

	/**************************/
	$("#form1").submit(function(){
		if(!falidator(this)) return false;
		$.ajax({
			type: "POST",
			url: "php/form1.php",
			data: $("#form1").serialize(),
			success: function(html) {

			}
		});

		$('#form_modal').arcticmodal('close');
		$('#spasibo').arcticmodal();
		/*$('.action_block .inputbox').removeClass("not-empty");*/
		$('#form1').trigger("reset");
		return false;
	});
	/**************************/

	/**************************/
	$("#form2").submit(function(){
		if(!falidator(this)) return false;
		$.ajax({
			type: "POST",
			url: "php/form2.php",
			data: $("#form2").serialize(),
			success: function(html) {

			}
		});
		$('#spasibo').arcticmodal();
		/*$('.action_block .inputbox').removeClass("not-empty");*/
		$('#form2').trigger("reset");
		return false;
	});
	/**************************/

});


$(document).ready(function() {

    if($.browser.msie) {
        $("form").find("input[type='text']").each(function() {
            var tp = $(this).attr("placeholder");
            $(this).attr('value',tp).css('color','#373533');
        }).focusin(function() {
            var val = $(this).attr('placeholder');
            if($(this).val() == val) {
                $(this).attr('value','').css('color','#373533');
            }
        }).focusout(function() {
            var val = $(this).attr('placeholder');
            if($(this).val() == "") {
                $(this).attr('value', val).css('color','#373533');
            }
        });

        /* Protected send form */
        $("form").submit(function() {
            $(this).find("input[type='text']").each(function() {
                var val = $(this).attr('placeholder');
                if($(this).val() == val) {
                    $(this).attr('value','');
                }
            })
        });
    }
});




$(".numbox").mask("+7 (999) 999-99-99");
