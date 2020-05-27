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
		
			

		
		
function validateAmount(){
 			var amount = document.getElementById('amount').value;
 			var amountError = document.getElementById('amountError');
			
 			if(amount.trim() == ""){
 				document.getElementById('amountError').innerHTML = 'You must enter amount';
 				return false;
 			}else{
 				amountError.innerHTML = "";
				return true; 
 			}
 		}
		
		
function validateDate(){
 			var date = document.getElementById('date').value;
 			var dateError = document.getElementById('dateError');
			
 			if(date.trim() == ""){
 				document.getElementById('dateError').innerHTML = 'You must enter date';
 				return false;
 			}else{
 				dateError.innerHTML = "";
				return true; 
 			}
 		}
		
		
function validateTime(){
 			var time = document.getElementById('time').value;
 			var timeError = document.getElementById('timeError');
			
 			if(time.trim() == ""){
 				document.getElementById('timeError').innerHTML = 'You must enter time';
 				return false;
 			}else{
 				timeError.innerHTML = "";
				return true; 
 			}
 		}
		
		
function validateHospital(){
 			var hospital = document.getElementById('hospital').value;
 			var hospitalError = document.getElementById('hospitalError');
			
 			if(hospital.trim() == ""){
 				document.getElementById('hospitalError').innerHTML = 'You must enter Hospital';
 				return false;
 			}else{
 				hospitalError.innerHTML = "";
				return true; 
 			}
 		}
		
		
		
function validate(){
 			validateName();
 			validatePhone();
			validateAmount();
			validateTime();
			validateDate();
			validateHospital();
 			
 			if(validateName() && validatePhone() && validateAmount() && validateTime() && validateDate() && validateHospital()){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}