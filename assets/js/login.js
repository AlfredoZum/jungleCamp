

$('#btnLogin').on('click', function(){
	
	login();
	
});

function login(){
	
	var url = URL_BASE + "login/login";
	
	$(this).attr('disabled','disabled');
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			email: $('#txtEmailUser').val(), 
			password: $('#txtPasswordUser').val()
		},
		success: function(data){
			if(data.success == true){
				var url = URL_BASE + "admin";
				window.location = url;
			}else{
				alert(data.message)
			}
			$('#btnLogin').removeAttr('disabled');
		},
		error: function(data){
			alert("Error al conectarse vuelva a intentarlo");
			$('#btnLogin').removeAttr('disabled');
		}
	});
	
	
}