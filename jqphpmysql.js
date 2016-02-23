// JavaScript Document
$(document).ready(function(){

	$("#pais").change(function(){
				var p = $(this).val();
				if(p>0){
					
					$("#ciudades").empty();
					
					$.post("ciudad.php", { idPais: p }, function(data){
               			 $("#ciudades").append(data);
           			 });    
					
				}else{
					$("#ciudades").empty();
					$("#ciudades").append("<option value='0'>Seleccione una Ciudad</option>");
				}
							   
	});

}); 