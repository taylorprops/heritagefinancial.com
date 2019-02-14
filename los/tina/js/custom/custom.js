$(document).ready(function() {
    /* Navigation */
    $(".button-collapse").sideNav();

    new WOW().init();

	if(!document.URL.match(/(career|borrower)/)) {
    	even_cards();
	}
	even_cards_width();
	/*
	$('.quote-form select').material_select();
	*/

    if(document.URL.match(/(contact-us|our-team)/)) {
        $('#submit_form').click(submit_message);
    }

    $('.phone').bind('keypress change blur', function() {
        format_phone(this);
    }).attr('maxlength', '14');

    $('.show-quote').click(function() {
        $('#tcWidgetPopup').fadeIn();
    });

    /* collapsible areas on settlemnt page */

    $('.show-more').on('show.bs.collapse', function () {
        $(this).next('a').text('Show Less');
    }).on('hide.bs.collapse', function () {
        $(this).next('a').text('Read More...');
    });

    $('.email_title').click(function() {
        $('#title_id').val($(this).data('id'));
        $('#agent_name').text($(this).data('name'));
    });

    $('textarea').keyup(function() {
        var
        $this  = $(this),
        height = parseInt($this.css('line-height'),     10),
        padTop = parseInt($this.css('padding-top'),     10),
        padBot = parseInt($this.css('padding-bottom'),  10);

        $this.height(0);

        var
        scroll = $this.prop('scrollHeight'),
        lines  = (scroll  - padTop - padBot) / height;

        $this.height(height * lines);
    });


    /* page transition */

     $(function() {

        $('.side-nav a').each(function() {
             if ( location.hostname === this.hostname || !this.hostname.length ) {

				var link = '';
                link = $(this).attr("href");

				if(link != '') {

	                if ( link.match("^#") ) {

	                    $(this).click(function() {
	                        var target = $(link);
	                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	                        if (target.length) {
	                            $('html,body').animate({
	                                scrollTop: target.offset().top - 70
	                            }, 1000); return false;
	                        }
	                    });

	                } else if ( link.match("^javascript") ) {

	                } else {

	                    $(this).click(function(e) {
	                        e.preventDefault();
	                        $('html').addClass('fadeSiteOut');
	                        setTimeout(function() {
	                            window.location = link;
	                        }, 500);
	                    });

	                }
				}

            }
        });

    });

 });


 function submit_message() {

    $('#submit_form').html('Sending... <i class="far fa-paper-plane ml-1"></i>');
    $('.form-error').remove();
    $('.form-error-input').removeClass('form-error-input');
    var to_id = $('#title_id').val();

    var name = $('#contact_name').val();
    var phone = $('#contact_phone').val();
    var email = $('#contact_email').val();
    var message = $('#contact_message').val();
    var cont = 'yes';

    $('#contact_form .required').each(function() {
        if($(this).val() == '') {
            cont = 'no';
            $('<div class="form-error"><i class="fas fa-arrow-up" prefix></i> This is a required field</div>').insertAfter($(this));
            $('#submit_form').html('Send Message <i class="far fa-paper-plane ml-1"></i>');
            $(this).focus().addClass('form-error-input');
            var os = $(this).offset();
            if($(window).width() > 790){
                extra = 300;
            } else {
                extra = 200;
            }
            $(window).scrollTop(os.top - extra);
            return false;
        }
    });
    if(cont == 'yes') {
        if(!email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
            cont = 'no';
            $('<div class="form-error"><i class="fas fa-arrow-up" prefix></i> Please eneter a valid email address</div>').insertAfter($('#contact_email'));
            $('#submit_form').html('Send Message <i class="fas fa-paper-plane-o ml-1"></i>');
            $('#contact_email').focus();
            return false;
        }
    }
    if(cont == 'yes') {
        $.ajax({
         	type: 'POST',
         	url: '/ajax/contact-us/send-message.php',
         	data: { to_id: to_id, name: name, email: email, phone: phone, message: message },
         	success: function() {
                $('[id^=contact]').val('');
                $('#submit_form').html('Send Message <i class="far fa-paper-plane ml-1"></i>');
                $('#contact_form label').removeClass('active');
                $('#successModalContact').modal();
                $('#agent_contact_modal').modal('toggle');

         	}
         });
     }
}


function even_cards() {
    // Make all cards same height
    if($(window).width() > 790){
        var maxHeight = 0;
        $('.card-body').not('.staff').each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        $('.card-body').not('.staff').height(maxHeight);
    }
}
function even_cards_width() {
	if($(window).width() > 500){
        var maxWidth = 0;
        $('.career-benefits').find('.card-body').each(function () {
            if ($(this).width() > maxWidth) {
                maxWidth = $(this).width() + 50;
            }
        });
        $('.career-benefits').find('.card-body').width(maxWidth).css({ 'text-align': 'left' });
    } else {
		$('.career-benefits').find('.card').addClass('w-100');
	}
}

/* Format Phone */
function format_phone(obj) {
	var numbers = obj.value.replace(/\D/g, ''),
		char = {0:'(',3:') ',6:'-'};
	obj.value = '';
	for (var i = 0; i < numbers.length; i++) {
		if(i>13) {
			return false;
		}
		obj.value += (char[i]||'') + numbers[i];

	}
}
if(!document.URL.match(/apply/) && $(window).width() > 600) {
	!function(){function e(){var a=c.createElement("script");a.type="text/javascript",a.async=!0,a.src="https://www.titlecapture.com/tcw/tc-widget.php",a.id="tc_widget_js";var b=c.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}var a=window,c=(a.tclp_Option,document),d=function(){d.c(arguments)};d.q={companyId:605},a.tclp_Option=d,a.attachEvent?a.attachEvent("onload",e):a.addEventListener("load",e,!1)}();
}
