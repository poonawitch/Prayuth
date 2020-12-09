<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="icon" href="img/u.png">

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


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12" style="height: 50px;"></div>
</div>
</body>





 <script>
	$.ajax({
		url : "./ajax/db_lecturerTeach.php",
		type: "post",
		data :{
			lecturerID : '<?php echo $_SESSION["userID"];?>'
		},
		success: function(resp){
      // console.log(resp);
      var data = JSON.parse(resp)
      console.log(data);
      const bigBox = document.getElementById('containerBox');
      for (const i in data) {
        const student_percentage = data[i]["studentCount"] / data[i]["capacity"];
        const box = document.createElement('div');
        var box_color = "";
        var button_type = "ltdashbtng";
        var student_bar_color = '#1A9776';

        if (student_percentage > 1.0) {
          box_color = "background-color: #C61038";
          button_type = "ltdashbtnr";
          student_bar_color = '#911833';
        }
        else if (student_percentage == 1.0) {     
          box_color = "background-color: #C61038";
          button_type = "ltdashbtnr";
          student_bar_color = '#C61038';
        }
        else if (student_percentage >= 0.5) {  
          box_color = "background-color: #F09B27";
          button_type = "ltdashbtno";
          student_bar_color = '#F09B27';
        }
        box.setAttribute('style',box_color);


        const row_courseID_section = document.createElement('div');
        row_courseID_section.setAttribute('class','row');

            const courseID = document.createElement('div');
            courseID.setAttribute('class','row');
            courseID.setAttribute('style','background-color: #ffffff; border-top-right-radius: 30px; border-bottom-right-radius: 30px; position: relative; top: 50px; left: 30px; height: 60px; width: 220px;');
            courseID.setAttribute('id','courseid');
            courseID.innerHTML = '<div class="col-9" style="font-weight: 700; font-size: 40px;">'+ data[i]["courseID"] +'</div>'

        row_courseID_section.appendChild(courseID);




            const section = document.createElement('div');
            var circle_color = '#000000';
            if (data[i]["surveySection"] == 1) circle_color = '#DB7600';
            section.setAttribute('class','dot');
            section.setAttribute('style','position: relative; top: 25px; left: 70px; width: 110px; height: 110px; border-radius: 50%; background-color: '+ circle_color +';');
            section.innerHTML = '<div style="font-weight: 700; color: #ffffff; font-size: 30px; text-align: center; position: relative; top: 20px; line-height: normal;">SEC<br>'+ data[i]["section"] +'</div>'

        row_courseID_section.appendChild(section);
        box.appendChild(row_courseID_section);



        const course_name = document.createElement('div');
        course_name.setAttribute('class','col-8 antioverflowfont');
        course_name.setAttribute('style','position: relative; top: 10px; color: #ffffff; height: 75px; font-size: 30px; font-weight: 700; line-height: normal; max-height: 75px; overflow: hidden;');
        course_name.innerHTML = data[i]["courseName"];
        box.appendChild(course_name);



        const bottom_part = document.createElement('div');
        bottom_part.setAttribute('class','row');
        bottom_part.setAttribute('style','margin: 0px; height: 495px;');
        // In bottom part
            const left_part = document.createElement('div');
            left_part.setAttribute('class','col-9 row');
            left_part.setAttribute('style','margin: 0px; padding-right: 0px;');

                const course_detail = document.createElement('div');
                course_detail.setAttribute('class','col-12');
                course_detail.setAttribute('style','background-color: rgba(255, 255, 255, 0.3); border-radius: 35px; height: 340px; width: 100%; position: relative; top: 20px;');
                
                    const header_detail = document.createElement('h3');
                    header_detail.setAttribute('style','position: relative; top: 20px;');
                    header_detail.innerHTML = 'ABOUT THIS COURSE';
                    course_detail.appendChild(header_detail);

                    const detail_word = document.createElement('p');
                    detail_word.setAttribute('style','position: relative; top: 20px; height: 216px; overflow: hidden;');
                    detail_word.innerHTML = data[i]["courseDetail"];
                    course_detail.appendChild(detail_word);

                    const course_page_btn = document.createElement('button');
                    course_page_btn.setAttribute('id',button_type);
                    course_page_btn.setAttribute('style','border: none; height: 50px; width: 252px; border-radius: 25px; bottom: 10px; left: 10px;');
                    course_page_btn.innerHTML = '<h2 style="position: relative; top: 4px;">Go to Course Page</h2>';
                    course_page_btn.onclick = function(e) {
                      window.location = './courseInfo.php?openCourseID='+data[i]['openCourseID']+"&section="+data[i]['section'];
                    }
                    course_detail.appendChild(course_page_btn);
                    

                left_part.appendChild(course_detail);


                const edit_course_section_btn = document.createElement('button');
                edit_course_section_btn.setAttribute('id',button_type);
                edit_course_section_btn.setAttribute('class','col-12');
                edit_course_section_btn.setAttribute('style','border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 75px;');
                edit_course_section_btn.innerHTML = '<h2 style="position: relative; top: 5px;">Edit Course & Sections Info</h2>';
                edit_course_section_btn.onclick = function(e) {
                  // Link for edit
                  window.location = './editcourse.php?openCourseID='+data[i]['openCourseID'];
                }

                left_part.appendChild(edit_course_section_btn);


                const view_student_btn = document.createElement('button');
                view_student_btn.setAttribute('id',button_type);
                view_student_btn.setAttribute('class','col-12');
                view_student_btn.setAttribute('style','border: none; height: 50px; width: 272px; border-radius: 25px; bottom: 15px;');
                view_student_btn.innerHTML = '<h2 style="position: relative; top: 5px;">View Interested Students</h2>';
                view_student_btn.onclick = function(e) {
                  // Link for view student
                  window.location = './interestedst.php?openCourseID='+data[i]['openCourseID'];
                }

                left_part.appendChild(view_student_btn);


            bottom_part.appendChild(left_part);


            const right_part = document.createElement('div');
            right_part.setAttribute('class','col-3');
            right_part.setAttribute('style','margin: 0px;');

                const outer_bar = document.createElement('div');
                outer_bar.setAttribute('style','background-color: #ffffff; position: relative; top: 20px; border-radius: 46px; height: 460px; text-align: center;');

                    const inner_bar = document.createElement('div');
                    if (student_percentage * 450 < 56) {
                      inner_bar.setAttribute('style','width: 56px; position: absolute; bottom: 5px; left: 5px; background-color: '+ student_bar_color +'; border-bottom-left-radius: 28px; border-bottom-right-radius: 28px; height: '+ student_percentage*450 +'px;');
                    }
                    else {
                      inner_bar.setAttribute('style','width: 56px; position: absolute; bottom: 5px; left: 5px; background-color: '+ student_bar_color +'; border-radius: 28px; height: '+ student_percentage*450 +'px;');
                    }
                    

                        const bar_detail = document.createElement('div');
                        bar_detail.setAttribute('style','position: absolute; bottom: 460px; left: 13px; width: 30px;');

                            const student_follow = document.createElement('div');
                            student_follow.setAttribute('style','display: inline-block; font-weight: 700; color: #ffffff');
                            student_follow.innerHTML = data[i]['studentCount'];
                            bar_detail.appendChild(student_follow);

                            const middle_line = document.createElement('div');
                            middle_line.setAttribute('style','background-color: #ffffff; height: 3px; border-radius: 2px;');
                            bar_detail.appendChild(middle_line);

                            const max_student = document.createElement('div');
                            max_student.setAttribute('style','display: inline-block; font-weight: 700; color: #ffffff');
                            max_student.innerHTML = data[i]['capacity'];
                            bar_detail.appendChild(max_student);
                        
                        inner_bar.appendChild(bar_detail);
                    
                    outer_bar.appendChild(inner_bar);
                
                right_part.appendChild(outer_bar);

            bottom_part.appendChild(right_part);

        box.appendChild(bottom_part);        
        bigBox.appendChild(box);
        // console.log(student_percentage)
      }
    }
          
})



  $('.antioverflowfont').aofsr().addClass( 'FluidFontType' );
</script>

























