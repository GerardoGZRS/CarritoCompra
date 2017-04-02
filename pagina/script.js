
var peticionHTTP;

function startXMLHttp() {
    if(window.XMLHttpRequest){
        peticionHTTP = new XMLHttpRequest();
    }else{
        peticionHTTP = ActiveXObject("Microsoft.XMLHTTP");
    }
}

function getIdTag(id){
	return document.getElementById(id);
}

window.addEventListener('load', function(){
	startXMLHttp();
	estados();
	
});

getIdTag('Estado').addEventListener('change', municipio);
getIdTag('Municipio').addEventListener('change', colonia);
getIdTag('Colonia').addEventListener('change', postal);

function estados(){
	peticionHTTP.open("POST","Select.class.php",true); 
	peticionHTTP.onreadystatechange = function() {
	 	if (peticionHTTP.readyState == 4 && peticionHTTP.status == 200) {	 
	 	getIdTag('Estado').innerHTML = peticionHTTP.responseText;
	 	}
	};
	peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	peticionHTTP.send("btn=estado");
}

function municipio(){
	resetEstado();
	var id = getIdTag('Estado').value;
	peticionHTTP.open("POST","Select.class.php",true); 
	peticionHTTP.onreadystatechange = function() {
	 	if (peticionHTTP.readyState == 4 && peticionHTTP.status == 200) {	 
	 		getIdTag('Municipio').innerHTML = peticionHTTP.responseText;
	 	}
	};
	peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	peticionHTTP.send("btn=municipio&idEstado="+id);
}

function colonia(){
	resetMunicipio();
	var id = getIdTag('Municipio').value;
	
	peticionHTTP.open("POST","Select.class.php",true); 
	peticionHTTP.onreadystatechange = function() {
	 	if (peticionHTTP.readyState == 4 && peticionHTTP.status == 200) {	
	 		getIdTag('Colonia').innerHTML = peticionHTTP.responseText;
	 	}
	};
	peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	peticionHTTP.send("btn=colonia&idMunicipio="+id);
}

function postal(){
	resetColonia();
	var id = getIdTag('Colonia').value;
	if(id != 0){
		peticionHTTP.open("POST","Select.class.php",true); 
		peticionHTTP.onreadystatechange = function() {
		 	if (peticionHTTP.readyState == 4 && peticionHTTP.status == 200) {
		 		getIdTag('Cp').value = peticionHTTP.responseText;
		 	}
		};
		peticionHTTP.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		peticionHTTP.send("btn=postal&idColonia="+id);
	}else{
		getIdTag('Cp').value = "no hay colonia seleccionada";
	}
}


function resetEstado(){
	getIdTag('Municipio').innerHTML = 0;
	getIdTag('Colonia').innerHTML = '<option value="0">Selecionar colonia</option>';
	getIdTag('Cp').value = "";
}

function resetMunicipio(){
	getIdTag('Colonia').innerHTML = '<option value="0">Selecionar colonia</option>';
	getIdTag('Cp').value = "";
}

function resetColonia(){
	getIdTag('Cp').value = "";
}

