<!doctype html>
<html lang="en">
<head>
  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }
    body h3 {
      font-size: 10px;
      font-weight: 700;
    }
    .dashbox h2 {
      font-size: 22px;
      font-weight: 700;
      color: #ffffff;
    }
    .dashbox h4 {
      font-size: 20px;
      font-weight: 700;
      color: #ffffff; 
    }
    #containerBox h2 {
      font-size: 18px;
      font-weight: 700;
    }
    #containerBox h4 {
      font-size: 16px;
      font-weight: 700;
    }
    #prayuthlogo {
      position: relative;
    }
    .dashbox {
      background-color: #233975;
      border: none;
      border-radius: 50px;
      box-shadow: 0 0 20px #868686;
      padding: 30px;
    }
    .dashbox1 {
      background-color: #233975;
      border: none;
      border-radius: 50px;
      box-shadow: 0 0 20px #868686;
      padding: 30px;
    }
    .grid-container {
      display: grid;
      grid-template-columns: 31.33% 31.33% 31.33%;
      grid-gap: 2.5%;
      padding-top: 20px;
    }
    .grid-container > div {
      background-color: #1A9776;
      border: none;
      border-radius: 50px;
      height: 380px;
    }
    #cctabletr {
      font-size: 15px;
      height: 40px;
      max-height: 60px;
    }
    #cctabletd {
      width: 15%;
    }
    #cctabletdlecturer {
      width: 25%;
      padding-left: 5px;
    }
    .timetabletime {
      position: relative;
      z-index: 20;
      margin-top: 5px;
      font-weight: 600;
      color: #000000;
      float: left;
      width: 50px;
    }
    .vl {
      position: relative;
      z-index: 2;
      margin-top: 25px;
      border-right: 1px solid #CECECE;
      height: 295px;
      float: left;
      width: 50px;
    }
    .vlinvert {
      position: relative;
      z-index: 2;
      margin-top: 25px;
      border-left: 1px solid #CECECE;
      height: 295px;
      float: left;
    }
    .timetableCourse {
      position: absolute;
      height: 45px;
      border-radius: 15px;
      padding: 10px;
      padding-left: 15px;
    }
    .timetableCourseIDgr {
      /*for green and red background*/
      display: inline-block;
      font-weight: 600;
      color: #ffffff; 
    }
    .timetableCourseRoomgr {
      /*for green and red background*/
      display: inline-block;
      font-weight: 500;
      color: #ffffff;
      margin-left: 5px; 
    }
    .timetableCourseIDgo {
      /*for gray and orange background*/
      display: inline-block;
      font-weight: 600;
      color: #000000; 
    }
    .timetableCourseRoomgo {
      /*for gray and orange background*/
      display: inline-block;
      font-weight: 500;
      color: #000000;
      margin-left: 5px; 
    }
  </style>
