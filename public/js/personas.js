jQuery(document).ready(function($) {
	personas.init();
});

var personas = {
	init : function(){

		$( "#btnGuardar" ).click(function() {
			personas.save();
		});
	},
	save : function(){

		$.ajax({
			url: url+'/personas/guardar',
			type: 'POST',
			data: new FormData( document.getElementById("frmPersona") ),
			processData: false,
			dataType:'json',
			contentType: false
		}).done(function(response){

			console.log(response);

		}).fail(function(response){

			console.log(response);

		});
	}
}