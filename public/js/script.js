$(document).ready(function() {

	$('[data-toggle="tooltip"]').tooltip();  
	
	$('a[data-modal="user-add"]').bind('click', function(e){
		// Cancela ação do href
		e.preventDefault();

		// Pega o valor do atributo href
		var href = $(this).attr('href');

		$.ajax({
			url: href,
			success: function(html){
				$("body").append(html);
				$("#defaultModalUser").modal({shown:true});
			}
		});
		//$('#user-add').modal({shown:true});
	});	
});