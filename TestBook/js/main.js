 $(document).ready(function() {	
	$(".btx").click(function() {
	$('.formx').fadeIn();	
}); 
	//send request
	$('#form').submit(function() { 
		if (document.form.name.value == '' || document.form.email.value == '' ) {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "ajax/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});

//close popup "thanks"
$('.js-close-thank-you').click(function() { // close for clik on cross
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { //close for clik out of popup
    var popup = $('.popup');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-thank-you').fadeOut();
    }
});

//close popup form
$('.js-close-formix').click(function() { // close for clik on cross
	$('.formx').fadeOut();
});

$(document).mouseup(function (e) { //close for clik out of popup
    var popup = $('.popup');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.formx').fadeOut();
    }
});


