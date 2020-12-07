<?php
	include "../auth/auth.php";

	$db = db();

	$studentID = $_POST["studentID"];
	$openCourseID = $_POST["openCourseID"];
	$section = $_POST["section"];

	$stmt = $db->prepare('SELECT * FROM courseInfoView WHERE section = :section AND openCourseID = :openCourseID');

    $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
    $stmt->bindParam("section", $section,PDO::PARAM_STR);

    $stmt->execute();

    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
    }


    $stmt = $db->prepare('SELECT * FROM sectionTime WHERE section = :section AND openCourseID = :openCourseID');

    $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
    $stmt->bindParam("section", $section,PDO::PARAM_STR);

    $stmt->execute();

    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $time[] = $data;
    }

    $res[] = $time;


    
    if ($_POST["user"] == "Student") {
        $stmt = $db->prepare('SELECT * FROM studentFollow WHERE section = :section AND openCourseID = :openCourseID AND studentID = :studentID');

        $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section", $section,PDO::PARAM_STR);
        $stmt->bindParam("studentID", $studentID,PDO::PARAM_STR);

        $stmt->execute();

        $res[] = $stmt->rowCount();
    }
    
    


    echo json_encode($res);


?>