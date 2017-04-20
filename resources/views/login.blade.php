<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="images/favicon/apple-touch-icon.png">
  <title>Mistery Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto+Slab'>

  
      <style>
     
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  background-color: #24b662;
  font-family: "Roboto Slab", serif;
  color: white;
}

.preload * {
  transition: none !important;
}

label {
  display: block;
  font-weight: bold;
  font-size: small;
  text-transform: uppercase;
  font-size: 0.7em;
  margin-bottom: 0.35em;
}

input[type="text"], input[type="password"] {
  width: 100%;
  border: none;
  padding: 0.5em;
  border-radius: 2px;
  margin-bottom: 0.5em;
  color: #333;
}
input[type="text"]:focus, input[type="password"]:focus {
  outline: none;
  box-shadow: inset -1px -1px 3px rgba(0, 0, 0, 0.3);
}

button {
  padding-left: 1.5em;
  padding-right: 1.5em;
  padding-bottom: 0.5em;
  padding-top: 0.5em;
  border: none;
  border-radius: 2px;
  background-color: #7E5AF1;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  color: white;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.45);
}

small {
  font-size: 1em;
}

.login--login-submit {
  float: right;
}

.login--container {
  width: 600px;
  background-color: #24b662;
  margin: 0 auto;
  position: relative;
  top: 25%;
}

.login--toggle-container {
  position: absolute;
  background-color: #24b662;
  right: 0;
  line-height: 2.5em;
  width: 50%;
  height: 120px;
  text-align: right;
  cursor: pointer;
  transform: perspective(1000px) translateZ(1px);
  transform-origin: 0% 0%;
  transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
  backface-visibility: hidden;
}
.login--toggle-container .js-toggle-login {
  font-size: 4em;
  text-decoration: underline;
}
.login--active .login--toggle-container {
  transform: perspective(1000px) rotateY(180deg);
  background-color: #bc1012;
}

.login--username-container, .login--password-container {
  float: left;
  background-color: #24b662;
  width: 50%;
  height: 120px;
  padding: 0.5em;
}

.login--username-container {
  transform-origin: 100% 0%;
  transform: perspective(1000px) rotateY(180deg);
  transition: all 1s cubic-bezier(0.06, 0.63, 0, 1);
  background-color: #bc1012;
  backface-visibility: hidden;
}
.login--active .login--username-container {
  transform: perspective(1000px) rotateY(0deg);
  background-color: #24b662;
}

footer {
  position: absolute;
  bottom: 12px;
  left: 20px;
}

    </style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
  //VALIDATION - LOGIN FORM
var count = 2;
function validate() {
    var un = document.myform.username.value;
    var pw = document.myform.pword.value;
    var valid = false;

    var unArray = ["student", "lecturer"];  // login
    var pwArray = ["s_mistery", "l_mistery"];  // password

for (var i=0; i <unArray.length; i++) {
    if ((un === unArray[i]) && (pw === pwArray[i])) {
    valid = true;
    break;}}

if (valid) {
    alert ("Login was successful");
    window.location.href = "http://app.isc/home";
    return false;}

var t = "no of tries";
    if (count === 1) {t = " try";}

if (count >= 1) {
    alert ("Invalid username and/or password!  You have " + count + t + " left.");
    document.myform.username.value = "";
    document.myform.pword.value = "";
    setTimeout("document.myform.username.focus()", 25);
    setTimeout("document.myform.username.select()", 25);
    count --;}

else {
    alert ("Incorrect! You have no more tries left! Bye.");
    document.myform.username.value = "No more tries allowed!";
    document.myform.pword.value = "";
    document.myform.username.disabled = true;
    document.myform.pword.disabled = true;
    return false;}}
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class='preload login--container'>
  <div class='login--form'>
    <div class='login--username-container'>
     <form name = "myform">
         <label for="username">Username:</label> 
      <input autofocus placeholder='Username' type='text' name="username" id="username">
    </div>
    <div class='login--password-container'>
      <label for="pass">Password:</label>
      <input placeholder='Password' type='password' name="pword" id="pass">
      
      <button id="login" type="button"  value="Log In" name="Submit" class="btn btn-default btn-lg" onclick= "validate()">Log In</button>
    
    </form>
    </div>
      
       
        
      
      
  </div>
  <div class='login--toggle-container'>
    <small>Welcome,you can</small>
    <div class='js-toggle-login'>Login</div>
    <small>here</small>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>