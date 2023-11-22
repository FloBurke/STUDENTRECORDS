<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<select name = "student">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
}
?>
</select>

<select name = "subjects">
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblSubjects ORDER BY Subjectname ASC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo('<option value='.$row["SubjectID"].'>'.$row["Subjectname"].', '.$row["Teacher"].'</option>');
}
?>
<input type="submit" value="Add Student">
</select>
</body>
</html>