</head>
<body>
  <?php
  include 'nav-bar.php';
  ?>
  <div class="horizontal_container col-12" id="test">
    <h1 style='margin-left: 3%; margin-top: 3%; color: #233975; font-weight: 700;'>Dashboard</h1>
  </div>
  <div class="row" style="margin-left: 5%; margin-right: 5%; margin-top: 3%;">
    <div class="col-8">
      <div class="col-12 dashbox" style="height: 250px; margin-bottom: 3%; padding-left: 0px;">
        <h2 class="dashtitle" style="margin-left: 30px;">CURRICULUM COURSES</h2>
        <table class="table-striped" >
          <tr>
            <td>
              <table style="height: 40px; margin-left: 15px; width: 803px; overflow-y: scroll; table-layout: fixed">
                <tr style="height: 40px; color: #ffffff;">            
                  <th style="border-top-left-radius: 35px; background-color: #1A9776; width: 15%;"><center>Course ID</center></th>
                  <th style="background-color: #20B48D; width: 25%;"><center>Course Name</center></th>
                  <th style="background-color: #1A9776; width: 15%;"><center>Section</center></th> 
                  <th style="background-color: #20B48D; width: 15%;"><center>Credits</center></th>
                  <th style="border-top-right-radius: 35px; background-color: #1A9776; width: 25%;"><center>Lecturers</center></th>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <div style="overflow: auto; height: 130px; width: 803px; background-color: #ffffff; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; position: relative; left: 15px; top: -2px;">
                <table id="table" class="table-striped" style="width: 803px;">
                  <!-- example of how to add info in this table -->
                  <!-- add rows of curriculum courses info here and in each row starts with <tr> each column in that row starts and ends with <td></td> please add <center></center> in each cell except lecturer names -->
                  </table>
                </div>
              </td>
            </tr>
          </table>   
        </div>
        <div class="col-12 dashbox" style="height: 400px; margin-bottom: 3%; padding-left: 0px;">
          <h2 class="dashtitle" style="margin-left: 30px;">TIMETABLE</h2>
          <div class="row" style="background-color: #ffffff; border-radius: 35px; width: 803px; height: 320px; margin-left: 15px;">
            <div class="col-2" style="height: 320px; padding: 0px; font-weight: 700; color: #ffffff;">
              <div class="col-12" style="height: 50px; padding-top: 15px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #ffffff; color: #000000; border-top-left-radius: 35px;">TIME</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #FEC812;">Monday</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #E98699;">Tuesday</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #1A9776;">Wednesday</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #EB9E33;">Thursday</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #5AC7EF;">Friday</div>
              <div class="col-12" style="height: 45px; padding-top: 12px; padding-left: 0px; padding-right: 0px; text-align: center; background-color: #7B3AB2; border-bottom-left-radius: 35px;">Saturday</div>
            </div>
            <div class="col-10" style="height: 320px; background-color: #ffffff; border-bottom-right-radius: 35px; border-top-right-radius: 35px; overflow-x: scroll; overflow-y: hidden; position: relative;">
              <div style="height: 320px; width: 1420px; float: left; overflow-x: scroll; overflow-y: hidden; position: relative;">
                <div class="vlinvert"></div>
                <div class="timetabletime">8AM</div>
                <div class="vl"></div>
                <div class="timetabletime">9AM</div>
                <div class="vl"></div>
                <div class="timetabletime">10AM</div>
                <div class="vl"></div>
                <div class="timetabletime">11AM</div>
                <div class="vl"></div>
                <div class="timetabletime">12PM</div>
                <div class="vl"></div>
                <div class="timetabletime">1PM</div>
                <div class="vl"></div>
                <div class="timetabletime">2PM</div>
                <div class="vl"></div>
                <div class="timetabletime">3PM</div>
                <div class="vl"></div>
                <div class="timetabletime">4PM</div>
                <div class="vl"></div>
                <div class="timetabletime">5PM</div>
                <div class="vl"></div>
                <div class="timetabletime">6PM</div>
                <div class="vl"></div>
                <div class="timetabletime">7PM</div>
                <div class="vl"></div>
                <div class="timetabletime">8PM</div>
                <div class="vl"></div>
                <div class="timetabletime">9PM</div>
                <div class="vl"></div>
                <div id="timeTable" style="height: 270px; width: 1420px; float: left; position: absolute; z-index: 10; top: 50px;">
