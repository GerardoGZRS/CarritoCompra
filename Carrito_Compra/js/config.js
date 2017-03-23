
function showService(str) {
	

    if (str=="") {
      document.getElementById("producto").innerHTML="";
      return;
    }
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    	alert(window.XMLHttpRequest);
      xmlhttp=new XMLHttpRequest();
    }
    else {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("producto").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","../contacto/getMunicipio.php?buscarProducto="+str,true);
    xmlhttp.send();
}