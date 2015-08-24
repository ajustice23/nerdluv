


$(function(){
    var requiredCheckboxes = $(':checkbox[required]');

	requiredCheckboxes.change(function(){
    	if(requiredCheckboxes.is(':checked')) {
        	requiredCheckboxes.removeAttr('required');
    	}
   		else {
    	    requiredCheckboxes.attr('required', 'required');
   		}
    });


	$(document).ready(function() {
    	$("#signUpSubmit").click(function(){
        	checkMatch();
        	accountAlready();

        	
    	}); 
	});
    
    function checkMatch(){
    	var pass1 = document.getElementById("yourPass1");
    	var pass2 = document.getElementById("yourPass2");
    	
    	if(pass1.value!=pass2.value){
    		alert("The passwords do not match.");
    		pass1.value = pass1.defaultValue;
    		pass2.value = pass2.defaultValue;
    	}
    }


});