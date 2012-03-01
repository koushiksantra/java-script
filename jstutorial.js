function validate()
{
	var uname="koushik";
	var pass="123456";
	var username=document.getElementById("uname").value;
	var password=document.getElementById("pass").value;
	var errors=new Array();
	alert(username.length);
	if(username.length<6){
		errors[0]="must be greater Than 6";
	}
	else if(username.length>15){
		errors[1]="must be less than 15";
	}
	else if(password.length<6){
		errors[2]="must be less than 6";
	}
	else if(password.length>15){
		errors[3]="must be less than 15";
	}
	else{
		lert("This is reallly a sely joke");
	}


	if(errors.length>0){
		alert(errors.length);
				return false;
	}
	else{
		if(username==uname && password==pass){
			alert("Login sucessful");
		
				document.forms[0].submit();
		 
		}
		else{
			alert("You Have Given Wrong Username and Password");
		}
	}
			

}
function settext(id1){
document.getElementById(id1).innerHTML="u have given wrong";
}