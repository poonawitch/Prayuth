<!doctype html>
<html lang="en">
<head>
	<style>
		body {
			font-family: "Montserrat", sans-serif;
		}
		body h3 {
			font-size: 12px;
			font-weight: 700;
      color: #ffffff;
    }
    body h2 {
      font-size: 15px;
      font-weight: 700;
    }
    body p {
      font-size: 12px;
      font-weight: 400;
      color: #ffffff;
    }
    .dashbox h4 {
      font-size: 20px;
      font-weight: 700;
      color: #ffffff;
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
      border-radius: 40px;
      height: 680px;
    }
    /*change id according to color of the box g = green, o = orange, r = red*/
    #ltdashbtng {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.3);  
      position: absolute; 
      transition-duration: 0.3s;
      color: #ffffff;
    }
    #ltdashbtng:hover {
      background-color: rgba(255, 255, 255, 0.7);  
      color: #1A9776;
    }
    #ltdashbtno {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.3);  
      position: absolute; 
      transition-duration: 0.3s;
      color: #ffffff;
    }
    #ltdashbtno:hover {
      background-color: rgba(255, 255, 255, 0.7);  
      color: #F09B27;
    }
    #ltdashbtnr {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.3);  
      position: absolute; 
      transition-duration: 0.3s;
      color: #ffffff;
    }
    #ltdashbtnr:hover {
      background-color: rgba(255, 255, 255, 0.7);  
      color: #C61038;
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
		<div class="col-12">
			<div class="col-12 dashbox1" style="padding-left: 30px;">
				<div class="row">
					<div class="col-12">
						<h2 class="dashtitle" style="font-size: 22px; font-weight: 700; color: #ffffff;">YOUR COURSES</h2>
					</div>
					<div class="col-12 grid-container" id="containerBox">
            <div>
              <div class="row">
                <div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 30px; border-bottom-right-radius: 30px; position: relative; top: 50px; left: 30px; height: 60px; width: 220px;">
                  <div class="col-9" style="font-weight: 700; font-size: 40px;">CPE100</div>
                </div>
                <div class="dot" style="position: relative; top: 25px; left: 70px; width: 110px; height: 110px; border-radius: 50%; background-color: #000000;">
                  <div style="font-weight: 700; color: #ffffff; font-size: 30px; text-align: center; position: relative; top: 20px; line-height: normal;">SEC<br>1
                  </div>
                </div>
              </div>
              <div class="col-8 antioverflowfont" style="position: relative; top: 10px; color: #ffffff; height: 75px; font-size: 30px; font-weight: 700; line-height: normal; max-height: 75px; overflow: hidden;">Computer Programming for Engineering
              </div>
              <div class="row" style="margin: 0px; height: 495px;">
                <div class="col-9 row" style="margin: 0px; padding-right: 0px;">
                  <div class="col-12" style="background-color: rgba(255, 255, 255, 0.3); border-radius: 35px; height: 340px; width: 100%; position: relative; top: 20px;">
                    <h3 style="position: relative; top: 20px;">ABOUT THIS COURSE</h3>
                    <p style=" position: relative; top: 20px; height: 216px; overflow: hidden;">
                      <!-- course info here -->
                    </p>
                    <!-- button has three styles in CSS id, choose regard of the color of the box (green, orange or red) -->
                    <button id="ltdashbtng" style="border: none; height: 50px; width: 252px; border-radius: 25px; bottom: 10px; left: 10px;">
                      <h2 style="position: relative; top: 4px;">Go to Course Page</h2>
                    </button>
                  </div>
                  <button class="col-12" id="ltdashbtng" style="border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 75px;">
                    <h2 style="position: relative; top: 5px;">Edit Course & Sections Info</h2>
                  </button>
                  <button class="col-12" id="ltdashbtng" style="border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 15px;">
                    <h2 style="position: relative; top: 5px;">View Interested Students</h2>
                  </button>
                </div>
                <div class="col-3" style="margin: 0px;">
                  <div style=" background-color: #ffffff; position: relative; top: 20px; border-radius: 46px; height: 460px; text-align: center;">
                    <div style="width: 56px; position: absolute; bottom: 5px; left: 5px; background-color: #1A9776; border-radius: 28px; height: 150px;">
                      <!-- max height (followers = 100%) = 450px -->
                      <div style="position: absolute; bottom: 20px; left: 14px;">
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">20</div>
                        <div style="background-color: #ffffff; height: 3px; border-radius: 2px;"></div>
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">100</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="background-color: #F09B27">
              <div class="row">
                <div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 30px; border-bottom-right-radius: 30px; position: relative; top: 50px; left: 30px; height: 60px; width: 220px;">
                  <div class="col-9" style="font-weight: 700; font-size: 40px;">CPE100</div>
                </div>
                <div class="dot" style="position: relative; top: 25px; left: 70px; width: 110px; height: 110px; border-radius: 50%; background-color: #000000;">
                  <div style="font-weight: 700; color: #ffffff; font-size: 30px; text-align: center; position: relative; top: 20px; line-height: normal;">SEC<br>2
                  </div>
                </div>
              </div>
              <div class="col-8 antioverflowfont" style="position: relative; top: 10px; color: #ffffff; height: 75px; font-size: 30px; font-weight: 700; line-height: normal; max-height: 75px; overflow: hidden;">Computer Programming for Engineering
              </div>
              <div class="row" style="margin: 0px; height: 495px;">
                <div class="col-9 row" style="margin: 0px; padding-right: 0px;">
                  <div class="col-12" style="background-color: rgba(255, 255, 255, 0.3); border-radius: 35px; height: 340px; width: 100%; position: relative; top: 20px;">
                    <h3 style="position: relative; top: 20px;">ABOUT THIS COURSE</h3>
                    <p style=" position: relative; top: 20px; height: 216px; overflow: hidden;">
                      <!-- course info here -->
                    </p>
                    <!-- button has three styles in CSS id, choose regard of the color of the box (green, orange or red) -->
                    <button id="ltdashbtno" style="border: none; height: 50px; width: 252px; border-radius: 25px; bottom: 10px; left: 10px;">
                      <h2 style="position: relative; top: 4px;">Go to Course Page</h2>
                    </button>
                  </div>
                  <button class="col-12" id="ltdashbtno" style="border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 75px;">
                    <h2 style="position: relative; top: 5px;">Edit Course & Sections Info</h2>
                  </button>
                  <button class="col-12" id="ltdashbtno" style="border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 15px;">
                    <h2 style="position: relative; top: 5px;">View Interested Students</h2>
                  </button>
                </div>
                <div class="col-3" style="margin: 0px;">
                  <div style=" background-color: #ffffff; position: relative; top: 20px; border-radius: 46px; height: 460px; text-align: center;">
                    <div style="width: 56px; position: absolute; bottom: 5px; left: 5px; background-color: #F09B27; border-radius: 28px; height: 400px;">
                      <!-- max height (followers = 100%) = 450px -->
                      <div style="position: absolute; bottom: 20px; left: 14px;">
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">80</div>
                        <div style="background-color: #ffffff; height: 3px; border-radius: 2px;"></div>
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">100</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="background-color: #C61038">
              <div class="row">
                <div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 30px; border-bottom-right-radius: 30px; position: relative; top: 50px; left: 30px; height: 60px; width: 220px;">
                  <div class="col-9" style="font-weight: 700; font-size: 40px;">CPE100</div>
                </div>
                <div class="dot" style="position: relative; top: 25px; left: 70px; width: 110px; height: 110px; border-radius: 50%; background-color: #DB7600;">
                  <div style="font-weight: 700; color: #ffffff; font-size: 30px; text-align: center; position: relative; top: 20px; line-height: normal;">SEC<br>3
                  </div>
                </div>
              </div>
              <div class="col-8 antioverflowfont" style="position: relative; top: 10px; color: #ffffff; height: 75px; font-size: 30px; font-weight: 700; line-height: normal; max-height: 75px; overflow: hidden;">Computer Programming for Engineering
              </div>
              <div class="row" style="margin: 0px; height: 495px;">
                <div class="col-9 row" style="margin: 0px; padding-right: 0px;">
                  <div class="col-12" style="background-color: rgba(255, 255, 255, 0.3); border-radius: 35px; height: 340px; width: 100%; position: relative; top: 20px;">
                    <h3 style="position: relative; top: 20px;">ABOUT THIS COURSE</h3>
                    <p style=" position: relative; top: 20px; height: 216px; overflow: hidden;">
                      <!-- course info here -->
                    </p>
                    <!-- button has three styles in CSS id, choose regard of the color of the box (green, orange or red) -->
                    <button id="ltdashbtnr" style="border: none; height: 50px; width: 252px; border-radius: 25px; bottom: 10px; left: 10px;">
                      <h2 style="position: relative; top: 4px;">Go to Course Page</h2>
                    </button>
                  </div>
                  <button class="col-12" id="ltdashbtnr" style="border: 2px solid #ffffff; height: 50px; width: 272px; border-radius: 25px; bottom: 75px;">
                    <h2 style="position: relative; top: 5px;">Edit Course & Sections Info</h2>
                  </button>
                  <button class="col-12" id="ltdashbtnr" style="border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 15px;">
                    <h2 style="position: relative; top: 5px;">View Interested Students</h2>
                  </button>
                </div>
                <div class="col-3" style="margin: 0px;">
                  <div style=" background-color: #ffffff; position: relative; top: 20px; border-radius: 46px; height: 460px; text-align: center;">
                    <div style="width: 56px; position: absolute; bottom: 5px; left: 5px; background-color: #911833; border-radius: 28px; height: 450px;">
                     <!-- use dark red (911833) when followers exceed max capacity and use normal red (C61038) if followers reach max capacity -->
                      <!-- max height (followers = 100%) = 450px -->
                      <div style="position: absolute; bottom: 20px; left: 14px;">
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">120</div>
                        <div style="background-color: #ffffff; height: 3px; border-radius: 2px;"></div>
                        <div style="display: inline-block; font-weight: 700; color: #ffffff">100</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12" style="height: 50px;"></div>
