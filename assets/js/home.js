/**
* @fileoverview funcionalidad del screen home
*
* @author Alfredo Zum
* @version 0.1
* @copyright OrvelSoft 2017
*/

$('#aaa').click(function(){
	console.log(23232)
	$('#myModal').modal("show")
});


$('#myModal').on('shown.bs.modal', function () {
  console.log("asdsda")
})



$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

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