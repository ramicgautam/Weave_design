function validateUname() {
	var x=document.getElementById('uname');
	if (x.value.length==0) {
		document.getElementById('errorUname').innerText="username field is empty";
		x.focus();
		return false;
		disableSubmit();
	}
}
function validatePass(){
	var p=document.getElementById('pass');
	if(p.value.length==0) {
		document.getElementById('errorPass').innerText="Password field is empty";
		document.getElementById("errorPass").style.display="block";
		p.focus();
		return false;
	}
}