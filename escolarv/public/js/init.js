$(function(){
	$('#estado').change(function(){
		$.ajax({
			url:'/getMunicipios',
			type:'GET',
			data: {'id': $(this).val()},
			beforeSend: function() {
				//loadingShowHide();
			},
			complete: function() {
				//loadingShowHide();
			},
			success: function(datos){
				datos = JSON.parse(datos);
				$("#municipio").empty('<option></option>');
				for(var i = 0; i < datos.length; i++){
					$("#municipio").append('<option value="' + datos[i].id + '">' + datos[i].Nombre + '</option>');
				}
			}
		});
	});
});