$(document).ready(function(){
	$('#password2').keyup(function(){
		var $val1 = $('#password1').val();
		var $valthis = $(this).val();
			if($val1 == "" && $valthis == "") {
				$('.p_error, .p_success').hide();
				$('.p_missing').show();
			}
			else if($val1 != $valthis) {
				$('.p_error').show();
				$('.p_success').hide();
			} else {
				$('.p_error').hide();
				$('.p_success').show();
			}
	});
	$('#password1').keyup(function(){
		var $val2 = $('#password2').val();
		var $valthis = $(this).val();
		if($valthis == "" && $val2 == "") {
			$('.p_error, .p_success').hide();
			$('.p_missing').show();
		} else {
			$('.p_error, .p_success, .p_missing').hide();
		}

	});
})