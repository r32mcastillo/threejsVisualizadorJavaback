/*
INFO
Un elemento con mayor orden de pila siempre está delante de un elemento con un orden de pila inferior.

Code mirror-----------------------------------tiene un z-index = 9;
.EditorTooltipMarcatexto:hover:after----------tiene un z-index = 10;
#detalles-------------------------------------tiene un z-index = 14;
Data.gui--------------------------------------tiene un z-index = 18;
*/

function *appCreateGenerador(arr){ for(let i of arr){ yield i; } }
function *GenerateID   (){var i = 0;while(true){yield i;i++;}}

var Main_generateID      = GenerateID();
var dibujando_generateID = GenerateID();
var routes = {
    'api-info'           : '../api/info.php',
    'api-set_codigo'     : '../api/codigoFuente/set.php',
    'api-get_codigo'     : '../api/codigoFuente/get.php',
    'api'                : '../index.php',
    'api-proyectos'      : '../proyectos.php',
    'api-textruras'      : '../api/texturas/textura.php'
};


function setup_EEDOCDG(){
	setup_EstilosPanelDetalles();
	setup_PestanasPanelDetalles();
	setup_EventosMouse();
}
function setup_EventosMouse(){/* Desactivar OrbilControl de THREE.js */
	/*	mousedown
		Es lanzado cuando el btn del mouse esta presionado
		es usado para desactivar el OrbirControl de THREE.js en 
		combinacion con "mouseover" y "mouseout" para "#MyControlesDataGui"
		para poder cambiar el tema del Editor de texto desde los controles
	*/
	$("body").mouseup(function()  { Main.mousedown=false; }); 
    $("body").mousedown(function(){ Main.mousedown=true;  });
	$("#MyControlesDataGui").mouseover(function(){ if(!Main.mousedown) MyThreeJS.disableCameraControl();  });
    $("#MyControlesDataGui").mouseout(function() { if( Main.ejecutado)MyThreeJS.enableCameraControl();    });

	$("#detalles-content").mouseover(function()  { MyThreeJS.disableCameraControl();                      });
    $("#detalles-content").mouseout(function()   { if(Main.ejecutado)MyThreeJS.enableCameraControl();     });	
}
function setup_PestanasPanelDetalles(){

	$("#detalles-tabs").tabs();
}
function setup_EstilosPanelDetalles(){	
    //http://jsfiddle.net/Ka7P2/732/
    let resizable = {
    	handles: {
            'n': '#handle'
        },
        start: function(event, ui) {
            MyThreeJS.disableCameraControl();
        },
        stop: function(event, ui) {
            if(Main.ejecutado)MyThreeJS.enableCameraControl();            
        },
        resize: function( event, ui ){
        	let height_detallesMenu = ui.size.height - parseInt($("#detalles-menu").css('height').replace("px", ""))-10;
        	$('#detalles-content').css({'height':`${height_detallesMenu}px`});

        }
    };
	$('#detalles').resizable(resizable);
}
function helper_detalles(){
    if(as_arbol)
        as_imprimirArbol(as_arbol);
    if(R01.lstElements)
        pintarArbolDeLlamadas();
    if(R01._lstIDsMetodos)
        pintarArbol("representacionarreglo1", R01._lstIDsMetodos, ["id","descripcion"]);
    if(Main.lstPasos)
        pintarArbol("representacionarreglo2", Main.lstPasos, ["id","descripcion"]);  
}

function getQueryVariable(variable) {
    //https://css-tricks.com/snippets/javascript/get-url-variables/
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0;i<vars.length;i++) {
           var pair = vars[i].split("=");
           if(pair[0] == variable){return pair[1];}
   }
   return(false);
}
function getCodigoFuente(){
    var id            = getQueryVariable('n');
    if(id != false){
        var req = new XMLHttpRequest();
        req.open("GET",  "../controladores/getcodigofuente.php?id="+id, true);
        req.addEventListener("load", function() {
        if (req.status >= 200 && req.status < 400) {
            var codigoFuente       = atob(req.responseText);   //decifrar ;
            javaEditor_setText(codigoFuente);
        } else {
        }
        });
        req.addEventListener("error", function(){
            javaEditor_setText(ejemploDeCodigo_01);
        });
        req.send(null);
    }else{
    }
        //https://developer.mozilla.org/en-US/docs/Web/API/WindowBase64/Base64_encoding_and_decoding
        //ejemploDeCodigo_09 = btoa(ejemploDeCodigo_09); // cifrar
}


/*
 * Funciones para comunicarse con el sistema 
 * que gestiona a los usuarios y proyectos 
 */
function _GET(variable) {
    //https://css-tricks.com/snippets/javascript/get-url-variables/
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0;i<vars.length;i++) {
           var pair = vars[i].split("=");
           if(pair[0] == variable){return pair[1];}
   }
   return(false);
}
function getApiInfo(){
    // https://openclassrooms.com/courses/crea-paginas-webs-interactivas-con-javascript/envia-peticiones-ajax-al-servidor
    var id  = _GET('n');
    var req = new XMLHttpRequest();
    req.open("GET",`${routes['api-info']}?id_proyecto=${id}`, true);
    req.addEventListener("load", function() {
    if (req.status >= 200 && req.status < 400) {
        res = JSON.parse(this.responseText);
        ApiInfo.llamada_terminada = true;
        ApiInfo.existe            = true;
        ApiInfo.logueado          = res.logueado;
        ApiInfo.id_proyecto       = res.id_proyecto;
        ApiInfo.user_name         = res.user_name;
        ApiInfo.permiso_edicion   = res.permiso_edicion;
        
    } else {
        ApiInfo.llamada_terminada = true;
        //console.error(req.status + " " + req.statusText);
    }
    });
    req.addEventListener("error", function(){
        ApiInfo.llamada_terminada = true;
        //console.error("Error de red");
    });
    req.send(null);
}
function getCodigoFuente(){
    var id            = _GET('n');
    
    if(id != false){
        var req = new XMLHttpRequest();
        req.open("GET", `${routes['api-get_codigo']}?id=${id}`, true);
        req.addEventListener("load", function() {
        if (req.status >= 200 && req.status < 400) {
            codigoFuente = JSON.parse(this.responseText);
            if(codigoFuente.status){
                javaEditor_setText(atob(codigoFuente.codigo));
            }
        } else {
            //console.error(req.status + " " + req.statusText);
        }
        });
        req.addEventListener("error", function(){
            //console.error("Error de red");
        });
        req.send(null);
    }else{
        javaEditor_setText(ejemploDeCodigo_01);
    }
        //https://developer.mozilla.org/en-US/docs/Web/API/WindowBase64/Base64_encoding_and_decoding
        //ejemploDeCodigo_09 = btoa(ejemploDeCodigo_09); // cifrar
}
function setCodigoFuente(){

    var codigo = javaEditor_getText();
    codigo = btoa(codigo);// cifrar
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("El proyecto ha sido guardado.");
        }
    };
    xhttp.open("POST", routes['api-set_codigo'], true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


    var id_proyecto = ApiInfo.id_proyecto;
    xhttp.send(`id_proyecto=${id_proyecto}&&codigo=${codigo}`);
}