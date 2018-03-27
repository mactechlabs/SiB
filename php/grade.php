<?php  

  $query = "SELECT * FROM  exam_result WHERE biodata_student_no = 2183869";
  include "core.inc.php";
  $query_run = mysqli_query($con, $query);

  while ($row =mysqli_fetch_assoc($query_run)){
    echo json_encode($row);
  }
 

/*

$mark = 56;
$queryGrade = "SELECT * FROM  grade WHERE id = 2";
include "core.inc.php";
$query_runGrade= mysqli_query($con, $queryGrade);
if(!$query_runGrade){
    echo "No".mysqli_error($con);
}
$row = mysqli_fetch_array($query_runGrade);
//grades to be awarded
$grade9='F9';
$grade8='P8';
$grade7='P7';
$grade6='C6';
$grade5='C5';
$grade4='C4';
$grade3='C3';
$grade2='D2';
$grade1='D1';
//testing the conditions and awarding grades
switch ($mark){
case $mark>$row['d1from']:
echo  $grade1;
break;
case $mark>=$row['d2from']:
echo  $grade2;
break;
case $mark>=$row['c3from']:
echo  $grade3;
break;
case $mark>=$row['c4from']:
echo  $grade4;
break;
case $mark>=$row['c5from']:
echo  $grade5;
break;
case $mark>=$row['c6from']:
echo  $grade6;
break;
case $mark>=$row['p7from']:
echo  $grade7;
break;
case $mark>=$row['p8from']:
echo  $grade8;
break;
case $mark<=$row['F9to']:
echo  $grade9;
break;
}*/
?>