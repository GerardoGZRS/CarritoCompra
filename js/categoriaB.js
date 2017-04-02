function soymejor(categoria){
	alert("Hola" + categoria);

}


function loadXMLDoc(categoria)
{
	alert("Hola" + categoria);
var xmlhttp;

var n=categoria;
alert(n);
if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();

}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
	
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;

}
}
xmlhttp.open("POST","../productos/pro.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}