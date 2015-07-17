<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title> Login Form</title>
    
    
     <link rel="stylesheet" href="css/style1.css">
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/signup.css">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> ></script> 
       <script src="js/signup.js"></script>
  </head>

  <body>
   
    <script>
 
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1450668335251366',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>






    <div class="body"></div>
		<doiv class="grad"></div>
		<div class="header">
			<div><span>ResumeMaker</span></div>
		</div>
		<br>
		<form class="login"  method="post" action="loginaction.php">  <!--     script for the  login page  -->   
 				<input type="text" placeholder="username" name="user"><br>
				<input type="password" id="password" placeholder="password" name="password"><br>
				
				<button type="submit"  id="button">Login</button>
		</form>

     <p id="newP">SignUp here ! </p>
     <button type="submit"  id="signUp">signUp</button>       
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src="js/showsignup.js"></script>

     


     <dialog id="signDiolog" class="dialog">    <!--     script for the  signup page  -->   
     <div class="login-card">
     <h1>SignUP</h1><br>
      <form method="post"  action="signupaction.php">
      <input type="text" name="username1" placeholder="Username" required>
      <input type="email" name="email" autocomplete="on" placeholder="email-id" required><br>
      <input type="password" name="pass" id="pass" placeholder="Password" required>
      <input type="password" name="pass1"  id="pass1" placeholder="re-enter password" required>
     
      <button type="submit" name="button1" class="login login-submit"  id="button1">signUp</button>



     </form>
     <button type="submit" name="close" id="close">close</button>
     </div> 

     </dialog>



 
<div 
id="fbLike"
class="fb-like" 
data-href="https://www.facebook.com/rahulgoyal031" 
data-width="140" 
data-layout="standard" 
data-action="like" 
data-show-faces="true" 
data-share="true">
</div>



    
    
    
    
  </body>
</html>
