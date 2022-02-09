<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>

    <!--CSS file link -->
    <link rel="stylesheet" type="text/css" href="CSS\index.css" />

    <!--icon link -->
    <link rel="stylesheet" href="icon\css\all.css" />

    <!-- jQuery library  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <!--JS file link -->
    <!-- <script src="JS\validation.js"></script> -->
    <script src="script.js"></script>
  </head>
  <body>
    <?php
      //backend validation
      
      $fname_er=$lname_er=$email_er=$pass_er=$cpass_er=$address_er=$gender_er=$city_er=$hobby_er=$resume_er=$result=NULL;
      
      if(isset($_POST["save"])){
          if ($_POST["firstname"] == "")
        {
          $fname_er= "Please enter first name";
          
        }
        elseif ($_POST["lastname"] == "")
        {
          $lname_er= "Please enter last name";
          
        }
        elseif ($_POST["email"] == "")
        {
          $email_er= "Please enter email";
          
        }
        elseif ($_POST["password"] == "")
        {
          $pass_er= "Please enter password";
          
        }
        elseif ($_POST["cpassword"] == "")
        {
          $cpass_er= "Please enter confirm password";
          
        }
        elseif ($_POST["gender"] == "")
        {
          $gender_er="Please select gender";
          
        }
        elseif ($_POST["city"] == "")
        {
          $city_er="Please select city";
          
        }
        elseif ($_POST["address"] == "")
        {
          $address_er="Please enter address";
          
        }
        elseif ($_POST["hobby"] == "")
        {
          $hobby_er= "Please select any one hobby";
          
        }
        else
        {
          $result= "Hurray! Registration successfull &nbsp; <i class='fas fa-check-square'></i>";
          
        }
      }
    ?>

    <form
      name="myForm"
      id = "myForm"
      method="post"
      enctype="multipart/form-data"
      autocomplete="off"
    >
      
      <h2><u>Registration Form</u></h2>
      <div style="color:blue;text-align:center;font-size:20px;font-weight:bold;" id="finall"><?= $result ?></div>
      <h5 class="field">* indicate mandatory field. </h5> 
      
      <div class="box">
        <label>&nbsp;<i class="fas fa-user"></i>&nbsp;&nbsp;<span class="indicate">*</span>First name:</label>
        <input type="text" name="firstname" id="firstname" class="input" placeholder="Enter your first name:" />
        <div id="fname_er" class="error"></div>
      </div>
      <br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-user"></i>&nbsp;&nbsp;<span class="indicate">*</span>Last name:</label>
        <input type="text" name="lastname" id="lastname" class="input" placeholder="Enter your last name:" />
        <div id="lname_er" class="error"></div>
      </div>
      <br />
 
      <div class="box">
        <label>&nbsp;<i class="fas fa-envelope"></i>&nbsp;&nbsp;<span class="indicate">*</span>Email:</label>
        <input type="text" name="email" id="email" class="input"  placeholder="Enter your valid email (Eg. example12@gmail.com)" />
      <div id="email_er"  class="error"></div>
      </div>
      <br />

     <div class="box">
        <label>&nbsp;<i class="fas fa-key"></i>&nbsp;&nbsp;<span class="indicate">*</span>Password:</label>
        <input type="password" name="password" id="password" class="input" placeholder="Enter minimum 6 characters" />
      <div id="password_er"  class="error"></div>
      </div>
      <br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-lock"></i>&nbsp;&nbsp;<span class="indicate">*</span>Confirm Password:</label>
        <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Confirm your password" />
      </div>
      <input type="checkbox" onclick="myFunction()" id="spass" onclick="return myFunction()" /> Show password
      <div id="cpassword_er"  class="error"></div>
      <br /><br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-address-card"></i>&nbsp;&nbsp;<span class="indicate">*</span>Address:</label>
        <textarea
          name="address"
          id="address"
          cols="58"
          rows="5"
          class="textarea"
          placeholder="Enter your current address"
        ></textarea>
      </div>
      <div id="address_er"  class="error"></div>
      <br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-pen-nib"></i>&nbsp;&nbsp;<span class="indicate">*</span>Gender:</label>
        <div class="form-inline">
          <input
            type="radio"
            name="gender"
            id="gender1"
            value="male"
            class="gender"
          />
          Male
          <input
            type="radio"
            name="gender"
            id="gender2"
            value="female"
            class="gender"
          />
          Female
        </div>
      </div>
      <div id="gender_er"  class="error"></div>
      <br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-city"></i>&nbsp;&nbsp;<span class="indicate">*</span>City:</label>
        <select name="city" id="city">
          <option value="select a city">--Select a city--</option>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Gandhinagar">Gandhinagar</option>
          <option value="Surat">Surat</option>
        </select>
      </div>
      <div id="city_er"  class="error"></div>
      <br />

      <div class="box">
        <label>&nbsp;<i class="fas fa-layer-group"></i>&nbsp;&nbsp;<span class="indicate">*</span>Hobbies:</label>
        <div class="form-inline">
          <input
            type="checkbox"
            name="hobby[]"
            value="dancing"
            id="c1"
            class="checkbox"
          />
          <label for="dancing">dancing</label>
          <input
            type="checkbox"
            name="hobby[]"
            value="singing"
            id="c2"
            class="checkbox"
          />
          <label for="singing">singing</label>
          <input
            type="checkbox"
            name="hobby[]"
            value="reading"
            id="c3"
            class="checkbox"
          />
          <label for="reading">reading</label>
        </div>
      </div>
      <div id="hobby_er"  class="error"></div>
      <br />
      

      <label>&nbsp;<i class="fas fa-file"></i>&nbsp;&nbsp;<span class="indicate">*</span>Select your resume</label>
      <div class="form-inline">
      <input type="file" id="file" name="file" class="file"  />
      </div>
      <div id="file_er"  class="error"></div>
      <br>
      <div class="holder">
        <img src="#" alt="image preview" id="imgpre" class="imgpre" height="150px" width="250px" title="image preview" >
        <!-- <span>image preview</span> -->
      </div>
      
      <div class="checkb">
        <input
          type="checkbox"
          id="check"
          class="check"
          name="emailme"
          value="checked"
        />Email Me
      </div> 
      <br />
      
      
      <button style="height:40px;width:150px;margin-left:145px;background-color:black;color:white;font-size:20px"
       id="save" name="save" value="submit">Submit </button>
    </form>
 
  </body>
 
</html>