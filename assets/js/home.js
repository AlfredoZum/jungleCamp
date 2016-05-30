/**
* @fileoverview funcionalidad del screen home
*
* @author Alfredo Zum
* @version 0.1
* @copyright OrvelSoft 2017
*/

var activityIS = false;
var installationIS = false;

$('#sliderModalGallery').attr('exist',false);
$('#sliderModalGallery2').attr('exist',false)

$('.btnCamp').click(function(){
	
	var url = URL_BASE + "home/getCampById";
	id = $(this).attr('id');
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			
			id: id
		},
		success: function(data){
			if(data.items.length > 0){
				item = data.items[0];
				$('#description').html(item.description);
				$('#observations').html(item.observations);
				var iframe = '<iframe id="videoIframe" width="560" height="315" src="' + item.video + '" frameborder="0" allowfullscreen></iframe>';
				$('#video').html(iframe);
				
				iframe
				$('#myModal').modal("show");
			}
			
		},
		error: function(data){
			alert("Error al conectarse vuelva a intentarlo");
		}
	});
	
	//
});


$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#activity').click(function(){
	
	var url = URL_BASE + "home/getActivity";
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			id:0
		},
		success: function(data){
			if(data.items.length > 0){
				
				if($('#sliderModalGallery').attr('exist') == "false"){
					$('#sliderModalGallery').empty();
					for(i=0;i<data.items.length;i++){
					
						item = data.items[i];
				
						$('#sliderModalGallery').append(
							'<div>' +
								'<img u="image" src2="' + URL_BASE  + 'assets/images/gallery/activity/' + item.name + '" />' +
							'</div>'
						);
					
					}
					sliderModal();
					$('#sliderModalGallery').attr('exist',true) ;
				}
				
				$('#modalSlider').modal("show");
			}
		},
		error: function(data){
			alert("Error al conectarse vuelva a intentarlo");
		}
	});
	
	
	//$('#modalSlider').modal("show")
});


$('#installation').click(function(){
	
	var url = URL_BASE + "home/getInstallation";
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			id:0
		},
		success: function(data){
			if(data.items.length > 0){
				if($('#sliderModalGallery2').attr('exist') == "false"){
					$('#sliderModalGallery2').empty();
					for(i=0;i<data.items.length;i++){
					
						item = data.items[i];
				
						$('#sliderModalGallery2').append(
							'<div>' +
								'<img u="image" src2="' + URL_BASE  + 'assets/images/gallery/installation/' + item.name + '" />' +
							'</div>'
						);
						
					}
					sliderModal2();
					$('#sliderModalGallery2').attr('exist',true)
				}
				$('#modalSlider2').modal("show");
			}
		},
		error: function(data){
			alert("Error al conectarse vuelva a intentarlo");
		}
	});
	
	
	//$('#modalSlider').modal("show")
});


$('.btnMenu').on('click',function(){

	var section = $(this).attr('attr_id');
	
	if(section != "package"){
		if(section == undefined){
			var url = URL_BASE + "home";
			window.location = url;
		}else{
			var posicion = $('#' + section ).position();
			//alert(posicion.top)
			$( document ).scrollTop( posicion.top );
		}
		
	}else{
		var url = URL_BASE + "paquete";
		window.location = url;
	}

});


/**
* @todo funcionalidad del mapa
**/

var map;


function initMap() {
	
	 var myLatLng = {lat: 21.1644155, lng: -86.8708914};
	
	map = new google.maps.Map(document.getElementById('map'), {
		center: myLatLng,
		zoom: 16
	});
	
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Jungle Camp '
	});
}

$(document).ready(function(){
	//initMap();
})