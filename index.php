<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Final</title>
  <style>

    *{
      font-family:verdana
    }

      .header{
        color:black;
        text-align: center;
        position: relative;
        top: -250px;


      }
      #button1{
        text-align:center;
        position: relative;
        top: -250px;
      } 
      .background {
        background-image: url("/images/Screen\ Shot\ 2022-11-24\ at\ 1.54.23\ PM.png");
        background-size: 100%;
        width: 100%;
        height: 400px;
        opacity: 0.5;

      }
      #SigninO{
        position: absolute;
        width: 500px;
        height: 334px;
        left: 32.5%;
        top: 400px;
        background: #546575;
        border-radius: 5px;
      }
      .loginT{
        position: relative;
        text-align: center;
        color: #FFFFFF;
        font-weight: 700;
        font-size: 20px;

      }
      .loginD{
        position: relative;
        text-align: center;
        color: rgba(255, 236, 236, 0.75);      
        font-weight: 200;
        font-size: 12px;

      }
      input{
      border: 0px solid;

      }
      #userS{
        position: relative;
        background-color: rgba(217, 217, 217, 0.53);
        width:235px;
        color: rgba(255, 255, 255, 0.75);
        font-size: 17px;
        border-radius: 10px;
        left: 30%;
      }
      #userP{
        position: relative;
        background-color: rgba(217, 217, 217, 0.53);
        width:235px;
        color: rgba(255, 255, 255, 0.75);
        font-size: 17px;
        border-radius: 10px;
        left: -19%;
        top: 45px;
      }
      #submitL{
        position: relative;
        width: 110px;
        height: 44px;
        left: 41%;
        top: 80px;

        background: #9E1B32;
        border-radius: 10px;
      }
      #Industry_display{
        position: relative;
        width: 387px;
        height: 351px;
        
        background: #DFDBD3;
        border-radius: 5px;
      }


      
  </style>
</head>
<body>


<div class="background">
</div>

<div class="header">
<h1>Find Industry Projects</h1>
</div>
<div id="SigninO">

    <div class="loginT"> <h3>SCU Login</h3></div>
    <div class="loginD"> <h3>Login to find team member</h3></div>
    <input type="text" value="Username" id="userS"> 
    <input type="password" value="password" id="userP"> 
    <button value="Sign in" id="submitL" onclick="remove_sign()"> Sign in</button>

  </div>


<div id="button1">
  <input style="background:#a01c34;color:white;" type="button" onclick="signUp()" value="sign up!"> </input>
</div>





<div id="industry" style="display:none">

<div id="google">
    <div id="Industry_display">

      <?php include 'vars.php';
                  echo '<p style="position: relative; left: 5px; font-size: 14px;">Company: <br>  ' . $companyName[0] . "<br> <br> Description: <br> </p>"; 
                  echo '<p style="position: relative; left: 5px; font-size: 14px;">' . $CompanyDescription . "<br> <br> Project type: <br> </p>";
                  echo '<p style="position: relative; left: 5px; font-size: 14px;">' . $projectType . "</p>";
      ?>
      
      <input style="background:#a01c34;color:white; position: relative; left: 5px;" type="button" onclick="remove_google()" value="Claim"> </input>

    </div>
</div>








<script>

    function signUp(){

        document.getElementById('button1').innerHTML = "You signed up!";

    }

    function remove_sign() {
				var gfg_down = document.getElementById("SigninO");
				gfg_down.remove();
        var T = document.getElementById("industry");
        T.style.display = "block";  // <-- Set it to block
    }

    function remove_google(){
      var delete_google = document.getElementById("google");
      delete_google.remove();

    }
    function remove_cisco(){
      var delete_cisco = document.getElementById("cisco");
      delete_cisco.remove();

    }

    function remove_nasa(){
      var delete_nasa = document.getElementById("NASA");
      delete_nasa.remove();

    }


        





</script>


  




</body>
</html>