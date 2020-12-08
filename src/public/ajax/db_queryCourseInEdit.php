<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('SELECT courseID, courseName, courseDetail, syllabus, coverPhoto FROM courseInfo WHERE courseID IN (SELECT courseID FROM openCourseInfo WHERE openCourseID = :openCourseID)');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);



      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
      }
      $res_all[] = $res;



      $stmt = $db->prepare('SELECT * FROM sectionTime WHERE openCourseID = :openCourseID');
      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);


      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res2[] = $data;
      }
      $res_all[] = $res2;
      
      echo json_encode($res_all);

    ?>