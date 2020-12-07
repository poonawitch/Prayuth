<?php
include 'nav-bar.php';
?>
<head>
    <style>
        .dashbox {
            background-color: #233975;
            border: none;
            border-radius: 50px;
            box-shadow: 0 0 20px #868686;
            padding: 30px;
        }   
    </style>
</head>
<div class="horizontal_container col-12" id="test">
    <div style="background-color: #233975; height: 80px; border-top-right-radius: 40px; border-bottom-right-radius: 40px; width: 95%; position: absolute; top: 30px; left: 0px;">
        <h1 style='color: #ffffff; font-weight: 700; position: absolute; top: 15px; left: 40px;'>Interested Students</h1>
        <h1 style='color: #ffffff; font-weight: 700; position: absolute; top: 15px; right: 40px; display: inline-block;'>CPE100</h1>
    </div>
</div>
<div class="col-12 dashbox" style="background-color: #233975; border-radius: 50px; width: 90%; height: 800px; margin: auto; margin-top: 150px;">
    <table class="table-striped" >
          <tr>
            <td>
              <table style="height: 40px; width: 1235px; overflow-y: scroll; table-layout: fixed">
                <tr style="height: 40px; color: #ffffff;">            
                  <th style="border-top-left-radius: 30px; background-color: #1A9776; width: 10%;"><center>Number</center></th>
                  <th style="background-color: #20B48D; width: 20%;"><center>Student ID</center></th>
                  <th style="background-color: #1A9776; width: 35%;"><center>Name</center></th> 
                  <th style="background-color: #20B48D; width: 20%;"><center>Major</center></th>
                  <th style="border-top-right-radius: 30px; background-color: #1A9776; width: 15%;"><center>Sections</center></th>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <div style="overflow: auto; height: 700px; width: 1235px; background-color: #ffffff; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; position: relative; top: -2px;">
                <table id="table" class="table-striped" style="width: 1235px;">
                  <!-- example of how to add info in this table -->
                  <!-- add rows of student info here and in each row starts with <tr> each column in that row starts and ends with <td></td> please add <center></center> in each cell except students names and majors-->
                  </table>
                </div>
              </td>
            </tr>
          </table> 
</div>
<div style="height: 50px;"></div>

<script>
  $.ajax({
    url : "./ajax/db_interrestedSt.php",
    type: "post",
    data :{
      openCourseID : '<?php echo $_GET["openCourseID"];?>'
    },
    success: function(resp){
      var data = JSON.parse(resp);
      console.log(data);
      const table = document.getElementById('table');
      for (const i in data) {
        const row = document.createElement('tr');

          const column_num = document.createElement('td');
          column_num.setAttribute('style',' width: 10%');
          column_num.innerHTML = '<center>'+(Number(i)+1)+'</center>';
          row.appendChild(column_num);

          const column_studentID = document.createElement('td');
          column_studentID.setAttribute('style',' width: 20%');
          column_studentID.innerHTML = '<center>'+ data[i]["studentID"] +'</center>';
          row.appendChild(column_studentID);
        
          const column_name = document.createElement('td');
          column_name.setAttribute('style',' width: 35%');
          column_name.innerHTML = data[i]["firstName"] +' '+ data[i]["lastName"];
          row.appendChild(column_name);

          const column_department = document.createElement('td');
          column_department.setAttribute('style',' width: 20%');
          column_department.innerHTML = data[i]["department"];
          row.appendChild(column_department);

          const column_section = document.createElement('td');
          column_section.setAttribute('style',' width: 20%');
          column_section.innerHTML = '<center>'+ data[i]["section"] +'</center>';
          row.appendChild(column_section);

        table.appendChild(row);
      }
    }
  })


</script>