<!--                   <div class="timetableCourse" style="background-color: #CECECE; width: 300px;">
                    <div class="timetableCourseIDgo">CPE111</div>
                    <div class="timetableCourseRoomgo">CPE1115</div>
                  </div>
                  <div class="timetableCourse" style="background-color: #C61038; width: 300px; left: 400px; top: 45px;"></div>
                  <div class="timetableCourse" style="background-color: #1A9776; width: 250px; left: 200px; top: 90px;">
                    <div class="timetableCourseIDgr">GEN241</div>
                    <div class="timetableCourseRoomgr">CB1407</div>
                  </div>
                  <div class="timetableCourse" style="background-color: #F09B27; width: 300px; left: 300px; top: 135px;"></div> -->
                  <!-- add courses according to time here!!
                  width = class period and 50px = 1 hour
                  left = the amount of hours after 8am
                  top = which day if monday top = 0 and plus 45 for tuesday and so on 
                  ***** please look at the CSS for font according to color e.g. use white with green and red-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
       <div class="dashbox" style="height: 675px; padding-left: 0px; position: relative; padding-right: 0px;">
         <h2 class="dashtitle" style="margin-left: 30px;">CREDITS</h2>
         <div style="width: 70%; height: 70px; border-top-left-radius: 35px; border-bottom-left-radius: 35px; background-color: #1A9776; position: relative; float: right; margin-top: 10px;">
           <h4 style="position: relative; left: 31px; top: 10px;">98 / 127<br>credits completed</h4>
         </div>
         <div class="row" style="position: relative; top: -70px; left: 30px;">
           <div class="col-2" style="height: 512px; background-color: #ffffff; border-radius: 36px; position: relative; top: 75px;">
             <div style="height: 381px; width: 62px; background-color: #1A9776; border-radius: 31px; position: relative; top: 127px; left: -10px;"></div>
           </div>
           <div class="col-10 row" style="position: relative; top: 75px; left: 5px;">
             <div class="col-1" style="height: 61px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;"></div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #F09B27; height: 61px; border-radius: 15px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               This semester:<br>Senior Semester 1
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px; border-top-right-radius: 15px; border-top-left-radius: 15px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Junior<br>Semester 2
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Junior<br>Semester 1
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Sophomore<br>Semester 2
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Sophomore<br>Semester 1
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Freshman<br>Semester 2
             </div>
             <div class="col-12" style="height: 3px;"></div>
             <div class="col-1" style="background-color: #1A9776; height: 61px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;"></div>
             <div class="col-10" style="padding-top: 10px; color: #ffffff; font-weight: 700; font-size: 14px;">
               Freshman<br>Semester 1
             </div>
             <div class="col-12" style="height: 3px;"></div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-12">
      <div class="col-12 dashbox1" style="padding-left: 30px; padding-bottom: 50px;">
        <div class="row">
          <div class="col-12">
            <h2 class="dashtitle" style="font-size: 22px; font-weight: 700; color: #ffffff;">FOLLOWING COURSES</h2>
          </div>
          <div class="col-12 grid-container" id="containerBox"></div>
        </div>
      </div>
    </div>
    <div class="col-12" style="height: 50px;"></div>
  </div>
</body>

