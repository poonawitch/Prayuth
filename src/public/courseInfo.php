<!doctype html>
<html lang="en">
<head>
  <style>
    .Login_BG {
      /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&0+0,1+65 */
      background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 65%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 65%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */

      position:absolute;
      top:0px;
      right:0px;
      bottom:0px;
      left:0px;
    }   

    .Container_BG {
      background: rgb(255,255,255);
      border-radius:10px;
      padding: 20px; 
      margin-right: 40px;
      float: right;
    } 
    .backbtn {
      background-color: #ffffff; 
      transition-duration: 0.3s;
      cursor: pointer;
    }
    .backbtn:hover {
      background-color: #D4DEFA;
    }  
    .whtebtn {
      border: none;
      text-align: center;
      height: 60px;
      width: 280px;
      background-color: #ffffff;
      border-radius: 30px;
      font-weight: 600;
      color: #233975;
      font-size: 20px;
      padding: 0;
      transition-duration: 0.3s;
      cursor: pointer;
    }
    .whtebtn:hover {
      background-color: #D4DEFA;
    }

  </style>
</head>

<body>
  <?php  
  include "nav-bar.php";
  ?>
  <center><img src="../img/loginbg.png" style="width: 100%; position: absolute; left: 0; top: 0;"></center>
  <div class="Login_BG" style="margin-top: 80px; padding-bottom: 100px;">
    <div class="horizontal-container">
      <div class="col-1" style="height: 100px;">
        <button onclick="goBack()" class="backbtn" style="text-align: left; height: 40px; width: 110px; border-radius: 20px; margin-top: 40px; margin-left: 30px; border: 2px solid #233975; font-weight: 600; color: #233975; font-size: 20px; padding: 0;">
          <div class="row" style="padding-left: 13px; padding-right: 13px;">
            <img src="img/leftarrow.png" style="height: 30px; margin-left: 10px; margin-top: 3px;">
            <p style="width: 50px; margin-left: 8px; margin-top: 3px;">Back</p>
          </div>
        </button>
      </div>
    </div>
    <div class="container" style="position: relative; padding-top: 10%;">
      <div class="col-12" style="border-radius: 50px; height: 100px; background-color: #233975; position: absolute; overflow: hidden; left: 0px;">
        <div id="courseID" style="display: inline-block; font-weight: 700; color: #ffffff; font-size: 80px; height: 100px; position: relative; bottom: 10px; float: left;"></div>
        <div id="courseName" style="display: inline-block; font-size: 25px; position: absolute; font-weight: 700; color: #ffffff; width: 340px; margin-top: 13px; margin-left: 10px; float: left;"></div>
        <div class="dot" id="section" style="height: 80px; width: 80px; border-radius: 50%; position: absolute; right: 10px; top: 10px; color: #ffffff; font-weight: 700; font-size: 20px; padding-top: 10px;"></div>
      </div>
      <div class="dot" style="width: 300px; height: 300px; background-color: #233975; border-radius: 50%; position: absolute; z-index: 3; left: 740px; top: 40px; padding-top: 20px;">
        <div class="dot" style="height: 260px; width: 260px; border-radius: 50%; text-align: center; margin: auto;"><img id="lecturerPic" style="border-radius: 50%; width: 100%; object-fit: cover;"></div>
      </div>
      <div id="green_bar" style="height: 50px; width: 550px; border-radius: 25px; background-color: #1A9776; position: relative; top: 120px; padding-top: 5px;">
        <div id="red_bar" style='height: 40px; width: 540px; border-radius: 20px; background-color: #D83737; margin-left: 5px; text-align: center; padding-top: 7px;'>
          <!-- use .style.width to change the length of the red bar (calculate percent of the followers, put in var and assign to style.width) and put the number followers here! -->
        </div>
        <div id="followNum" style="font-weight: 700; font-size: 20px; color: #ffffff; z-index: 3; position: relative; top: -35px; left: 25px; display: inline-block;"></div>
      </div>
      <button class="btn" id="follow_btn" onclick="follow()" style="height: 50px; width: 150px; border-radius: 25px; background-color: #F7544E; border-color: #F7544E; border-width: 2px; position: relative; top: 70px; left: 565px; font-weight: 700; font-size: 20px; color: #ffffff; text-align: center; padding-top: 7px;">Follow
      </button>
      <div class="row col-12" style="border-radius: 50px; height: 450px; background-color: #233975; position: absolute; top: 380px; box-shadow: 0 0 20px #868686; padding: 20px;">
        <div><h2 style="font-weight: 700; color: #ffffff; position: relative; top: 20px; left: 20px; height: 60px;">ABOUT THIS COURSE</h2></div>
        <div class="row" style="border-radius: 35px; height: 410px; width: 410px; background-color: #ffffff; position: relative; top: 0px; right: -350px; padding: 10px;">
          <div class="col-12" style="font-weight: 700; font-size: 28px; color: #233975; height: 50px;">CLASS TIME
            <div class="col-2" style="height: 3px; background-color: #233975"></div>
          </div>
          <!-- class time -->
          <div class="col-6" id="firstClass" style="font-weight: 700; font-size: 20px; color: #233975; position: relative; top: -20px; height: 100px;">Lab - MON<br>9:00AM - 11:00AM<br>CB30510</div>
          <div class="col-6" id="secondClass" style="font-weight: 700; font-size: 20px; color: #233975; position: relative; top: -20px; height: 100px;">
            <!-- <div style="height: 120px; width: 2px; background-color: #233975; position: relative; top: -120px; left: -20px;"></div> -->
          </div>
          <!-- class time -->
          <div class="col-12" style="font-weight: 700; font-size: 28px; color: #C61038; height: 50px; position: relative; top: 0px;">EXAMINATION DATES
            <div class="col-2" style="height: 3px; background-color: #C61038"></div>
          </div>
          <div class="col-6" style="font-weight: 700; color: #C61038; position: relative; top: -10px; height: 100px;"><p style="font-size: 25px;">Midterm</p><p id="midterm"></p></div>
          <div class="col-6" style="font-weight: 700; color: #C61038; position: relative; top: -10px; height: 100px;"><p style="font-size: 25px;">Final</p><p id="final"></p>
            <div style="height: 120px; width: 2px; background-color: #C61038; position: relative; top: -120px; left: -20px;"></div>
          </div>
        </div>
        <div id="detail" style="width: 580px; height: 400px; color: #ffffff; position: relative; top: -350px; left: 20px;"></div>
        <button class="whtebtn" id="download" style="position: relative; left: -558px; top: -60px;">
          <p style="margin-top: 13px;">Download Syllabus</p>
        </button>
        <button class="whtebtn" style="position: relative; left: 320px; top: -460px;">
          <p style="margin-top: 13px;">Go to Class Forum</p>
        </button>
      </div>
      <div class="row col-12" style="height: 50px; position: relative; top: 700px;"></div>
    </div>
  </div>




  <script>

    $('#download').click(function(e) {
      console.log("hit");
        e.preventDefault();  //stop the browser from following
        if (filePath == "")
        {
          swal({
            title: "Lecturer hasn't uploaded syllabus yet",
            text: "",
            icon: "info"
          })
        }
        else 
        {
          window.location.href = filePath;
        }
        
      });


    function goBack() {
      window.history.back();
    }

    var maxStudent;
    var user = '<?php echo $_SESSION['user']; ?>';
    var filePath;

    $.ajax({
      url : "./ajax/db_courseInfo.php",
      type: "post",
      data :{
        user: user,
        studentID:<?php echo $_SESSION['userID']; ?>,
        openCourseID:<?php echo $_GET['openCourseID']; ?>,
        section:<?php echo $_GET['section']; ?>
      },
      success: function(resp){
              // console.log(resp);
              var data = JSON.parse(resp)
              console.log(data);
              
              // Set Syllabus
              filePath = data[0]["syllabus"];

              // Set Exam Date 
              var midDate = data[0]["midEnd"].split(/[ ]/)[0]; 
              var midStart = ampm(data[0]["midStart"].split(/[ ]/)[1]); 
              var midEnd = ampm(data[0]["midEnd"].split(/[ ]/)[1]);
              document.getElementById("midterm").innerHTML = dateConvert(midDate) + "<br>" + midStart + " - " + midEnd ;

              var finalDate = data[0]["finalEnd"].split(/[ ]/)[0]; 
              var finalStart = ampm(data[0]["finalStart"].split(/[ ]/)[1]); 
              var finalEnd = ampm(data[0]["finalEnd"].split(/[ ]/)[1]);
              document.getElementById("final").innerHTML = dateConvert(finalDate) + "<br>" + finalStart + " - " + finalEnd ;

              // console.log(data[1].length)

              if (data[1].length == 1)
              {
                // One Class Time
                document.getElementById("firstClass").innerHTML = data[1][0]["classType"] + " - " + day3letter(data[1][0]["classDay"]) + "<br>" + ampm(data[1][0]["classStartTime"]) + " - " + ampm(data[1][0]["classEndTime"]) + "<br>" + data[1][0]["room"];
                document.getElementById("secondClass").innerHTML ="";
                document.getElementById("firstClass").setAttribute('class','col-10');
                document.getElementById("secondClass").setAttribute('class','col-2');

              }
              else 
              {
                document.getElementById("firstClass").innerHTML = data[1][0]["classType"] + " - " + day3letter(data[1][0]["classDay"]) + "<br>" + ampm(data[1][0]["classStartTime"]) + " - " + ampm(data[1][0]["classEndTime"]) + "<br>" + data[1][0]["room"];
                document.getElementById("secondClass").innerHTML = data[1][1]["classType"] + " - " + day3letter(data[1][1]["classDay"]) + "<br>" + ampm(data[1][1]["classStartTime"]) + " - " + ampm(data[1][1]["classEndTime"]) + "<br>" + data[1][1]["room"] + '<div style="height: 120px; width: 2px; background-color: #233975; position: relative; top: -120px; left: -20px;"></div>';
              }


              document.getElementById("courseID").innerHTML = data[0]["courseID"];
              if (data[0]["courseName"].length <= 23) 
              {
                document.getElementById("courseName").style.marginTop = "30px";
                document.getElementById("courseName").innerHTML = data[0]["courseName"];
              }
              else 
              {
                document.getElementById("courseName").innerHTML = data[0]["courseName"];
              }


              document.getElementById("lecturerPic").setAttribute('src',data[0]["lecProfile"]);
              if (data[0]['isSurvey'] == 1) 
              {
                document.getElementById("section").style.backgroundColor = "#DB7600";
              }
              else 
              {
                document.getElementById("section").style.backgroundColor = "#000000";
              }


              document.getElementById("section").innerHTML = "<center>SEC<br>" + data[0]["section"] + "</center>";

              var bar_percent;
              if (user == "Student")
              {
                if(data[2] == 0) 
                {
                  document.getElementById("follow_btn").style.backgroundColor = '#FFFFFF';
                  document.getElementById("follow_btn").style.color = '#444444';
                  document.getElementById("follow_btn").innerHTML = 'Follow';
                }
                else 
                {
                  document.getElementById("follow_btn").style.backgroundColor = '#F7544E';
                  document.getElementById("follow_btn").style.color = '#FFFFFF';
                  document.getElementById("follow_btn").innerHTML = 'Followed';
                }
                bar_percent = parseInt(540 * data[0]["studentCount"] / data[0]["maxStudent"]);
              }
              else
              {
                document.getElementById("follow_btn").remove();
                document.getElementById("green_bar").style.width = 550;
                bar_percent = parseInt(550 * data[0]["studentCount"] / data[0]["maxStudent"]);
              }

              maxStudent = data[0]["maxStudent"];
              // console.log(bar_percent);
              if (bar_percent <= 40) {
                document.getElementById("red_bar").style.width = bar_percent+'px';
                document.getElementById("red_bar").style.borderTopRightRadius = '0px';
                document.getElementById("red_bar").style.borderBottomRightRadius = '0px';
              }
              else {
                document.getElementById("red_bar").style.width = bar_percent+'px';
              }
              if (data[0]["studentCount"] <= 1)
                document.getElementById("followNum").innerHTML = data[0]["studentCount"] + " follower";
              else
                document.getElementById("followNum").innerHTML = data[0]["studentCount"] + " followers";
              
              document.getElementById("detail").innerHTML = data[0]["coureDetail"];

            }
          })

