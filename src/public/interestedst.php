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