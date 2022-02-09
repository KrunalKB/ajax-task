<?php 
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

	$conn = mysqli_connect("localhost","root","","data");
 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];
	$submit = $_POST['save'];
	$hobby = $_POST['hobby'];
    $a = implode(',',$hobby);
	$emailme = $_POST['emailme'];
    $filename = $_FILES['file']['name'];
    $path = "upload/".$filename;
    $name = pathinfo($filename,PATHINFO_FILENAME);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
   
    if(file_exists('upload/'.$name.".".$extension))
    {           
        $name = $name.'-'.rand(10,1000);
        $filename = $name.".".$extension;
        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$filename);
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$filename);
    }
   

	$hash = password_hash($password , PASSWORD_DEFAULT);	
	$hash2 = password_hash($cpassword , PASSWORD_DEFAULT);
    
	$qry = "INSERT INTO info(firstname,lastname,email,address,password,cpassword,gender,city,hobby,img_name)
	 values('$firstname','$lastname','$email','$address','$hash','$hash2','$gender','$city','$a','$filename')";

	$q=mysqli_query($conn,$qry);
     
    
    // using phpmailer
    use PHPMailer\PHPMailer\PHPMailer;
    $message = '';


    if ($_POST["save"]) 
    {
        
     $message = '
		<h3 align="center">User Details</h3>
		<table border="3" width="100%" cellpadding="6" cellspacing="6">
			<tr>
				<td><b>1) First name:</b></td>
				<td>' . $firstname . '</td>
			</tr>
            <tr>
				<td><b>2) Last name:</b></td>
				<td>' . $lastname . '</td>
			</tr>
            <tr>
				<td><b>3) Email Address:</b></td>
				<td>' . $email . '</td>
			</tr>
        
			<tr>
				<td><b>4) Address:</b></td>
				<td>' . $address . '</td>
			</tr>
			<tr>
				<td><b>5) Gender:</b></td>
				<td>' . $gender. '</td>
			</tr>
            <tr>
				<td><b>6) City:</b></td>
				<td>' . $city . '</td>
			</tr>
			<tr>
				<td><b>7) Hobby:</b></td>
				<td>' . $a . '</td>
			</tr>
			
			
			
		</table>
	    ';

        $mail = new PHPMailer;
        $mail->IsSMTP();    // send message using SMTP                           

        
        // ADMIN DETAILS 
        $mail->Host = 'smtp.gmail.com';        
        $mail->Port = '465';                               
        $mail->SMTPAuth = true;                           
        $mail->Username = 'krunalkb11@gmail.com';                    
        $mail->Password = 'Web_developer';                   
        $mail->SMTPSecure = 'ssl';                            
        $mail->AddAddress('krunalkb11@gmail.com', 'admin');        
        
        $mail->WordWrap = 50;                           
        $mail->IsHTML(true);                            
        $mail->AddAttachment($path);                    
        $mail->Subject = 'User Detail';               
        $mail->Body = $message;      
        
        if ($mail->Send())                                
        {
            $message = ' Successfully Sent';
        } 
        else {
            $message = 'Failure';
        }
    }


    if ($_POST["emailme"]=="checked") 
    {
        $mailme = $_POST["email"];
        $message = '
            <h2>Hello! <span style="color:red;">'.$_POST["firstname"].'</span></h2>
            <h2>Thank you for register. Your details are successfully submitted.</h2>
        ';


        $mail = new PHPMailer;
        $mail->IsSMTP();    // send message using SMTP                           

        
        // ADMIN DETAILS 
        $mail->Host = 'smtp.gmail.com';        
        $mail->Port = '465';                               
        $mail->SMTPAuth = true;                           
        $mail->Username = 'krunalkb11@gmail.com';                    
        $mail->Password = 'Web_developer';                   
        $mail->SMTPSecure = 'ssl';                            
        $mail->AddAddress( $mailme, 'admin');        
        
        $mail->WordWrap = 50;                           
        $mail->IsHTML(true);                            
        $mail->Subject = 'Confirmation Mail';               
        $mail->Body = $message;      
        
        if ($mail->Send())                                
        {
            $message = 'Successfully Sent';
        } 
        else {
            $message = 'Failure';
        }
    }

        if(!$q)
        {
            echo "No connection!";
        }

       
?>

