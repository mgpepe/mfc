var FormManager = (function(){
	var currentSection = 'intro';
	function formed(e){
		e.preventDefault();
		$.ajax({
			url: '/formcontacts/submit_ajax',
			type: 'POST',
			data: $( this ).serialize(),
			dataType: 'json',
			success: function(e){
				if(e.success){
					$('#form-form').hide();
					$('#form-expect').show();
				}else{
					alert(e.message);
				}
			},
		});
	}
	return {
		publicvar:null,
		init:function(){
			$(function(){
				$('#cform').submit(formed);
			});
		},
		
	}
}());
FormManager.init();