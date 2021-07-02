<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moithuti</title>
      <link rel="stylesheet" href="style.css">
    	<link rel="icon" type="image/png" sizes="32x32" href="LOGO.png">
</head>

        <img class="logo" style="height: 100px;" src="LOGO.png" alt="" srcset="">
      
    <div class="hero">
             <div class="form-box">
         <div class="button-box">
             <div id="btn"></div>
               <button type="button" class="toggle-btn" onclick="log()">Log In</button>
             <button type="button" class="toggle-btn" onclick="reg()">Register</button>
         </div>
               <form method="post" form action="login.php" class="input" id="log">
            <label>Email</label>
            <input type="email" class="field" name="email" id="signup_email" placeholder="amangthibedi@moithuti.co.bw" required pattern="(.+@moithuti.co.bw)"
            title="Please enter an email with the Moithuti extension">
          <label>Password</label>
          <input type="password" class="field" name="password_1" id="signup_password" pattern=".{5,10}" required title="5 to 10 characters" placeholder="**********">
               <button type="submit" class="submit">Login</button>
        </form>
		
		
 
				<form method="post" form action="login.php" class="input" id="reg">
            <label>Fullnames</label>
            <input type="text" class="field" name="name" id="fullname"  pattern=".{3,}" required title="min character is 3" placeholder="Amang Thibedi" required>
            <label>Email</label>
            <input type="email" class="field" name="email" id="signup_email" placeholder="amangthibedi@moithuti.co.bw" required pattern="(.+@moithuti.co.bw)" title="Please enter an email with the Moithuti extension">
            <label>Password</label>
            <input type="password" class="field" name="password_1" id="signup_password" pattern=".{5,10}" required title="5 to 10 characters" placeholder="**********">
            <label>Confirm Password</label>
            <input type="password" class="field" name="password_2" id="confirm_password" pattern=".{5,10}" required title="5 to 10 characters" placeholder="**********" > 
		  
   		    <label>Grade</label>
               <select name="grade" class="field">
            <option value="Std 1">Std 1</option>
            <option value="Std 2">Std 2</option>
            <option value="Std 3">Std 3</option>
            <option value="Std 4">Std 4</option>
            <option value="Std 5">Std 5</option>
            <option value="Std 6">Std 6</option>
            <option value="Std 7">Std 7</option>
          </select>
		  
		  <label>Account Type</label>
               <select name="acc_type" class="field">
            <option value="student" >Student</option>
            <option value="lecturer">Lecturer</option>
          </select>
		  <br>
            <button type="submit" class="submit">Register</button>
        </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("log");
        var y = document.getElementById("reg");
        var z = document.getElementById("btn");

        function reg(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "126px";
        }

        function log(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
    
</body>
</html>