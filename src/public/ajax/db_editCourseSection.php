<?php
      include'../auth/auth.php';
      $db = db();


      $openCourseID = $_POST["openCourseID"];
      $section = $_POST["section"];
      $input_field = $_POST["input_field"];
      $select_field = $_POST["select_field"];

      $stmt = $db->prepare('SELECT * FROM openCourseSection WHERE openCourseID = :openCourseID AND section = :section');

      $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
      $stmt->bindParam("section", $section,PDO::PARAM_STR);

      $stmt->execute();
      $had_data = $stmt->rowCount();

      if ($had_data == 1)
      {
        $stmt = $db->prepare('UPDATE openCourseSection SET capacity = :capacity WHERE openCourseID = :openCourseID AND section = :section');

        $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section", $section,PDO::PARAM_STR);
        $stmt->bindParam("capacity", $input_field[0],PDO::PARAM_STR);

        $stmt->execute();
      }
      else
      {
        $stmt = $db->prepare('INSERT INTO `openCourseSection`(`openCourseID`, `section`, `lecturerID`, `capacity`, `surveySection`) VALUES (:openCourseID,:section,:lecturerID,:capacity,2)');

        $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section", $section,PDO::PARAM_STR);
        $stmt->bindParam("capacity", $input_field[0],PDO::PARAM_STR);
        $stmt->bindParam("lecturerID", $_POST["lecturerID"],PDO::PARAM_STR);

        $stmt->execute();
        
      }



      // echo count($select_field);
      $stmt = $db->prepare('DELETE FROM sectionTime WHERE openCourseID = :openCourseID AND section = :section');

      $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
      $stmt->bindParam("section", $section,PDO::PARAM_STR);

      $stmt->execute();

      if(count($select_field) == 2) {
        $stmt = $db->prepare('INSERT INTO `sectionTime`(`openCourseID`, `section`, `room`, `classType`, `classDay`, `classStartTime`, `classEndTime`) VALUES ( :openCourseID , :section , :room, :classType , :classDay , :classStartTime, :classEndTime)');

        $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section", $section,PDO::PARAM_STR);
        $stmt->bindParam("room", $input_field[3],PDO::PARAM_STR);
        $stmt->bindParam("classType", $select_field[0],PDO::PARAM_STR);
        $stmt->bindParam("classDay", $select_field[1],PDO::PARAM_STR);
        $stmt->bindParam("classStartTime", $input_field[1],PDO::PARAM_STR);
        $stmt->bindParam("classEndTime", $input_field[2],PDO::PARAM_STR);

        $stmt->execute();
        
      }
      else {
        $stmt = $db->prepare('INSERT INTO `sectionTime`(`openCourseID`, `section`, `room`, `classType`, `classDay`, `classStartTime`, `classEndTime`) VALUES ( :openCourseID , :section , :room, :classType , :classDay , :classStartTime, :classEndTime),( :openCourseID2 , :section2 , :room2, :classType2 , :classDay2 , :classStartTime2, :classEndTime2)');

        $stmt->bindParam("openCourseID", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section", $section,PDO::PARAM_STR);
        $stmt->bindParam("room", $input_field[3],PDO::PARAM_STR);
        $stmt->bindParam("classType", $select_field[0],PDO::PARAM_STR);
        $stmt->bindParam("classDay", $select_field[1],PDO::PARAM_STR);
        $stmt->bindParam("classStartTime", $input_field[1],PDO::PARAM_STR);
        $stmt->bindParam("classEndTime", $input_field[2],PDO::PARAM_STR);

        $stmt->bindParam("openCourseID2", $openCourseID,PDO::PARAM_STR);
        $stmt->bindParam("section2", $section,PDO::PARAM_STR);
        $stmt->bindParam("room2", $input_field[6],PDO::PARAM_STR);
        $stmt->bindParam("classType2", $select_field[2],PDO::PARAM_STR);
        $stmt->bindParam("classDay2", $select_field[3],PDO::PARAM_STR);
        $stmt->bindParam("classStartTime2", $input_field[4],PDO::PARAM_STR);
        $stmt->bindParam("classEndTime2", $input_field[5],PDO::PARAM_STR);

        $stmt->execute();

      }

// INSERT INTO `sectionTime`(`openCourseID`, `section`, `room`, `classType`, `classDay`, `classStartTime`, `classEndTime`) VALUES (1,1,"CPE1111","Lectuer","Monday","13:00:00","15:00:00"),(1,1,"CPE1111","Lab","Tuesday","14:00:00","15:00:00"),(1,2,"CPE1111","Lecture & Lab","Wednesday","13:00:00","16:00:00")
      // echo json_encode($res);

    ?>