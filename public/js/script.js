$(document).ready(function() {

	$('[data-toggle="tooltip"]').tooltip();  

	/*$('a[data-modal="user-add"]').bind('click', function(e){
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
	});	*/
	$('a[data-modal]').bind('click', function(e) {
		e.preventDefault();

		var nameModal = $(this).attr('data-modal');
		var link = $(this).attr('href');
		$.ajax({
			url: link,
			success: function(data) {
				$("#modal-area").html(data);
				$("#"+nameModal).modal({shown:true});
			}
		});
	});
	/*

	$('a[data-modal]').bind('click', function(e) {
		e.preventDefault();

		var acao = $(this).attr('data-modal');
		var link = $(this).attr('href');

		$.ajax({
			url: link,
			success: function(html) {
				//alert(link);
				
				$("body").append(html);
				$("#modalUserExcluir").modal({shown:true});
			}
		});
	});*/


});