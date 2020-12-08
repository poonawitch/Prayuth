<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('UPDATE courseInfo SET courseDetail = :courseDetail WHERE courseID IN (SELECT courseID FROM openCourseInfo WHERE openCourseID = :openCourseID )');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
      $stmt->bindParam("courseDetail", $_POST["courseDetail"],PDO::PARAM_STR);


      $stmt->execute();

      

    ?>