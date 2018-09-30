jQuery(document).ready(function($){
  	$('#idUsuario').change(function(){
			$.get("/api/dropdown", 
				{ option: $(this).val() }, 
				function(data) {
					var livro = $('#livro');
					livro.empty();
					$.each(data, function(index, element) {
			            livro.append("<option value='"+ element.id +"'>" + element.name + "</option>");
			        });
				});
		});
	});