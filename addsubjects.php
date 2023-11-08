<?php
try{
    array_map("htmlspecialchars", $_POST);
    include_once("connection.php");
   
    $stmt = $conn->prepare("INSERT INTO TblSubjects (SubjectID,Subjectname,Teacher)VALUES (null,:Subjectname,:Teacher)");

    $stmt->bindParam(':Subjectname', $_POST["Subjectname"]);
    $stmt->bindParam(':Teacher', $_POST["Teacher"]);
    $stmt->execute();
}
catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
$conn=null;

?>