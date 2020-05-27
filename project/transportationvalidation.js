function validateName(){
 			var name = document.getElementById('name').value;
 			var nameError = document.getElementById('nameError');
			
 			if(name.trim() == ""){
 				document.getElementById('nameError').innerHTML = 'You must enter your name';
 				return false;
 			}else{
 				nameError.innerHTML = "";
				return true; 
 			}
 		}
		

function validatePhone(){
 			var phone = document.getElementById('phone').value;
 			var phoneError = document.getElementById('phoneError');

 			if( phone.length < 9 || phone.length > 14){
 				phoneError.innerHTML = 'Phone number is not valid';
 				return false;
 			}
 			else{
 				phoneError.innerHTML = '';
 				return true;
 			}
 		}
		
		
function validateLocation(){
 			var Location = document.getElementById('Location').value;
 			var locationError = document.getElementById('locationError');
			
 			if(Location.trim() == ""){
 				document.getElementById('locationError').innerHTML = 'You must enter your location';
 				return false;
 			}else{
 				locationError.innerHTML = "";
				return true; 
 			}
 		}
				
		
function validateId(){
 			var id = document.getElementById('id').value;
 			var idError = document.getElementById('idError');
			
 			if(id.trim() == ""){
 				document.getElementById('idError').innerHTML = 'You must enter patient Id';
 				return false;
 			}else{
 				idError.innerHTML = "";
				return true; 
 			}
 		}
				
		
function validate(){
 			validateName();
 			validatePhone();
 			validateLocation();
 			validateId();
 			
 			if(validateName() && validatePhone() && validateLocation() && validateId() )
 			{
 				return true;
 			}
 			else
 			{
 				return false;
 			}
 		}

