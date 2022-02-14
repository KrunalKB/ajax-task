//custom method for only alphabets

$.validator.addMethod("alphabet", function(value, element)
    {
        return this.optional(element) || /^[a-z]+$/i.test(value); 
    }, "Only alphabets are allowed");

// custom method for file size

$.validator.addMethod("file_size",function(value,element){
    const limit = 2*1024*1024;
    const size = element.files[0].size;
    if(size>limit){
        return false;
    }
    return true;
},"File size should be less than 2 mb ");

//custom method for file type

$.validator.addMethod("file_type",function(value,element){
    const type = element.files[0].type;
    if(type!="image/jpg" && type!="image/jpeg" && type!="image/png"){
        $("#imgpre").hide();
        return false;
    }
    return true;
},"File type must be jpg,jpeg,png only");

//custom method for password

$.validator.addMethod("strong",function(value,element){
    return this.optional(element) || /\d/.test(value) && value.length >=5;
},"Your password must be 5 characters long and contain at least one number");
     

$(document).ready(function(){
   // for file preview
    $("#imgpre").hide();
     $("#file").change(function(){
            
            const file = this.files[0];

             if(file){
                $("#file_er").hide();
                let reader = new FileReader();
                reader.onload = function(event){
                console.log(event.target.result);
                $('#imgpre').show().attr('src', event.target.result);
               
            }
            reader.readAsDataURL(file);
         }
    });
    

    // for show password
     $("#spass").click(function(){
  
        if($(this).is(':checked')){
        
            $("#cpassword").attr("type","text");
            $("#password").attr("type","text");
        }
        else{
            $("#cpassword").attr("type","password");
            $("#password").attr("type","password");
        }
 
    });

    //validation
    $("#myForm").validate({
        rules:{
            firstname:{
                required:true,
                alphabet: true
            },
            lastname:{
                required:true,
                alphabet: true
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                strong:true
            },
            cpassword:{
                required:true,
                strong: true,
                equalTo:"#password"
            },
            address:{
                required:true
            },
            gender:{
                required:true
            },
            city:{
                required:true
            },
            "hobby[]":{
                required:true
            },
            file:{
                required:true,
                file_size:true,
                file_type:true
            },

        },
        messages:{
            firstname:{
                required:"Please enter your firstname"
            },
            lastname:{
                required:"Please enter your lastname"
            },
            email:{
                required:"Please enter email address"
            },
            password:{
                required:"Please provide a password",
            },
            cpassword:{
                required:"Please provide a confirm password",
                equalTo: "Confirm password and password does not match "
            },
            address:{
                required:"Please enter your current address"
            },
            gender:{
                required:"Please select gender"
            },
            city:{
                required:"Please select city"
            },
            "hobby[]":{
                required:"Please select at least one hobby"
            },
            file:{
                required:"Please select resume file",
            },
        },

        submitHandler: function(form){

        var form_data = new FormData(form); 
           $.ajax({
                url:'connect.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                success: function(){
                    // $("#finall").html("Hurray! Registration Successful <i class='fas fa-check-square'></i>");
                    swal("Good job!", "Registration Successfull!", "success");
                    $('#myForm')[0].reset();
                }

            }); 
            
            
        }
        
    });

   
    
});


