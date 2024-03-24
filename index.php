<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://rsms.me/inter/inter-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
<head>
    <title> Login Page</title>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    html { width: 100%; height:100%; overflow:hidden; }

    body { 
      width: 100%;
      height:100%;
      margin: 0;
      padding: 0;
        display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Open Sans', sans-serif;
      background: #092756;
      background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
      background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
      background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
      background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
      background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
      
    }

  .main{
    width: 500px;
    height: 600px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
  }

  #chk{
    display: none;
  }

    .signup
  {
    position: relative;
    width:100%;
    height: 100%;
  }

    label
  {
      color: #fff;
      font-size: 3.0em;
      justify-content: center;
      text-align: center;
      display: flex;
      margin: 70px;
      font-weight: bold;
      cursor: pointer;
  }

    .signup label
  {
      color: #fff;
      font-size: 1.8em;
      justify-content: center;
      text-align: center;
      display: flex;
      margin: 20px;
      font-weight: bold;
      cursor: pointer;
  }

    input
  {
      width: 60%;
      height: 20px;
      background: #e0dede;
      justify-content: center;
      display: flex;
      margin: 10px auto;
      padding: 10px;
      border: none;
      outline: none;
      border-radius: 5px;
  }

    button
  {
      width: 50%;
      height: 30px;
      margin: 10px auto;
      justify-content: center;
        display: block;
        color: #573b8a;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
  }

    button:hover
  {
      background: #A68FCF;
  }

    .login
  {
      height: 460px;
      background: #eee;
      border-radius: 60% / 10%;
      transform: translateY(-180px);
      transition: .8s ease-in-out;
  }

    .login label
  {
      color: #573b8a;
      transform: scale(.6);
  }

    #chk:checked ~ .login
  {
      transform: translateY(-500px);
  }

    p.round2
  {
      justify-content: center;
      text-align: center;
      font-size: 14px;
      font-family: verdana;
      line-height: 1.8;
      color:  white;
      border: 1px solid dimgray;
      border-radius: 16px;
      padding: 20px;
      margin: 20px;
  }

  i
  {
      font-size: 12px;
      justify-content: center;
      display: flex;
  }
  
  .create-account-link 
  {
    display: block; /* Makes the hyperlink a block-level element */
    text-align: center; /* Centers the text horizontally */
    color: #573b8a; /* Sets the color of the hyperlink */
    text-decoration: none; /* Removes underline from the hyperlink */
    transform: scale(.8);
  }

</style></head>
<body><br>


<div class="main"> 
    <input type="checkbox" id="chk" aria-hidden="true">

    <!-- Login Form-->

      <div class="signup">
        <form>
              <img src="img/banner1.png" alt="">
              <label>Student Health Tracker <br> University Poly-Tech Malaysia
              </label>
              <p class="round2">Welcome to Student Health Tracker. Login username that has been registered. <br>Thank You.</p>
        </form>
      </div>


      <div class="login">
        <form action="Access.php" method="POST">
          <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="username" id="Username" placeholder="Username" value=""required="true">
                <input type="Password" name="password" id="Password" placeholder="Password" value=""required="true">
                <i class="bi bi-eye-slash" id="togglePassword"> show password</i>
            <button type="submit" id="submit" class="submit" value ="login" name="submit">Login</button>
            <hr>
            <a href="#" onclick="register()" class="create-account-link">Create an account</a>
            <hr>
            <a href="#" onclick="admin()" class="create-account-link">Admin</a>
            
            
        </form>
      </div>

  </div>
    
    <!-- Script for visible password-->
    <script>
       
function register() {
  window.location.assign("register.php")
}
function admin() {
  window.location.assign("admin_login.php")
}


        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#Password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

    </script>


</body>
</html>