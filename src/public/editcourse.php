<?php
include 'nav-bar.php';
?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
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
            grid-template-columns: 49% 49%;
            grid-gap: 12px;
        }
        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 15px;
            height: 340px;
        }
        body h1 {
            color: #ffffff;
            font-weight: 700;
            font-size: 30px;
        }
        .textinsecbox {
            color: #ffffff;
            font-weight: 500;
            display: inline-block;
            float: left;
            margin-right: 10px;
        }
        .displayinsecbox {
            border: 2px solid #ffffff;
            border-radius: 12px;
            height: 24px;
            width: 180px;
            overflow: hidden;
            color: #ffffff;
            font-size: 15px;
            padding-left: 5px;
            padding-bottom: 6px;
        }
        .monday {
            border: 2px solid #FEC812;
            color: #FEC812;
        }
        .tuesday {
            border: 2px solid #E98699;
            color: #E98699;
        }
        .wednesday {
            border: 2px solid #1A9776;
            color: #1A9776;
        }
        .thursday {
            border: 2px solid #EB9E33;
            color: #EB9E33;
        }
        .friday {
            border: 2px solid #5AC7EF;
            color: #5AC7EF;
        }
        .saturday {
            border: 2px solid #7B3AB2;
            color: #7B3AB2;
        }
        .inputinsecbox {
            border: 2px solid #ffffff;
            border-radius: 12px;
            height: 24px;
            width: 100px;
            overflow: hidden;
            color: #000000;
            padding-left: 5px;
        }
        .linesecbox {
            margin-bottom: 5px;
        }
        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;
            border: 2px solid #ffffff;
            border-radius: 12px;
            height: 24px;
            width: 180px;
            color: #000000;
            padding-left: 5px;
        }
        .custom-select select {
            display: none; /*hide original SELECT element:*/
        }
        .select-selected {
            background-color: #ffffff;
        }
        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }
        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }
        /*style the items (options), including the selected item:*/
        .select-items div,.select-selected {
            color: #000000;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
            position: relative;
            top: -7px;
            width: 180px;
            left: -7px;
            border-radius: 12px;
            padding-left: 8px;
        }
        /*style items (options):*/
        .select-items {
            position: relative;
            background-color: #ffffff;
            top: -7px;
            left: -7px;
            width: 180px;
            border-radius: 12px;
            right: 0;
            z-index: 99;
            padding-left: 13px;
            padding-top: 9px;
            padding-right: 13px;
        }
        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }
        .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .btn {
            border-radius: 12px;
        }
        .gj-timepicker-bootstrap [role=right-icon] button .gj-icon, .gj-timepicker-bootstrap [role=right-icon] button .material-icons {
            position: absolute;
            font-size: 21px;
            top: 1px;
            left: 3px;
        }
        .gj-timepicker-bootstrap [role=right-icon] button {
            position: relative;
            width: 25px;
        }
        .gj-timepicker .gj-timepicker-bootstrap .gj-unselectable .input-group {
            margin: 0px;
        }
        .whtebtn {
            border: none;
            text-align: center;
            height: 50px;
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
        .upldbtn {
            background-color: #ffffff;
            transition-duration: 0.3s;
            cursor: pointer;
        }
        .upldbtn:hover {
            background-color: #D4DEFA;
        }
        .newsecbtn {
            background-color: rgba(255, 255, 255, 0.5);
            transition-duration: 0.3s;
            cursor: pointer;
        }
        .newsecbtn:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        .minusbtn {
            background-color: rgba(255, 255, 255, 0.5);
            transition-duration: 0.3s;
            cursor: pointer;
        }
        .minusbtn:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        /* .backbtn {
            transition-duration: 0.3s;
            cursor: pointer;
        }

        .backbtn:hover {
            background-color: #D4DEFA;
            } */
        </style>
    </head>

    <body>

        <div class="horizontal_container col-12" id="test">
            <h1 style='margin-left: 2%; margin-top: 2%; color: #233975; font-weight: 700;'>Edit Course & Sections Information</h1>
        </div>
        <div class="row" style="margin-left: 5%; margin-right: 5%; margin-top: 3%;">
            <div class="col-12">
                <div class="col-12 dashbox1" style="padding: 15px; height: 720px;">
                    <div class="row">
                        <div class="col-12" style="position: absolute; top: 30px;">
                            <div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 40px; border-bottom-right-radius: 40px; position: relative; top: 20px; left: 0px; height: 80px; width: 1200px;">
                                <h2 class="edittitle col-3" id="courseID" style="font-size: 60px; font-weight: 700; color: #233975;
                                padding: 5px 0 0 20px"></h2>
                                <h2 class="edittitle col-9" id="courseName" style="font-size: 30px; font-weight: 700; color: #233975;
                                padding: 5px 0 0 20px; float: right; display: inline-block; text-align: right; position: absolute; top: 15px; right: 40px;"></h2>
                            </div>
                        </div>
                        <div class="col-5" style="position: absolute; top: 110px;">
                            <div class="col-11" style="height: 300px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
                                <h1 style="position: absolute; top: 15px; left: 20px;">Course Details</h1>
                                <textarea id="course_detail" style="width: 453px; height: 225px; border-radius: 15px; border: none; resize: none; position: absolute; bottom: 15px; padding-left: 10px; padding-right: 10px;"></textarea>
                            </div>
                            <div class="col-11" style="height: 140px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 370px; left: 30px; overflow: hidden; padding-left: 20px;">
                                <div style="line-height: normal; font-size: 25px; color: #ffffff; margin-top: 25px; float: left;">Upload<br>Course<br>Syllabus</div>
                                <button class="dot upldbtn" style="border-radius: 50%; width: 100px; height: 100px; border: none; margin-top: 20px; margin-left: 10px; float: left;">
                                    <img src="img/greentick.png" style="width: 75px;">
                                </button>
                                <div style="line-height: normal; font-size: 25px; color: #ffffff; margin-top: 25px; float: left; margin-left: 25px;">Upload<br>Cover<br>Picture</div>
                                <button class="dot upldbtn" style="border-radius: 50%; width: 100px; height: 100px; border: none; margin-top: 20px; margin-left: 10px; float: left;">
                                    <img src="img/upload.png" style="width: 75px;">
                                </button>
                            </div>
                            <div class="col-12" style="text-align: center; position: relative; top: 530px;">
                                <button class="whtebtn" id="download" onclick="save_change()"style="position: relative; left: 15px;">
                                    <p style="margin-top: 10px;">Save Changes</p>
                                </button>
                            </div>
                            <div style="height: 530px; width: 5px; border-radius: 3px; background-color: rgba(255, 255, 255, 0.5); position: absolute; top: 50px; left: 532px;"></div>
                        </div>
                        <div class="col-7" style="position: absolute; top: 110px; right: 0px;">
                            <div class="col-11" style="height: 530px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
                                <h1 style="position: absolute; top: 15px; left: 20px;">Sections</h1>

                                <div style="position: absolute; top: 60px; height: 455px; width: 646px; border-radius: 15px; overflow-y: scroll; overflow-x: hidden;">
                                    <div id="big_box_section" class="grid-container" style="width: 100%">


                                        <div>
                                            <div style="background-color: #233975; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;">SEC 1</div>
                                            <div style="background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;">Capacity :
                                                <div style="background-color: #233975; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -23px; right: -79px; text-align: left; color: #ffffff; padding-left: 10px; border: 2px solid #ffffff">50</div>
                                            </div>
                                            <!-- minus button -->
                                            <div class="row" style="position: relative; top: -10px; left: 15px;">
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <div class="displayinsecbox">Lecture</div>
                                                </div>
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <div class="displayinsecbox monday">Monday</div>
                                                </div>
                                                <div class="col-11 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left; height: 24px;">08:30 AM</div>
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left; height: 24px;">12:20 PM</div>
                                                </div>
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <div class="displayinsecbox" style="width: 100px;">CPE1115</div>
                                                </div>
                                                <div style="height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px"></div>
                                            </div>
                                            <div class="row" style="position: relative; top: 10px; left: 15px;">
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">Class Type: </div>
                                                    <div class="displayinsecbox">Lecture</div>
                                                </div>
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">On every </div>
                                                    <div class="displayinsecbox monday">Monday</div>
                                                </div>
                                                <div class="col-11 linesecbox" style="overflow: hidden;">
                                                    <div class="textinsecbox">From </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left; height: 24px;">08:30 AM</div>
                                                    <div class="textinsecbox" style="margin-left: 10px;">to </div>
                                                    <div class="displayinsecbox" style="width: 90px; float: left; height: 24px;">12:20 PM</div>
                                                </div>
                                                <div class="col-11 linesecbox">
                                                    <div class="textinsecbox">At </div>
                                                    <div class="displayinsecbox" style="width: 100px;">CPE1115</div>
                                                </div>
                                            </div>
                                        </div>




                                    <div id="last_obj_section">
                                        <button class="dot newsecbtn" onclick="create_new_section(0,0,0)" style="height: 50px; width: 50px; border-radius: 50%; position: relative; left: 133.5px; top: 135px; border: none;">
                                            <img src="img/plus.png" style="width: 30px; height: 30px; position: relative; top: 0px; left: 0px;">
                                        </button>
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
</div>
</body>




<script>

    var timeid = 0;

    $('.timepicker').timepicker({
        uiLibrary: 'bootstrap4'
    });

    $.ajax({
        url : "./ajax/db_queryCourseInEdit.php",
        type: "post",
        data :{
          openCourseID : '<?php echo $_GET["openCourseID"];?>'
      },
      success: function(resp){
        var data = JSON.parse(resp);
        // console.log(data);

        document.getElementById('courseID').innerHTML = data[0][0]["courseID"];
        document.getElementById('courseName').innerHTML = data[0][0]["courseName"];
        document.getElementById('course_detail').innerHTML = data[0][0]["courseDetail"];

            // add data to left side

            // section data
            var openCourseID = 0, section = 0;
            var section_data = data[1];
            var stack = 0;
            console.log(data[0]);
            for(var i = 0; i < section_data.length; i++) {
                // console.log(section_data[i]["openCourseID"])
                // console.log(section_data[i]["section"])
                if (openCourseID == section_data[i]["openCourseID"] && section == section_data[i]["section"]) {
                    stack++;
                }
                else {
                    if (stack == 1) {
                        if (section_data[i-2]["surveySection"] == 1) {
                            create_non_survey_section(2,section_data[i-2],section_data[i-1])
                        }
                        else {
                            create_new_section(2,section_data[i-2],section_data[i-1])
                        }
                        stack = 0;
                    }
                    else {
                        if (openCourseID != 0 && section != 0) {   
                            if (section_data[i-1]["surveySection"] == 1) {
                                create_non_survey_section(1,section_data[i-1],0)
                            } 
                            else {
                                create_new_section(1,section_data[i-1],0)
                            }
                        }
                    }
                    openCourseID = section_data[i]["openCourseID"];
                    section = section_data[i]["section"];
                }
            }

            if (stack == 1) {
                // console.log("maasd"+section_data[section_data.length-2]["surveySection"])
                if (section_data[section_data.length-2]["surveySection"] == 1) {
                    create_non_survey_section(2,section_data[section_data.length-2],section_data[section_data.length-1]);

                }
                else 
                {
                    create_new_section(2,section_data[section_data.length-2],section_data[section_data.length-1]);
                }
                stack = 0;
            }
            else {
                if (openCourseID != 0 && section != 0) {
                    if (section_data[section_data.length-1]["surveySection"] == 1) {
                        create_non_survey_section(1,section_data[section_data.length-1],0);
                    }
                    else 
                    {
                        create_new_section(1,section_data[section_data.length-1],0);
                    }
                }
            }

            // if (stack == 1) {

            //         create_new_section(2,section_data[section_data.length-2],section_data[section_data.length-1]);
            //         stack = 0;
            // }
            // else {
            //     if (openCourseID != 0 && section != 0) {

            //             create_new_section(1,section_data[section_data.length-1],0);
                    
            //     }
            // }
            console.log(section_data)


        }
    })


    function create_non_survey_section(type,data,data2) {
        const box = document.createElement('div');

        const boxSec = document.createElement('div');
        boxSec.setAttribute('style','background-color: #233975; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;');
        boxSec.innerHTML = 'SEC ' + data["section"];
        box.appendChild(boxSec);

        const boxCap = document.createElement('div');
        boxCap.setAttribute('style','background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;');
        boxCap.innerHTML = 'Capacity :' ;

        const boxCapInput = document.createElement('div');
        boxCapInput.setAttribute('style','background-color: #233975; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -23px; right: -79px; text-align: left; color: #ffffff; padding-left: 10px; border: 2px solid #ffffff');
        boxCapInput.innerHTML =  data["capacity"];
        boxCap.appendChild(boxCapInput);

        box.appendChild(boxCap);

        const time_box = non_survey_section_inner(data);

        

        if (type == 2) {
            const line = document.createElement('div');
            line.setAttribute('style','height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px');
            time_box.appendChild(line);
            box.appendChild(time_box);

            const time_box2 = non_survey_section_inner(data2);
            time_box2.setAttribute('style','position: relative; top: 10px; left: 15px;');
            box.appendChild(time_box2);

        }
        else {
            box.appendChild(time_box);
        }
            
        
            

        $("#last_obj_section").before(box);
    }

    function non_survey_section_inner(data) {
        const time_box = document.createElement('div');
        time_box.setAttribute('style','position: relative; top: -10px; left: 15px;');
        time_box.setAttribute('class','row');
        
            const type_box = document.createElement('div');
            type_box.setAttribute('class','col-11 linesecbox');

                const type_head = document.createElement('div');
                type_head.setAttribute('class','textinsecbox');
                type_head.innerHTML = 'Class Type: ';
                type_box.appendChild(type_head);

                const type_input = document.createElement('div');
                type_input.setAttribute('class','displayinsecbox');
                type_input.innerHTML = data["classType"];
                type_box.appendChild(type_input);

            time_box.appendChild(type_box);



            const day_box = document.createElement('div');
            day_box.setAttribute('class','col-11 linesecbox');

                const day_head = document.createElement('div');
                day_head.setAttribute('class','textinsecbox');
                day_head.innerHTML = 'Class Type: ';
                day_box.appendChild(day_head);

                const day_input = document.createElement('div');
                day_input.setAttribute('class','displayinsecbox ' +  data["classDay"].toLowerCase());
                day_input.innerHTML = data["classDay"];
                day_box.appendChild(day_input);

            time_box.appendChild(day_box);



            const start_box = document.createElement('div');
            start_box.setAttribute('class','col-11 linesecbox');
            start_box.setAttribute('style','overflow: hidden;');
            

                const start_head = document.createElement('div');
                start_head.setAttribute('class','textinsecbox');
                start_head.innerHTML = 'From ';
                start_box.appendChild(start_head);
                
                const start_input = document.createElement('div');
                start_input.setAttribute('class','displayinsecbox');
                start_input.setAttribute('style','width: 90px; float: left; height: 24px;');
                start_input.innerHTML = data["classStartTime"];
                start_box.appendChild(start_input);

                const end_head = document.createElement('div');
                end_head.setAttribute('class','textinsecbox');
                end_head.setAttribute('style','margin-left: 10px;');
                end_head.innerHTML = 'to ';
                start_box.appendChild(end_head);
                
                const end_input = document.createElement('div');
                end_input.setAttribute('class','displayinsecbox');
                end_input.setAttribute('style','width: 90px; float: left; height: 24px;');
                end_input.innerHTML = data["classEndTime"];
                start_box.appendChild(end_input);

            time_box.appendChild(start_box);


            const room_box = document.createElement('div');
            room_box.setAttribute('class','col-11 linesecbox');

                const room_head = document.createElement('div');
                room_head.setAttribute('class','textinsecbox');
                room_head.innerHTML = 'At ';
                room_box.appendChild(room_head);

                const room_input = document.createElement('div');
                room_input.setAttribute('class','displayinsecbox');
                room_input.setAttribute('style','width: 100px;');
                room_input.innerHTML = data["room"];
                room_box.appendChild(room_input);

            time_box.appendChild(room_box);

            return time_box;
    }


    function save_change() {
        swal({
            title: "Are you sure to save change?",
            text: "", 
            icon: "info",
            buttons: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "./ajax/db_editCourse.php",
                    type: "post",
                    data :{
                        openCourseID : '<?php echo $_GET["openCourseID"];?>',
                        courseDetail : document.getElementById('course_detail').value
                    },
                    success: function(){
                        swal({
                            title: "Changes Saved",
                            icon: "success"
                        });
                    }
                });
                
            } 
        });
    }

    function create_new_section(isQuery,fisrtTime,secondTime,cap){
        // const big_box = document.getElementById('big_box_section'); 

        const box = document.createElement('div');

        const section_display_box = document.createElement('div');
        section_display_box.setAttribute('style','background-color: #DB7600; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: relative; top: 5px; left: 5px; width: 100px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;');
        section_display_box.setAttribute('id','this_section');
            // Must edit running sec
            if (isQuery == 0)
                section_display_box.innerHTML = "SEC "+running_section_number();
            else
                section_display_box.innerHTML = "SEC "+fisrtTime["section"];

            box.appendChild(section_display_box);


            const capacity_box = document.createElement('div');
            capacity_box.setAttribute('style','background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: relative; top: -25px; left: 107px; width: 170px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 8px; padding-top: 4px;');
            // Must edit running sec
            capacity_box.innerHTML = "Capacity :";



            const capacity_input = document.createElement('input');
            capacity_input.setAttribute('style','border-radius: 12px; height: 24px; width: 80px; position: relative; top: -1px; right: -3px; text-align: left; color: #000000; padding-left: 10px; border: none;');
            console.log(isQuery)
            if (isQuery != 0)
                capacity_input.setAttribute('value',fisrtTime["capacity"]);
            capacity_box.appendChild(capacity_input);


            box.appendChild(capacity_box);

            const outer_delete_sec = document.createElement('button');
            outer_delete_sec.setAttribute('class','dot minusbtn');
            outer_delete_sec.setAttribute('style','height: 30px; width: 30px; border-radius: 50%; position: relative; left: 282px; top: -55px; border: none;');
            
            outer_delete_sec.onclick = function(e) {
                swal({
                    title: "Delete this section?",
                    text: "This section will be permanently deleted.", 
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "./ajax/db_deleteSection.php",
                            type: "post",
                            data :{
                                openCourseID : '<?php echo $_GET["openCourseID"];?>',
                                section : box.children[0].innerHTML.split(' ')[1]
                            },
                            success: function(){
                                box.remove();
                                swal({
                                    title: "Section Deleted",
                                    icon: "success"
                                });
                            }
                        });
                        
                    } 
                });

                // window.location = './courseInfo.php';
            }

            const inner_delete_sec = document.createElement('div');
            inner_delete_sec.setAttribute('style','height: 5px; width: 20px; background-color: #585858; border-radius: 3px; position: relative; left: -1px; top: 1px;');
            outer_delete_sec.appendChild(inner_delete_sec);

            box.appendChild(outer_delete_sec);

            var data_input;
            if(isQuery == 1) {
                data_input = create_new_time_obj(1,fisrtTime,'Upper');
                box.appendChild(data_input);
                box.appendChild(create_add_time_button(box));
            }
            else if (isQuery == 2){
                data_input = create_new_time_obj(2,fisrtTime,'Upper');
                box.appendChild(data_input);
                box.appendChild(create_del_time_button(box));
                data_input = create_new_time_obj(1,secondTime,'Lower');
                box.appendChild(data_input);
            }
            else {
                data_input = create_new_time_obj(0,0,'Upper');
                box.appendChild(data_input);
                box.appendChild(create_add_time_button(box));
            }
            
            box.appendChild(create_update_button(box,isQuery));

            $("#last_obj_section").before(box);

            return box;

    }

    function create_add_time_button(box){
        const add_time_button = document.createElement('button');
        add_time_button.setAttribute('style','border: none; background-color: rgba(255, 255, 255, 0); width: 30px; height: 30px; position: relative; left: 8px; top: -37px; overflow: hidden;');
        add_time_button.innerHTML = '<img src="img/plus.png" style="width: 20px; height: 20px; position: relative; top: 0px; left: 0px;">'
        add_time_button.onclick = function(e) {


            const line = document.createElement('div');
            line.setAttribute('style','height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px');

            const del_button = create_del_time_button(box);

            // box.appendChild();
            // box.children[5].attr('style.top','-73px');
            box.children[3].appendChild(line);
            // console.log(box.children[3]);
            add_time_button.after(del_button);
            // line.after(del_button);
            del_button.after(create_new_time_obj(0,0,'Lower'));
            add_time_button.remove();
            box.children[6].setAttribute('style','background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -63px; left: 233px; text-align: left; color: #ffffff; padding-left: 10px;');
            // console.log(box.children[5]);
        }
        return add_time_button
    }

    function create_update_button(box,time_num) {
        const update_button = document.createElement('div');
        if (time_num  == 1)
            update_button.setAttribute('style','background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: 56px; left: 232px; text-align: left; color: #ffffff; padding-left: 10px;');
        else
            update_button.setAttribute('style','background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: -66px; left: 232px; text-align: left; color: #ffffff; padding-left: 10px;');
        update_button.innerHTML = 'Update';
        update_button.onclick = function(e) {
            // console.log(box.getElementsByTagName('input'))
            var input_data = box.getElementsByTagName('input'); 
            var input_field = [];
            var select_field = [];
            var error_message = "";
            // console.log(input_data[0])
            for(var i = 0; i < input_data.length ; i++) {
                // console.log(input_data[i].value.length == 0)
                if( input_data[i].value.length == 0) {
                    // input_data[i].style.borderColor ="red";
                    // input_data[i].style.borderWidth ="10px";
                    error_message = 'Please input all data in field';
                    swal({
                        title: "Some field is/are missing",
                        text: error_message, 
                        icon: "warning",
                        dangerMode: true,
                    })
                    return -1;

                }
                else if (i == 0 && !Number.isInteger(Number(input_data[i].value))) {
                    swal({
                        title: "Capacity must be integer",
                        // text: "pl", 
                        icon: "warning",
                        dangerMode: true,
                    })
                    return -1;
                }
                else if((i == 1 || i == 2 || i == 4 || i == 5) && !isValidTime(input_data[i].value)) {
                    swal({
                        title: "Time Invalid",
                        text: "please enter time in formet hh:mm:ss or hh:mm", 
                        icon: "warning",
                        dangerMode: true,
                    })
                    return -1;
                }
                else
                {
                    input_field.push(input_data[i].value);
                }
            }

            var input_data = box.getElementsByTagName('select'); 
            for (var i = 0; i < input_data.length ; i++) {
                select_field.push(input_data[i].value);
            }

            console.log(select_field)
            $.ajax({
                url : "./ajax/db_editCourseSection.php",
                type: "post",
                data :{
                    openCourseID : '<?php echo $_GET["openCourseID"];?>',
                    section : box.getElementsByTagName('div')[0].innerHTML.split(' ')[1],
                    lecturerID : '<?php echo $_SESSION["userID"];?>',
                    'input_field[]' : input_field,
                    'select_field[]' : select_field
                },
                success: function(resp){
                    swal({
                        title: "Edit Success",
                        text: resp, 
                        icon: "success",
                        dangerMode: false,
                    })
                }
            });

        }
        return update_button;
    }

    function create_del_time_button(box) {
        const del_button = document.createElement('button');
        del_button.setAttribute('style','border: none; background-color: rgba(255, 255, 255, 0); width: 30px; height: 30px; position: relative; left: 279px; top: -37px;');
        del_button.innerHTML = '<img src="img/greycross.png" style="width: 15px; height: 15px; position: relative; top: 0px; left: 0px;">';
        del_button.onclick = function(e) {
            // console.log(box.children[3].children)
            del_button.remove()
            box.children[4].remove();
            box.children[3].children[4].remove(); 
            box.children[4].setAttribute('style','background-color: #1A9776; border-radius: 12px; height: 24px; width: 80px; position: relative; top: 56px; left: 233px; text-align: left; color: #ffffff; padding-left: 10px;');
            box.children[4].before(create_add_time_button(box))

        }
        return del_button;
    }


    function running_section_number() {
        const big_box = document.getElementById('big_box_section'); 
        var all_sec_num = [];
        for (var i = 0; i < big_box.childElementCount-1; i++) {
            all_sec_num[i] = Number(big_box.children[i].children[0].innerHTML.split(' ')[1]);
        }
        all_sec_num = all_sec_num.sort(function(a, b){return a - b});
        for (var i = 1; i < all_sec_num.length+1; i++) {
            if(i != all_sec_num[i-1])
                return i;
        }
        return all_sec_num.length+1;
    }

    function create_new_time_obj(isQuery,data,isUpper) {
        const data_input = document.createElement('div');
        // console.log(data)
        data_input.setAttribute('class','row');
        if(isUpper == 'Lower')
            data_input.setAttribute('style','position: relative; top: -35px; left: 15px;');
        else
            data_input.setAttribute('style','position: relative; top: -40px; left: 15px;');

        const outer_class_type = document.createElement('div');
        outer_class_type.setAttribute('class','col-12 linesecbox');

        const head_class_type = document.createElement('div');
        head_class_type.setAttribute('class','textinsecbox');
        head_class_type.innerHTML = 'Class Type: ';
        outer_class_type.appendChild(head_class_type);
            // <div class="custom-select">

            const box_select_class_type = document.createElement('div');
            box_select_class_type.setAttribute('class','custom-select')


                const input_class_type = document.createElement('select');
                input_class_type.setAttribute('class','inputinsecbox');
                input_class_type.setAttribute('id','classType');
                // input_class_type.setAttribute('value',data["classType"]);
                input_class_type.setAttribute('name','classType');
                if (isQuery != 0) {
                    input_class_type.innerHTML = classTypeConv(data["classType"]);
                }
                else {
                    input_class_type.innerHTML = classTypeConv("");
                }
                box_select_class_type.appendChild(input_class_type);


            check_drop_down(box_select_class_type);
            outer_class_type.appendChild(box_select_class_type);

            data_input.appendChild(outer_class_type);


            const outer_class_day = document.createElement('div');
            outer_class_day.setAttribute('class','col-12 linesecbox');

            const head_class_day = document.createElement('div');
            head_class_day.setAttribute('class','textinsecbox');
            head_class_day.innerHTML = 'On every ';
            outer_class_day.appendChild(head_class_day);

            const box_select_class_day = document.createElement('div');
            box_select_class_day.setAttribute('class','custom-select')

                const input_class_day = document.createElement('select');
                input_class_day.setAttribute('class','inputinsecbox');
                input_class_day.setAttribute('id','classDay');
                input_class_day.setAttribute('name','classDay');
                if (isQuery != 0) {
                    input_class_day.innerHTML = classDayConv(data["classDay"]);
                }
                else {
                    input_class_day.innerHTML = classDayConv("");
                }
                box_select_class_day.appendChild(input_class_day);


            // console.log(box_select_class_day)
            check_drop_down(box_select_class_day);
            outer_class_day.appendChild(box_select_class_day);

            data_input.appendChild(outer_class_day);



            const outer_class_time = document.createElement('div');
            outer_class_time.setAttribute('class','col-12 linesecbox');
            outer_class_time.setAttribute('style','overflow: hidden;');

            const head_class_start = document.createElement('div');
            head_class_start.setAttribute('class','textinsecbox');
            head_class_start.innerHTML = 'From ';
            outer_class_time.appendChild(head_class_start);

            const input_class_start = document.createElement('input');
            input_class_start.setAttribute('class','inputinsecbox timepicker');
            input_class_start.setAttribute('width','90');
            input_class_start.setAttribute('style','float: left; height: 24px;');
            input_class_start.setAttribute('id','time_start');
            if( isQuery != 0)
                input_class_start.setAttribute('value',data["classStartTime"]);
            outer_class_time.appendChild(input_class_start);

            const head_class_end = document.createElement('div');
            head_class_end.setAttribute('class','textinsecbox');
            head_class_end.setAttribute('style','margin-left: 10px;');
            head_class_end.innerHTML = 'to ';
            outer_class_time.appendChild(head_class_end);

            const input_class_end = document.createElement('input');
            input_class_end.setAttribute('class','inputinsecbox timepicker');
            input_class_end.setAttribute('width','90');
            input_class_end.setAttribute('style','float: left; height: 24px;');
            if( isQuery != 0)
                input_class_end.setAttribute('value',data["classEndTime"]);
            input_class_end.setAttribute('id','time_end');
            outer_class_time.appendChild(input_class_end);


        data_input.appendChild(outer_class_time);


        const outer_class_at = document.createElement('div');
        outer_class_at.setAttribute('class','col-12 linesecbox');

        const head_class_at = document.createElement('div');
        head_class_at.setAttribute('class','textinsecbox');
        head_class_at.innerHTML = 'At ';
        outer_class_at.appendChild(head_class_at);


            const input_class_at = document.createElement('input');
            input_class_at.setAttribute('class','inputinsecbox');
            input_class_at.setAttribute('id','room');
            if( isQuery != 0)
                input_class_at.setAttribute('value',data["room"]);
            outer_class_at.appendChild(input_class_at);


        data_input.appendChild(outer_class_at);

        if (isQuery == 2) {
            const line = document.createElement('div');
            line.setAttribute('style','height: 3px; width: 287px; margin-left: 15px; margin-top: 10px; background-color: #ffffff; border-radius: 1.5px');
            data_input.appendChild(line);
        }
        // console.log(data_input)
        return data_input;
    }



    function check_drop_down(custom_select) {
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        selElmnt = custom_select.getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        custom_select.appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }  
                }
                h.click();
            });
            b.appendChild(c);
        }
        custom_select.appendChild(b);

        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
        
    }

    function classDayConv(day) {
        var string = "";
        const days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        for(const i in days) {
            if(day == days[i])
                string += '<option value="'+ days[i] +'" selected>'+ days[i] +'</option>';
            else 
                string += '<option value="'+ days[i] +'">'+ days[i] +'</option>';
        }
        return string;
    }

    function classTypeConv(type) {
        var string = "";
        const types = ['Lab','Lecture','Lecture & Lab'];
        for(const i in types) {
            if(type == types[i])
                string += '<option value="'+ types[i] +'" selected>'+ types[i] +'</option>';
            else 
                string += '<option value="'+ types[i] +'">'+ types[i] +'</option>';
        }
        return string;
    }

    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } 
            else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    function isValidTime(value) {
       var colonCount = 0;
       var hasMeridian = false;
       for (var i=0; i<value.length; i++) {
          var ch = value.substring(i, i+1);
          if ( (ch < '0') || (ch > '9') ) {
             if ( (ch != ':') && (ch != ' ') && (ch != 'a') && (ch != 'A') && (ch != 'p') && (ch != 'P') && (ch != 'm') && (ch != 'M')) {
                return false;
             }
          }
          if (ch == ':') { colonCount++; }
          if ( (ch == 'p') || (ch == 'P') || (ch == 'a') || (ch == 'A') ) { hasMeridian = true; }
       }
       if ( (colonCount < 1) || (colonCount > 2) ) { return false; }
       var hh = value.substring(0, value.indexOf(":"));
       if ( (parseFloat(hh) < 0) || (parseFloat(hh) > 23) ) { return false; }
       if (hasMeridian) {
          if ( (parseFloat(hh) < 1) || (parseFloat(hh) > 12) ) { return false; }
       }
       if (colonCount == 2) {
          var mm = value.substring(value.indexOf(":")+1, value.lastIndexOf(":"));
       } else {
          var mm = value.substring(value.indexOf(":")+1, value.length);
       }
       if ( (parseFloat(mm) < 0) || (parseFloat(mm) > 59) ) { return false; }
       if (colonCount == 2) {
          var ss = value.substring(value.lastIndexOf(":")+1, value.length);
       } else {
          var ss = "00";
       }
       if ( (parseFloat(ss) < 0) || (parseFloat(ss) > 59) ) { return false; }
       return true;
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);

    

</script>












