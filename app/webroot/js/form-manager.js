var FormManager = (function(){
	var currentSection = 'intro';
	function formed(e){
		e.preventDefault();
		// $.ajax({
		// 	url: '/form_contacts/submit_ajax',
		// 	type: 'POST',
		// 	data: $( this ).serialize(),
		// 	dataType: 'json',
		// 	success: function(e){
		// 		if(e.success){
		// 			$('#form-form').hide();
		// 			$('#form-expect').show();
		// 		}else{
		// 			alert(e.message);
		// 		}
		// 	},
		// });	
		$.ajax({
			url: 'http://mrmyagimelbourne.createsend.com/t/i/s/naiy/?callback=?',
			type: 'POST',
			data: {'cm-naiy-naiy': $( '#fieldEmail' ).val() },
			dataType: 'json',
			success: function(e){
				$('#form-form').hide();
				$('#form-expect').show();
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