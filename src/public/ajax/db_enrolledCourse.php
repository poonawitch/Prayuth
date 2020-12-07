<?php
	include "../auth/auth.php";

	$db = db();

	$studentID = $_POST["stdID"];
	$semister = $_POST["semister"];
	$year = $_POST["year"];


	$stmt = $db->prepare('SELECT ec.courseID AS courseID, ecv.courseName AS courseName, ecv.section AS section, ecv.credit AS credit, ecv.lecFirstName AS firstName, ecv.lecLastName As lastName, ecv.classType AS classType, ecv.classDay AS classDay, ecv.room AS room, ecv.classStart AS classStart, ecv.classEnd AS classEnd FROM `enrolledCourse` ec, enrollableCourseView ecv WHERE ec.courseID = ecv.courseID AND ec.section = ecv.section AND ec.semester = :semister AND ec.yearAD = :year AND ec.studentID = :studentID ORDER BY courseID');

    $stmt->bindParam("semister", $semister,PDO::PARAM_STR);
    $stmt->bindParam("year", $year,PDO::PARAM_STR);
    $stmt->bindParam("studentID", $studentID,PDO::PARAM_STR);

    $stmt->execute();

    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
    }





    echo json_encode($res);


?>