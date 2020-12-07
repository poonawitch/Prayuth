<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('SELECT openCourseID, section, capacity, stuFollow, surveySection, courseID, courseName, lecFirstName, lecLastName, lecPic, classType, classDay, classStart, classEnd, room, IF((openCourseID, section) IN (SELECT openCourseID, section FROM studentFollow WHERE studentID = :studentID) ,1,0) AS isFollow FROM enrollableCourseView WHERE (openCourseID, section) IN (SELECT openCourseID, section FROM openCourseSection WHERE openCourseID IN(SELECT openCourseID FROM openCourseInfo WHERE (openCourseID, section) IN (SELECT openCourseID, section FROM studentFollow WHERE studentID = :studentID) ))');
      

      $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
      }

      echo json_encode($res);

    ?>