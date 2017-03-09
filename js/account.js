function changeUsername () {
	var username = $('#username').val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			$('#abc').html(xmlhttp.responseText);
			console.log(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET","asset/updateAccount.php?username="+username,true);
	xmlhttp.send();
}

function changeEmail () {
	var email = $('#email').val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			$('#abc').html(xmlhttp.responseText);
			console.log(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET","asset/updateAccount.php?email="+email,true);
	xmlhttp.send();
}
function changePassword () {
	var pass1 = $('#pass1').val();
	var pass2 = $('#pass2').val();
	var pass3 = $('#pass3').val();
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			$('#abc').html(xmlhttp.responseText);
			console.log(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET","asset/updateAccount.php?pass1="+pass1+"&pass2="+pass2+"&pass3="+pass3,true);
	xmlhttp.send();
}