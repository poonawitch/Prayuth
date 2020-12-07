
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="icon" href="./img/u.png">
  <title>PraYU</title>
  <link rel="icon" type = "pic"href="../pic/icon.ico">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }
    body p {
      font-size: 13px;
    }
    body h3 {
      font-size: 20px;
      font-weight: 700;
    }
    body h2 {
      font-weight: 700;
    }
    body h6 {
      font-size: 15px;
    }
    #Login_BG {
      position: relative;
      /*background: rgb(36,55,117);*/
      background: linear-gradient(0deg, rgba(36,55,117) 20%, rgba(18,28,59) 100%);
      /*background-image: url(img/loginbg.png);*/
      background-repeat: no-repeat;
      position:absolute;
      top:0px;
      right:0px;
      bottom:0px;
      left:0px;
    }
    #prayuthlogo {
      position: relative;
    }

    #Container_BG {
      background: rgb(255,255,255);
      border-radius: 40px;
      padding-top: 30px;
      padding-bottom: 30px;
      padding-left: 50px; 
      padding-right: 50px; 
      margin-right: 60px;
      margin-top: 140px;
      float: right;
      width: 25%;
      height: 60%;
      box-shadow: 0 0 50px #000000;
    }   

    #Container_BG input {
      border-radius: 20px;
    }
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 15%; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #C61038;
      margin: auto;
      padding: 20px;
      border-radius: 40px;
      width: 35%;
      height: 55%;
    }

    /* The Close Button */
    #okay {
      background-color: #233975;
      float: center;
      font-size: 12px;
      font-weight: bold;
    }
    #signin {
      width: 40%;
      border-radius: 20px;
      font-size: 12px;
      font-weight: bold;
      background-color: #233975;
      border: none;
      transition-duration: 0.3s;
      cursor: pointer;
    }
    #signin:hover {
      background-color: #152245;
    }
    #okay {
      width: 15%;
      border-radius: 20px;
      margin-top: 2%;
      border: none;
    }
    #okay:hover {
      background-color: #152245;
    }
  </style>
</head>
<body>

  <div id="Login_BG">
    <center><img src="img/loginbg.png" style="width: 100%; position: absolute; left: 0; bottom: 0;"></center>
    <img src="img/name.png" style="width: 60%; position: absolute; left: 5%; top: 27%;">
    <h2 style="width: 40%; position: absolute; left: 21%; top: 52%; color: white; font-size: 20px; font-weight: 300;">We help you get to learn what you love!</h2>
    <div class="col-sm-4" id="Container_BG">
      <center><img src="img/prayuthlg.png" align="center" id="prayuthlogo"></center>
      <center><h3 style="padding-top: 20px">Sign In</h3>
        <h6 style="font-size: 13px">Enter your ID and password</h6>
      </center>
      <form method="post" style="padding: 10px">
       <div class="form-group" >
        <label for="username" style="font-size: 12px; font-weight: 500;">Lecturer ID or Student ID</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="ID" style="border-radius: 20px">
      </div>
      <div class="form-group">
        <label for="password" style="font-size: 12px; font-weight: 500;">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
    </form>
    <div align="center">
      <button type = "btn" class="btn btn-primary btn-lg" id="signin">SIGN IN</button>
    </div>
  </div>
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <center><img src="/img/cross.png" style="margin-top: 5%; margin-bottom: 5%">
        <h2 style="color: white;">Invalid</h2>
        <p style="color: white;">Please Enter your ID and password again.</p>
        <button class="btn btn-primary btn-lg" id="okay">Okay</button>
      </center>
    </div>

  </div>



  <script>
    var input = document.getElementById("password");
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       document.getElementById("signin").click();
     }
   });
    $("button").click(function(){
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var dis = 0;
      var noreturn = 0;
      // Get the modal
      var modal = document.getElementById("myModal");
      // Get the button that opens the modal
      var btn = document.getElementById("okay");
      var check = 1;
      if (username == "" || username == null) {
        document.getElementById("username").style.border = "2px solid #C61038";
        check = 0;
      }
      else {
        document.getElementById("username").style.border = "2px solid #DDDDDD";
      }
      if (password == "" || password == null) {
        document.getElementById("password").style.border = "2px solid #C61038";
        check = 0;
      }
      else {
        document.getElementById("password").innerHTML = "2px solid #DDDDDD";
      }

      console.log(password)
      if (check == 1) {
        $.ajax({
          url : "check-login.php",
          type: "post",
          data :{
            username:username,
            password:password
          },
          success: function(resp){
            console.log(resp);
            var data = JSON.parse(resp)
            console.log(data);
            if(data != "Error")
            {
              if (data == "Student")
                // Go to Student Page
              window.location = './stdashboard.php';
              
              if (data == "Lecturer") 
                // Go to Lecturer Page
              window.location = './ltdashboard.php';

            }
            else
            {
              // swal('Invalid','Invalid username of password','error')
              if (dis == 0) {
                modal.style.display = "block";
              }
              // When the user clicks on <span> (x), close the modal
              if (event.keyCode === 13) {
               event.preventDefault();
               document.getElementById("okay").click();
             }
             btn.onclick = function() {
              dis = 1;
              modal.style.display = "none";
              
            }
          }
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";



        }
      })
      }

    });



  </script>


  <!-- <script src="../snowball.js"></script> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>