function follow(){
  btn = document.getElementById("follow_btn")
  if (btn.innerHTML == "Followed") 
    text = 'Unfollow';
  else
    text = 'Follow';
  swal({
    title: "Are you sure to "+ text +"?",
    text: "",
    icon: "warning",
    buttons: true,
  })
  .then((click) => {
    if (click) {
      $.ajax({
        url : "./ajax/db_followUnfollow.php",
        type: "post",
        data :{
          openCourseID:<?php echo $_GET['openCourseID']; ?>,
          section:<?php echo $_GET['section']; ?>,
          stdID: <?php echo $_SESSION['userID']; ?>
        },
        success: function(resp){
              // console.log(resp)
              const data = JSON.parse(resp);
              console.log(data)

              if (data[0] == 1) {
                swal("Follow Success", {
                  icon: "success",
                });

                document.getElementById("follow_btn").style.backgroundColor = '#F7544E';
                document.getElementById("follow_btn").style.color = '#FFFFFF';
                document.getElementById("follow_btn").innerHTML = 'Followed';
              }
              else {
                swal("Unfollow Success", {
                  icon: "success",
                });
                document.getElementById("follow_btn").style.backgroundColor = '#FFFFFF';
                document.getElementById("follow_btn").style.color = '#444444';
                document.getElementById("follow_btn").innerHTML = 'Follow';
              }
              if (data[1] <= 1) 
                document.getElementById("followNum").innerHTML = data[1] + " follower";
              else
                document.getElementById("followNum").innerHTML = data[1] + " follower";

              
              var bar_percent = parseInt(540 * parseInt(data[1]) / maxStudent)
              // console.log(bar_percent);
              if (bar_percent <= 40) {
                document.getElementById("red_bar").style.width = bar_percent+'px';
                document.getElementById("red_bar").style.borderTopRightRadius = '0px';
                document.getElementById("red_bar").style.borderBottomRightRadius = '0px';
              }
              else {
                document.getElementById("red_bar").style.width = bar_percent+'px';
              }
              
              
              // const boxColor = data[1] / thisObj.parent().find("h4")[3].innerHTML.match(/\d/g).join("");

              // console.log(thisObj.parent());

              // if (boxColor >= 1.0)
              //   thisObj.parent().attr('style','background-color: #C61038;');
              // else if (boxColor >= 0.5) 
              //   thisObj.parent().attr('style','background-color: #F09B27;');
              // else
              //   thisObj.parent().attr('style','background-color: #1A9776;');
            }
          })
    } 
  });
}

