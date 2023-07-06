<?php
$mysqli = new mysqli("localhost", "root", "Cloudhosting123@", "ass3");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT studentId, studentName, studentMatric, studentAge
FROM students WHERE studentId = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($studentId, $studentName, $studentMatric, $studentAge);
$stmt->fetch();
$stmt->close();



echo "<table>";
echo "<tr>";
echo "<th>Student</th>";
echo "<td>" . $studentId . "</td>";
echo "<th>Student Name</th>";
echo "<td>" . $studentName . "</td>";
echo "<th>Student Matric</th>";
echo "<td>" . $studentMatric . "</td>";
echo "<th>Student Age</th>";
echo "<td>" . $studentAge . "</td>";
echo "</tr>";
echo "</table>";
?>
