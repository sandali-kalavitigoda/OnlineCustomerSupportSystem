function checkPasswords(){
	if(document.getElementById("warranty").value != document.getElementById("warranty1").value)
	{
		alert("Serial numbers are missmatched");
		return false;
	}
	else
	{
		alert("Serial numbers are matched");
		return true;
	}
}

	

		
	