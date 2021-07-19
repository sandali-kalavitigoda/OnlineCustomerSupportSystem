function loadData(name){
	if(name=="button1"){
	document.getElementById("image1").src="images/lap.jpg";
	document.getElementById("para").innerHTML=" The Techly Company is an Sri Lankan multinational information technology company headquartered Malabe, Sri Lanka, that developed and provided a wide variety of hardware components, as well as software and related services to consumers, small and medium-sized businesses (SMBs) and large enterprises. ";
	}else if(name=="button2"){
		document.getElementById("image1").src="images/printer.jpg";
		document.getElementById("para").innerHTML=" The Techly Company is an Sri Lankan multinational information technology company headquartered Malabe, Sri Lanka, that developed and provided a wide variety of hardware components, as well as software and related services to consumers, small and medium-sized businesses (SMBs) and large enterprises. ";
	}
	else if(name=="button3"){
		document.getElementById("image1").src="images/pc.jpg";
		document.getElementById("para").innerHTML=" The Techly Company is an Sri Lankan multinational information technology company headquartered Malabe, Sri Lanka, that developed and provided a wide variety of hardware components, as well as software and related services to consumers, small and medium-sized businesses (SMBs) and large enterprises. ";
	}
	else{
			alert("Invalid");
		}
}
function PriceLoop(){
	var mobile=["mobile1=700.00", "mobile2=800.00", "mobile3=900.00", "mobile4=4000.00", "mobile5=5000.00", "mobile6=6000.00"];
	var i;
	var length=mobile.length;
	var txt="";
	for(i=0; i<length; i++){
		txt+=mobile[i]+"<br/>";
	}
	document.getElementById("para").innerHTML=txt;
}



