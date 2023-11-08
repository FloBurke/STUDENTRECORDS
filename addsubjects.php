<?php
header('Location:subjects.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{
    array_map("htmlspecialchars", $_POST);
    include_once("connection.php");
    $stmt = $conn->prepare("INSERT INTO TblSubjects (SubjectID,Subjectname,Teacher)VALUES (NULL,:subjectname,:teacher)");

    $stmt->bindParam(':subjectname', $_POST["Subjectname"]);
    $stmt->bindParam(':teacher', $_POST["Teacher"]);
    $stmt->execute();
}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;

?>