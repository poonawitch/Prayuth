<?php
      include'../auth/auth.php';
      $db = db();

      $stmt = $db->prepare('SELECT * FROM lecturerDashboard WHERE lecturerID = :lecturerID AND surveySection != 2');

      $stmt->bindParam("lecturerID", $_POST["lecturerID"],PDO::PARAM_STR);



      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
      }

      echo json_encode($res);

    ?>