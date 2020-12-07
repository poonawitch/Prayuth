<?php
      include'../auth/auth.php';
      $db = db();


      $stmt = $db->prepare('SELECT * FROM studentFollow WHERE openCourseID = :openCourseID AND section = :section AND studentID = :studentID');

      $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
      $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);
      $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);

      $stmt->execute();

      if ($stmt->rowCount() == 0) {
        $stmt = $db->prepare('INSERT INTO `studentFollow`(`openCourseID`, `section`, `studentID`) VALUES (:openCourseID,:section,:studentID)');

        $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
        $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);
        $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);


        $stmt->execute();
        $res[] = 1;
      }
      else {
        $stmt = $db->prepare('DELETE FROM studentFollow WHERE openCourseID = :openCourseID AND section = :section AND studentID = :studentID');

        $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
        $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);
        $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);


        $stmt->execute();
        $res[] = 0;
        
      }

      $stmt = $db->prepare('SELECT studentCount FROM studentCount WHERE openCourseID = :openCourseID AND section = :section');

        $stmt->bindParam("openCourseID", $_POST["openCourseID"],PDO::PARAM_STR);
        $stmt->bindParam("section", $_POST["section"],PDO::PARAM_STR);

        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $res[] = $data["studentCount"];
        echo json_encode($res);
      

    ?>