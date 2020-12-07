<?php
    include'./auth/auth.php';
    include'./class/userClass.php';

	$userClass = new userClass();
    $login = $userClass->login($_POST['username'],$_POST['password']);
    
    echo json_encode($login);

	
    // $sql = "INSERT INTO `bookLend`(`studentID`, `bookID`, `dueDate`) VALUES ('$studentID','$bookID',adddate(now(),7));" ;
    // if(mysqli_query($conn, $sql)){
    //     $res[] = 1;
    // }
    // else{
    //     $res[] = 0;
    // }

    // $res[] = mysqli_error($conn);
    

?>