function ampm(string) {
 var time = string.split(":");
 var hours = parseInt(time[0]);
 var minutes = parseInt(time[1]);
 var ampm = hours >= 12 ? 'PM' : 'AM';
 hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ampm;
            return strTime;
          }

          function dateConvert(string) {
           var date = string.split("-");
           var month;
           switch(date[1]) {
             case '1': month = "January"; break;
             case '2': month = "February"; break;
             case '3': month = "March"; break;
             case '4': month = "April"; break;
             case '5': month = "May"; break;
             case '6': month = "June"; break;
             case '7': month = "July"; break;
             case '8': month = "August"; break;
             case '9': month = "September"; break;
             case '10': month = "October"; break;
             case '11': month = "November"; break;
             case '12': month = "December"; break;
           }
           var strDate = month + " " + date[2] + ", " + date[0];

           return strDate;
         }

         function day3letter(string) {
          var shortDay ;
          switch(string) {
            case "Monday":
            shortDay = "Mon";
            break;
            case "Tuesday":
            shortDay = "Tue";
            break;
            case "Wednesday":
            shortDay = "Wed";
            break;
            case "Thursday":
            shortDay = "Thu";
            break;
            case "Friday":
            shortDay = "Fri";
            break;
            case "Saturday":
            shortDay = "Sat";
            break;
          }
          return shortDay;
        }

      </script>


      <!-- <script src="../snowball.js"></script> -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </body>
    </html>