</div>
</body>

<!-- <script>
	$.ajax({
		url : "./ajax/db_enrollableCourse.php",
		type: "post",
		data :{
			year: '<?php echo $_SESSION["year"];?>',
			faculty: '<?php echo $_SESSION["faculty"];?>',
			department: '<?php echo $_SESSION["department"];?>',
			stdID : '<?php echo $_SESSION["userID"];?>'
		},
		success: function(resp){
          // console.log(resp);
          var data = JSON.parse(resp)
          // console.log(data);
          var prev_openCourseID = 0;
          var prev_section = 0;
          var timeElement;
          var heart;
          var boxColor;
          for (const i in data) {
          	if (prev_openCourseID == data[i]['openCourseID'] && prev_section == data[i]['section']) {
          		switch(data[i]['classDay']) {
          			case "Monday":
          			data[i]['classDay'] = "Mon";
          			break;
          			case "Tuesday":
          			data[i]['classDay'] = "Tue";
          			break;
          			case "Wednesday":
          			data[i]['classDay'] = "Wed";
          			break;
          			case "Thursday":
          			data[i]['classDay'] = "Thu";
          			break;
          			case "Friday":
          			data[i]['classDay'] = "Fri";
          			break;
          			case "Saturday":
          			data[i]['classDay'] = "Sat";
          			break;
          		}
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


              if (data[i]['isFollow'] == 0) 
              	heart = "img/unfilledheart.png";
              else
              	heart = "img/filledheart.png";

              // box.innerHTML = "<div class='row' style=''><div class='col-8' style='background-color: #ffffff; color: #000000; border-top-left-radius: 20px; border-bottom-left-radius: 20px; height: 40px; '><h4 style='margin-top: 4%; margin-left: 5%;'>" + data[i]['stuFollow'] + " followers</h4></div><div class='col-2' style='background-color: #F7544E; color: #000000; border-top-right-radius: 20px; border-bottom-right-radius: 20px; height: 40px;'><img src='" + heart + "' style='width: 60%; margin-top: 20%; margin-left: 10%;'></div></div>";

              const rowFollow =document.createElement('div');
              rowFollow.setAttribute('class','row');
              rowFollow.setAttribute('style','position: relative; bottom: -96%; left: 4%; margin-top: -10%;');
              // rowFollow.innerHTML = "<div class='col-8' style='background-color: #ffffff; color: #000000; border-top-left-radius: 20px; border-bottom-left-radius: 20px; height: 40px; '><h4 style='margin-top: 4%; margin-left: 5%;'>" + data[i]['stuFollow'] + " followers</h4></div><div class='col-2' style='background-color: #F7544E; color: #000000; border-top-right-radius: 20px; border-bottom-right-radius: 20px; height: 40px;'><img src='" + heart + "' style='width: 60%; margin-top: 20%; margin-left: 10%;'></div>";


              const followNumber = document.createElement('div');
              followNumber.setAttribute('class','col-8');
              followNumber.setAttribute('style',"background-color: #ffffff; color: #000000; border-top-left-radius: 20px; border-bottom-left-radius: 20px; height: 40px; '><h4 style='margin-top: 4%; margin-left: 5%;");
              // followNumber.innerHTML = "<h4 style='margin-top: 4%; margin-left: 5%;'>" + data[i]['stuFollow'] + " followers</h4>";

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
              switch(data[i]['classDay']) {
              	case "Monday":
              	data[i]['classDay'] = "Mon";
              	break;
              	case "Tuesday":
              	data[i]['classDay'] = "Tue";
              	break;
              	case "Wednesday":
              	data[i]['classDay'] = "Wed";
              	break;
              	case "Thursday":
              	data[i]['classDay'] = "Thu";
              	break;
              	case "Friday":
              	data[i]['classDay'] = "Fri";
              	break;
              	case "Saturday":
              	data[i]['classDay'] = "Sat";
              	break;
              }
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
</script> -->
<script>
  $('.antioverflowfont').aofsr().addClass( 'FluidFontType' );
</script>

