<script>
  var thisDate = new Date();
  var year = thisDate.getFullYear();
  var semister;
  if (thisDate.getMonth() <= 6) 
  {
    semister = 2;
  }
  else 
  {
    semister = 1;
  }

  $.ajax({
    url : "./ajax/db_enrolledCourse.php",
    type: "post",
    data :{
      semister : semister,
      year : year,
      stdID : '<?php echo $_SESSION["userID"];?>'
    },
    success: function(resp){
      // console.log(resp);
      var data = JSON.parse(resp)
      var prev_courseID = "";
      console.log(data);
      for (const i in data) {
        var startTime = data[i]["classStart"].split(":");
        var endTime = data[i]["classEnd"].split(":");
        var startPx = ((startTime[0] - 8)*100) + startTime[1]*(5/3);
        var widthPx = ((endTime[0] - 8)*100) + endTime[1]*(5/3) - startPx;
        var numDay = dayToNum(data[i]["classDay"]);
        
        document.getElementById('timeTable').innerHTML += '<div class="timetableCourse" style="background-color: #BBBBBB; width: '+ widthPx +'px; left: '+ startPx +'px; top: '+ 45*numDay +'px;"><div class="timetableCourseIDgr">'+ data[i]["courseID"] +'</div><div class="timetableCourseRoomgr">'+ " " +data[i]["room"] +'</div></div>';

        if (prev_courseID != data[i]["courseID"]) {
          document.getElementById('table').innerHTML += '<tr id="cctabletr"><td id="cctabletd"><center>'+ data[i]["courseID"] +'</center></td><td id="cctabletdlecturer">'+ data[i]["courseName"] +'</td><td id="cctabletd"><center>'+ data[i]["section"] +'</center></td><td id="cctabletd"><center>'+ data[i]["credit"] +'</center></td><td id="cctabletdlecturer">'+ data[i]["firstName"] +" "+ data[i]["lastName"] +'</td></tr>'
        }
        prev_courseID = data[i]["courseID"];
        

      }
    }
  })



  $.ajax({
    url : "./ajax/db_followingCourse.php",
    type: "post",
    data :{
      stdID : '<?php echo $_SESSION["userID"];?>'
    },
    success: function(resp){
          // console.log(resp);
          var data = JSON.parse(resp)
          console.log(data);
          var prev_openCourseID = 0;
          var prev_section = 0;
          var timeElement;
          var heart;
          var boxColor;
          for (const i in data) {
            if (prev_openCourseID == data[i]['openCourseID'] && prev_section == data[i]['section']) {
              data[i]['classDay'] = day3letter(data[i]['classDay']);
              timeElement.innerHTML += "<h4 style='margin-top: -2%;'>" + data[i]['classType'] + " - " + data[i]['classDay'] + " " + ampm(data[i]['classStart']) + " - " + ampm(data[i]['classEnd']) + "</h4>";
            }
            else {
              const bigBox = document.getElementById('containerBox');

              //follow bar and follow button are here!!!!!
              const box = document.createElement('div');
              boxColor = data[i]["stuFollow"] / data[i]["capacity"];
              if (boxColor >= 1.0)
                box.setAttribute('style','background-color: #C61038;');
              else if (boxColor >= 0.5) 
                box.setAttribute('style','background-color: #F09B27;');


              var startTime = data[i]["classStart"].split(":");
              var endTime = data[i]["classEnd"].split(":");
              var startPx = ((startTime[0] - 8)*100) + startTime[1]*(5/3);
              var widthPx = ((endTime[0] - 8)*100) + endTime[1]*(5/3) - startPx;
              var numDay = dayToNum(data[i]["classDay"]);
              
              document.getElementById('timeTable').innerHTML += '<div class="timetableCourse" style="background-color: #EB9E33; opacity: 0.7; width: '+ widthPx +'px; left: '+ startPx +'px; top: '+ 45*numDay +'px;"><div class="timetableCourseIDgr">'+ data[i]["courseID"] +'</div><div class="timetableCourseRoomgr">'+ " " +data[i]["room"] +'</div></div>';




              if (data[i]['isFollow'] == 0) 
                heart = "img/unfilledheart.png";
              else
                heart = "img/filledheart.png";

              const rowFollow =document.createElement('div');
              rowFollow.setAttribute('class','row');
              rowFollow.setAttribute('style','position: relative; bottom: -96%; left: 4%; margin-top: -10%;');

              const followNumber = document.createElement('div');
              followNumber.setAttribute('class','col-8');
              followNumber.setAttribute('style',"background-color: #ffffff; color: #000000; border-top-left-radius: 20px; border-bottom-left-radius: 20px; height: 40px; '><h4 style='margin-top: 4%; margin-left: 5%;");

              const h4Number =  document.createElement('h4');
              h4Number.setAttribute('style','margin-top: 4%; margin-left: 5%;');
              if (data[i]['stuFollow'] <= 1)
                h4Number.innerHTML = data[i]['stuFollow'] + " follower";
              else
                h4Number.innerHTML = data[i]['stuFollow'] + " followers";
              followNumber.appendChild(h4Number);



              const heartBox =document.createElement('div');
              heartBox.setAttribute('class','col-2');
              heartBox.setAttribute('style',"background-color: #F7544E; color: #000000; border-top-right-radius: 20px; border-bottom-right-radius: 20px; height: 40px;");
              
              const heartImg =document.createElement('img');
              heartImg.setAttribute('src',heart);
              heartImg.setAttribute('style','width: 60%; margin-top: 20%; margin-left: 10%;');

              heartBox.appendChild(heartImg);
              rowFollow.appendChild(followNumber);
              rowFollow.appendChild(heartBox);


              rowFollow.onclick = function(e) {
                e.stopPropagation();
                const thisObj = $(this);
                console.log(thisObj.find('img').attr('src'));
                if(thisObj.find('img').attr('src') == "img/filledheart.png") 
                  var text = "Unfollow";
                else
                  var text = "Follow";

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
                        openCourseID: data[i]['openCourseID'],
                        section: data[i]['section'],
                        stdID: '<?php echo $_SESSION["userID"];?>'
                      },
                      success: function(resp){
                        // console.log(resp)
                        const data = JSON.parse(resp);
                        // console.log(data)
                        // console.log($(this).find('img'));
                        if (data[0] == 1) {
                          swal("Follow Success", {
                            icon: "success",
                          });

                          thisObj.find('img').attr('src',"img/filledheart.png"); 
                        }
                        else {
                          swal("Unfollow Success", {
                            icon: "success",
                          });
                          thisObj.find('img').attr('src',"img/unfilledheart.png");
                        }
                        if (data[1] <= 1) 
                          thisObj.find('h4')[0].innerHTML = data[1] + " follower";
                        else
                          thisObj.find('h4')[0].innerHTML = data[1] + " follower";

                        
                        const boxColor = data[1] / thisObj.parent().find("h4")[3].innerHTML.match(/\d/g).join("");

                        console.log(thisObj.parent());

                        if (boxColor >= 1.0)
                          thisObj.parent().attr('style','background-color: #C61038;');
                        else if (boxColor >= 0.5) 
                          thisObj.parent().attr('style','background-color: #F09B27;');
                        else
                          thisObj.parent().attr('style','background-color: #1A9776;');
                      }
                    })
                  } 
                });
              }




              const rowBox = document.createElement('div');
              rowBox.setAttribute('class','row');

              const courseID = document.createElement('div');
              courseID.setAttribute('class','row');
              courseID.setAttribute('id','courseid');
              courseID.innerHTML = "<div class='col-9' style='font-weight: 700; font-size: 40px;'>" + data[i]['courseID'] + '</div>';
              courseID.setAttribute('style','background-color: #ffffff; border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-top: 11%; margin-left: 15px; height: 60px; width: 254px;')

              const lecProfile = document.createElement('div');
              lecProfile.setAttribute('class','col-3 dot');
              lecProfile.setAttribute('style','margin-top: 9%; margin-left: 6%; margin-bottom: 5%;')
              lecProfile.innerHTML = "<img src='"+ data[i]['lecPic']+"' style='width: 100%; border-radius:50%;'>";

              const section = document.createElement('div');
              section.setAttribute('class','dot');
              section.setAttribute('style','height: 50px; width: 50px; border-radius: 50%; background-color: #000000; margin-left: 7px; margin-top: 5px;');
              section.innerHTML = "<center><p style='font-weight: 700; color: #ffffff; margin-top: 7px; font-size: 24px;'>" + data[i]['section'] + "</center>";
              if (data[i]['surveySection'] == 1) 
                section.setAttribute('style','height: 50px; width: 50px; border-radius: 50%; background-color: #DB7600; margin-left: 7px; margin-top: 5px;');
              else
                section.setAttribute('style','height: 50px; width: 50px; border-radius: 50%; background-color: #000000; margin-left: 7px; margin-top: 5px;');

              const courseName = document.createElement('div');
              courseName.setAttribute('class','col-8');
              courseName.setAttribute('style','margin-top: -5%; color: #ffffff;');
              courseName.innerHTML = "<h2>" + data[i]['courseName'] + "</h2><h3>LECTURER</h3><h4 style='margin-top: -2%;'>" + data[i]['lecFirstName'] + " " + data[i]['lecLastName'] + "</h4>";

              const courseTime = document.createElement('div');
              courseTime.setAttribute('class','col-12');
              courseTime.setAttribute('style','color: #ffffff;');
              timeElement = courseTime;
              data[i]['classDay'] = day3letter(data[i]['classDay']);
            
              courseTime.innerHTML = "<h3 style='margin-top: 1%;'>SCHEDULES</h3><h4 style='margin-top: -2%;'>" + data[i]['classType'] + " - " + data[i]['classDay'] + " " + ampm(data[i]['classStart']) + " - " + ampm(data[i]['classEnd']) + "</h4>";

              const courseCapac = document.createElement('div');
              courseCapac.setAttribute('class','col-12');
              courseCapac.setAttribute('style','color: #ffffff;');
              courseCapac.innerHTML = "<h3 style='margin-top: 1%;'>CAPACITY</h3><h4 style='margin-top: -2%;'>" + data[i]['capacity'] + " seats</h4>";


              courseID.appendChild(section);
              rowBox.appendChild(courseID);
              rowBox.appendChild(lecProfile);
              box.appendChild(rowFollow);
              box.appendChild(rowBox);
              box.appendChild(courseName);
              box.appendChild(courseTime);
              box.appendChild(courseCapac);

              box.onclick = function(e) {
                window.location = './courseInfo.php?openCourseID='+data[i]['openCourseID']+"&section="+data[i]['section'];
              }

              bigBox.appendChild(box);

              prev_openCourseID = data[i]['openCourseID'] ;
              prev_section = data[i]['section'] ;

          }

        }
      }
    })
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

  function dayToNum(string) {
    var shortDay ;
    switch(string) {
      case "Monday":
      shortDay = 0;
      break;
      case "Tuesday":
      shortDay = 1;
      break;
      case "Wednesday":
      shortDay = 2;
      break;
      case "Thursday":
      shortDay = 3;
      break;
      case "Friday":
      shortDay = 4;
      break;
      case "Saturday":
      shortDay = 5;
      break;
    }
    return shortDay;
  }
</script>

























