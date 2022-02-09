 
$(document).ready(function(){
 
	$('#save').on('click', function(){
            var form_data = new FormData(myForm);
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var address = $('#address').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();
            var city = $("#city").val();
            var file = $("#file").val();
            var submit = $("#save").val();
			var gender = $("input[class='gender']:checked").val();
            var hobby = $("input[class='checkbox']:checked").val();
            var flag = 0;
            var regxfname = /^[A-Za-z]+$/;
            var regxlname = /^[A-Za-z]+$/;
            var regxemail = /^[a-zA-Z0-9_\.\-]+\@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4}$/;
            form_data.append("save", submit);
            // var file_data = $("#file").prop("files")[0];
            // // var ext = file.split('.').pop().toLowerCase();
            // var ext = file.substring(file.lastIndexOf('.')+1);
            // var validext = ["jpg","jpeg"];
            // var result = validext.includes(ext);			
           

            if(firstname == ""){
                $("#fname_er").html("Please enter your first name");
                $("#fname_er").show();
                flag++;
            }
            else if(regxfname.test(firstname) == 0){
                $("#fname_er").html("Only alphabets are allow in firstname ");
                $("#fname_er").show();
                flag++;
            }
            else{
                $("#fname_er").hide();
            }

            if(lastname == ""){
                $("#lname_er").html("Please enter your last name");
                $("#lname_er").show();
                flag++;
            }
            else if(regxlname.test(lastname) == 0){
                $("#lname_er").html("Only alphabets are allow in lastname ");
                $("#lname_er").show();
                flag++;
            }
            else{
                $("#lname_er").hide();
            }

            if(email == ""){
                $("#email_er").html("Please enter valid email");
                $("#email_er").show();
                flag++;
            }
            else if (regxemail.test(email) == 0){
                $("#email_er").html("Should include '@' and '.' in Email or Not contain whitespace");
                $("email_er").show();
                flag++;
            }
            else{
                $("#email_er").hide();
            }

            if(password == ""){
                $("#password_er").html("Please enter password");
                $("#password_er").show();
                flag++;
            }
            else{
                $("#password_er").hide();
            }

            if(cpassword == ""){
                $("#cpassword_er").html("Please enter confirm password");
                $("#cpassword_er").show();
                flag++;
            }
            else if(cpassword != password){
                $("#cpassword_er").html("Password and confirm password does not match");
                $("#cpassword_er").show();
                flag++;
            }
            else{
                $("#cpassword_er").hide();
            }

            if(address == ""){
                $("#address_er").html("Please enter your current address");
                $("#address_er").show();
                flag++;
            }
            else{
                $("#address_er").hide();
            }   

            if(!gender){
                $("#gender_er").html("Please select gender");
                $("#gender_er").show();
                flag++;
            }
            else{
                $("#gender_er").hide();
            }

            if(city == "select a city"){
                $("#city_er").html("Please select city");
                $("#city_er").show();
                flag++;
            }
            else{
                $("#city_er").hide();
            }

            if(!hobby){
                $("#hobby_er").html("Please select at least one hobby");
                $("#hobby_er").show();
                flag++;
            }
            else{
                $("#hobby_er").hide();
            }

            if(file == ""){
                $("#file_er").html("Please select resume file");
                $("#file_er").show();
                flag++;
            }
            else{
                $("#file_er").hide();
            }            
          
			
            if(flag>0){
                return false;
            }
            else{
                $.ajax({
				url: 'connect.php',
				type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
				success: function() {
                    $("#finall").html("Registration successfull");
                }
            
			});
            
        }
		
 
	});	
	
});