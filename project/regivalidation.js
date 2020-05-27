 

function valName(){
 			var valName = document.getElementById('name').value;
 			var nameError = document.getElementById('nameError');
			
 			if(valName.trim() == ""){
 				document.getElementById('nameError').innerHTML = 'you must enter username';
 				return false;
 			}
 			else if(valName.length <4){
 				nameError.innerHTML = "at least 4 char required";
 			}
 			else{
 				nameError.innerHTML = "";
				return true; 
 			}
 		}

 			
 function valEmail(){
 			var valEmail = document.getElementById('email').value;
 			var emailError = document.getElementById('emailError');
			
 			if(valEmail.trim() !== ""){
 				var parts = valEmail.split("@");
        		var dot = parts[1].indexOf(".");
				
        		if(dot == -1){
        			emailError.innerHTML = 'email address not valid';
 					return false;
        		}
        		else{
	 				emailError.innerHTML = '';
	 				return true;
	 			}	 							
 			}
 			else if(valEmail.trim() == ""){
        			emailError.innerHTML =	"you must enter email";
 					return false;
        		}
 			else{
 				emailError.innerHTML = '';
 				return true;
 			}
 		}

function valPhone(){
 			var valPhone = document.getElementById('phone').value;
 			var phoneError = document.getElementById('phoneError');

 			if( valPhone.length < 8 || valPhone.length > 14){
 				phoneError.innerHTML = 'phone number is not valid';
 				return false;
 			}
 			else{
 				phoneError.innerHTML = '';
 				return true;
 			}
 		}
		
		
 function valPass(){
 			var valPass1 = document.getElementById('pass1').value;
 			var valPass2 = document.getElementById('pass2').value;
 			var passError1 = document.getElementById('passError1');
 			var passError2 = document.getElementById('passError2');
			
 			if(valPass1.length < 6){
 				passError1.innerHTML = "at least 6 charecter required";
 				return false;
 			}
 			if(valPass1 !== valPass2 && valPass1.length < 6){
				passError2.innerHTML = "password not matched";
 				return false;
 			}
 			if(valPass1 !== valPass2 && valPass1.length >= 6){
 				passError1.innerHTML = "";
				passError2.innerHTML = "password not matched";
 				return false;
 			}
 			else{
				passError1.innerHTML = "";
				passError2.innerHTML = "";
 				return true;
 			}
 		}
 		
 		
 function valAge(){
			var valAge = document.getElementById('age').value;
 			var ageError = document.getElementById('ageError'); 
 			if(valAge.trim() == ""){
 				ageError.innerHTML = "you must enter age in years";
 				return false;
 			}
 			return true;			
 		}


 function validate(){
 			valName();
 			valEmail();
 			valPhone();
 			valPass();
 			valAge();
			
 			if(valName() && valEmail() && valPhone() && valPass() && valAge()){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}

