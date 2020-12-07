<?php
include 'nav-bar.php';
?>
<!doctype html>
<html lang="en">
<head>
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
			grid-gap: 2%;
		}
		.grid-container>div {
			background-color: rgba(255, 255, 255, 0.5);
			border: none;
			border-radius: 15px;
			height: 300px;
		}
		body h1 {
			color: #ffffff;
			font-weight: 700;
			font-size: 30px;
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
    			<div class="col-12 dashbox1" style="padding: 15px; height: 650px;">
    				<div class="row">
    					<div class="col-12" style="position: absolute; top: 30px;">
    						<div class="row" id="courseid" style="background-color: #ffffff; border-top-right-radius: 40px; border-bottom-right-radius: 40px; position: relative; top: 20px; left: 0px; height: 80px; width: 1200px;">
    							<h2 class="edittitle col-3" style="font-size: 60px; font-weight: 700; color: #233975;
    							padding: 5px 0 0 20px">CPE100</h2>
    							<h2 class="edittitle col-9" style="font-size: 30px; font-weight: 700; color: #233975;
    							padding: 5px 0 0 20px; float: right; display: inline-block; text-align: right; position: absolute; top: 15px; right: 40px;">Computer Programming for Engineers</h2>
    						</div>
    					</div>
    					<div class="col-5" style="position: absolute; top: 110px;">
    						<div class="col-11" style="height: 300px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
    							<h1 style="position: absolute; top: 15px; left: 20px;">Course Details</h1>
    						</div>
    						<div class="col-11" style="height: 140px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 370px; left: 30px;">
    						</div>
    						<div style="height: 460px; width: 5px; border-radius: 3px; background-color: rgba(255, 255, 255, 0.5); position: absolute; top: 50px; left: 532px;"></div>
    					</div>
    					<div class="col-7" style="position: absolute; top: 110px; right: 0px;">
    						<div class="col-11" style="height: 460px; background-color: rgba(255, 255, 255, 0.5); border-radius: 30px; position: absolute; top: 50px; left: 30px;">
    							<h1 style="position: absolute; top: 15px; left: 20px;">Sections</h1>
    							<div style="position: absolute; top: 60px; height: 385px; width: 646px; border-radius: 15px; overflow-y: scroll;">
    								<div class="grid-container">
    									<div>
    										<div style="background-color: #233975; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; position: absolute; top: 5px; left: 5px; width: 80px; color: #ffffff; font-size: 20px; font-weight: 600; padding-left: 15px;">SEC 1</div>
    										<div style="background-color: #233975; height: 30px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; position: absolute; top: 5px; left: 90px; width: 180px; color: #ffffff; font-size: 15px; font-weight: 400; padding-left: 15px; padding-top: 3px;">Capacity :
    											<div style="background-color: #ffffff; border-radius: 12px; height: 24px; width: 80px; position: absolute; top: 3px; right: 3px;"></div>
    										</div>
    									</div>
    									<div></div>
    									<div></div>
    									<div></div>
    									<div></div>
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


























