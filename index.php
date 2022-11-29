<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Industry Projects</title>
  <style>
      #button1{
        text-align:center;
        position: relative;
        top: -250px;
      } 

      input{
      border: 0px solid;

      }

      #Industry_display{
        position: relative;
        width: 387px;
        height: 250px;
        background: #DFDBD3;
        border-radius: 5px;
        padding: 10px;
      }      
  </style>
</head>

<body>

  <div class="header">
          <div class="container">
              <h1>Industry Projects</h1>
              <a href="teamFinder.html" class="primaryBtn" style="margin-right: 10px; ">
                  Find a Team
              </a>
              <a href="index.php" class="secondaryBtn">
                  Industry Projects
              </a>
          </div>
    </div>

    <br><br><br>

    <div class="container">

     <div id="userlogin">
        <div id="login">
            <h1 style="color: white; font-size: 40px">SCU Login</h1>
            <p style="opacity: 75%; color: white">Login to see team projects.</p>
            <input type="text" name="username" id="username" placeholder="Username">
            <br><br>
            <input type="password" name="password" id="pass" placeholder="Password">
            <br><br>
            <button class="primaryBtn" value="Sign in" id="submitL" onclick="remove_sign()"> Sign in</button>
        </div>
     </div>

        <br><br>

      <div id="industry" style="display:none">

      <div id="google">
            <div id="Industry_display">

              <?php include 'vars.php';
                 echo '<p style="font-weight: 600; font-size: 18px;">Company:  ' . $companyName[0] . "</p><p> Description: <br> </p>"; 
                 echo '<p style="position: relative; left: 5px; font-size: 14px;">' . $CompanyDescription . "<br> <br>Project type: <br> </p>";
                 echo '<p style="position: relative; left: 5px; font-size: 14px;">' . $projectType . "</p>";
              ?>
              
              <input class="primaryBtn" style="background:#a01c34;color:white; position: relative; left: 5px;" type="button" onclick="remove_google()" value="Claim"> </input>

            </div>
      </div>
    </div>

  <script>

      function signUp(){

          document.getElementById('button1').innerHTML = "You signed up!";

      }

      function remove_sign() {
          var gfg_down = document.getElementById("userlogin");
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