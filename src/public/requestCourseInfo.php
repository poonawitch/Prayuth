<?php

	include './auth/auth.php';

	// $res = Array(
	// 	"date" => 
	// )
	$openCourseID = 1;
	$section = 1;

	$db = db();

	$stmt = $db->prepare('SELECT classDay, classStartTime, classEndTime FROM sectionTime WHERE openCourseID = :openCourseID AND section = :section;');

	$stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_INT);
	$stmt->bindParam("section", $section,PDO::PARAM_INT);
	$stmt->execute();

	while($fetchResult = $stmt->fetch(PDO::FETCH_ASSOC)){

		print_r($fetchResult);
		
	}
	


	$stmt = $db->prepare('SELECT * FROM openCourseInfo WHERE openCourseID = :openCourseID ;');

	$stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_INT);
	// $stmt->bindParam("section", $section,PDO::PARAM_INT);
	$stmt->execute();

	while($fetchResult = $stmt->fetch(PDO::FETCH_ASSOC)){
		print_r($fetchResult);
		
	}



	$stmt = $db->prepare('SELECT * FROM openCourseInfo WHERE openCourseID = :openCourseID ;');

	$stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_INT);
	// $stmt->bindParam("section", $section,PDO::PARAM_INT);
	$stmt->execute();

	while($fetchResult = $stmt->fetch(PDO::FETCH_ASSOC)){
		print_r($fetchResult);
		
	}


?>