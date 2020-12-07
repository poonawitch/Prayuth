<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('SELECT si.studentID AS studentID, si.firstName AS firstName, si.lastName AS lastName, si.department AS department, sf.section AS section FROM studentInfo si, studentFollow sf WHERE si.studentID = sf.studentID AND sf.openCourseID = :openCourseID ORDER BY section, studentID');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
      $stmt->execute();


      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
      }

      echo json_encode($res);

    ?>