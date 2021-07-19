function checkPasswords(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Serial Numbers are mismatched!");
		return false;
	} 
	else{
		alert("Serial Numbers matched!");
		return true;
	}
}