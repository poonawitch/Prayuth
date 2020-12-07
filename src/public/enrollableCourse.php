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
		body h3 {
			font-size: 10px;
			font-weight: 700;
		}
		body h2 {
			font-size: 18px;
			font-weight: 700;
		}
		body h4 {
			font-size: 16px;
			font-weight: 700;
		}

		#prayuthlogo {
			position: relative;
		}
		.grid-container {
			display: grid;
			grid-template-columns: 31% 31% 31%;
			grid-gap: 3.5%;
			padding: 10px;
		}

		.grid-container > div {
			background-color: #1A9776;
			border: none;
			border-radius: 50px;
			box-shadow: 0 0 20px #868686;
			height: 370px;
		}



	</style>
</head>
<body>
	<?php  
	include "nav-bar.php";
	?>
	<div class="horizontal_container" id="test">
		<h1 style='margin-left: 3%; margin-top: 3%; color: #233975; font-weight: 700;'>Enrollable Courses</h1>
	</div>
	<div id='containerBox' class='grid-container' style='margin: 3%; margin-top: 2%;'></div>
	<script>
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
              lecProfile.setAttribute('class','col-4 dot');
              lecProfile.setAttribute('style','margin-left: 4%; margin-top: 5%;')
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
    </script>



    <!-- <script src="../snowball.js"></script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
  </html>


