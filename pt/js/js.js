$(document).ready(function(){

    $("#form_registrarse").submit(function(event){
    	event.preventDefault();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				json_respuesta = JSON.parse(this.responseText);
				if(! json_respuesta.ok){
					$('#alert_registro').html('<div class="alert alert-danger " role="alert">'+json_respuesta.msn+'</div>');
				}else{
					window.location="proyectos.php";
				}
			}
		};
		xhttp.open("POST", this.action, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send($(this).serialize());
    });




    $("#form_login").submit(function(event){
    	event.preventDefault();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				json_respuesta = JSON.parse(this.responseText);
				if(! json_respuesta.ok){
					$('#alert_registro').html('<div class="alert alert-danger " role="alert">'+json_respuesta.msn+'</div>');
				}else{
					window.location="proyectos.php?u="+json_respuesta.usuario;
				}
			}
		};
		xhttp.open("POST", this.action, true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send($(this).serialize());
    });



});
function cancelarnuevoproyecto(usuario){
	window.location="proyectos.php?u="+usuario;
}
