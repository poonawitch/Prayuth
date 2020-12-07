<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('DELETE FROM sectionTime WHERE openCourseID = :openCourseID AND section = :section');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
      $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);
      $stmt->execute();


      $stmt = $db->prepare('DELETE FROM openCourseSection WHERE openCourseID = :openCourseID AND section = :section');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
      $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);
      $stmt->execute();

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //   $res[] = $data;
      // }

      // echo json_encode($res);

    ?>