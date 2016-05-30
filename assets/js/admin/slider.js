

$('.btnDeleteSlider').on('click',function(){ showDeleteSlider(this); });


$('#addSlider').on('click', function(){ showFormSlider(0);  })

function showDeleteSlider(selector){
	
	alertify.confirm("¿Deseas eliminar la imagen?", function (e) {
		if (e) {
			deleteSlider(selector)
		} else {
			//alertify.error("You've clicked Cancel");
		}
	});
	
	//
}

function deleteSlider(selector){
	
	//alert($(selector).attr("attr_iden"));
	//alert($(selector).attr("attr_name"));
	var id = $(selector).attr("attr_iden");
	var url = URL_BASE + "admin/slider/deleteSlider";
	
	$('.loading').show();
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			id: id
		},
		success: function(data){
			
			alertify.success("Imagen eliminada");
			createSlider(data.items)
			$('.loading').hide();
		},
		error: function(data){
			$('.loading').hide();
			alertify.error("Error al eliminar la imagen");
		}
	});
	
}

function createSlider(items){
	$('#content-slider').empty();
	
	for(i=0;i<items.length;i++){
		var item = items[i];
		$('#content-slider').append(
			'<div class="col-md-6">' +
				'<div class="panel-slider">' +
					'<div class="panel-sliderImg">' +
						'<img class="imgSlider"  src="' + URL_BASE + 'assets/images/slider/' + item.name + '" />' +
					'</div>' +
					'<div class="panel-sliderInfo">' +
						'<div class="col-md-6">' +
							'<button attr_iden="' + item.id + '"  attr_name="' + item.name + '" class="btnDeleteSlider btn btn-danger  btn-panel btn-lg btn-block" >Eliminar</button>' +
						'</div>' +
						'<div class="col-md-6">' +
							'<button attr_iden="' + item.id + '"  attr_name="' + item.name + '" class="btnEditSlider btn btn-primary btn-panel btn-lg btn-block" >Editar</button>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>'
		);
	}
	$('.btnDeleteSlider').off();
	$('.btnDeleteSlider').on('click',function(){ showDeleteSlider(this); });
}

function showFormSlider(id){
	$('.content-slider').hide();
}