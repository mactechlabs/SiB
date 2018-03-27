<?php
include "core.inc.php";
function save_data($table_name,$data){
            $fields = array_keys($data);
            // build the query
             @$sql = "INSERT INTO ".$table_name." (`".implode('`,`', $fields)."`) VALUES('".implode("','", $data)."')";
             include "core.inc.php";

          $result = @mysqli_query($con, $sql);
           if($result){
            $pg= "?3nt6y=1";
          success($pg);
          }else{
            $pg= "?3nt6y=1";
          error($pg);
            
            }
            mysqli_close($con);
        } 
function saveimage($name,$image){
  include "core.inc.php";
  $query = "INSERT INTO photo (photoId,photoname,photocontent) VALUES ('4567',$name',$image)";
  $result->$con($query);
  if ($result){
    echo "Image uploaded";
  }else{
    echo "Image not uploaded";
  }
}
function Update2($table_name, $IdName, $id, $data) {
            $sql = "UPDATE $table_name SET " . $data . " WHERE " . $IdName . " = '". $id . "'";
            include "../php/core.inc.php";
            if (mysqli_query($con, $sql)) {
                message_info("Record updated Successfully ");
                } else {
                  message_info("Record Update Failed ");
                  echo mysqli_error($con);
                }  
            }

function allnames($class){
            $queryBiodata = "SELECT student_no,sname,fname FROM  biodata WHERE class = '".$class."'";
            include "core.inc.php";
            $query_runBiodata = mysqli_query($con, $queryBiodata);
            while ($fetched = mysqli_fetch_assoc($query_runBiodata)) {
              $allnames[] = $fetched;
             //print_r($allnames);
            }
            echo json_encode($allnames);
            }
function message_info($msg){
echo ' <div class="alert alert-info alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 '.$msg.'
</div>';

}
function message_error($msg){
echo ' <div class="alert alert-warning alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 '.$msg.'
</div>';
}
function getStudentsResults($class,$term,$year,$exam,$biodata_student_no){
  $query = "SELECT * FROM  exam_result WHERE biodata_student_no = '".$biodata_student_no."'";
  include "core.inc.php";
  $query_run = mysqli_query($con, $query);
  while ($row =mysqli_fetch_assoc($query_run)){
    echo json_encode($row);
  }

}
function test_grade($mark){
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
    $none="";
    //testing the conditions and awarding grades
    switch ($mark){
    case $mark>$row['d1from']:
    return  $grade1;
    break;
    case $mark>=$row['d2from']:
    return  $grade2;
    break;
    case $mark>=$row['c3from']:
    return  $grade3;
    break;
    case $mark>=$row['c4from']:
    return  $grade4;
    break;
    case $mark>=$row['c5from']:
    return  $grade5;
    break;
    case $mark>=$row['c6from']:
    return  $grade6;
    break;
    case $mark>=$row['p7from']:
    return  $grade7;
    break;
    case $mark>=$row['p8from']:
    return  $grade8;
    break;
    case $mark<=$row['F9to']:
    return  $grade9;
    break;
    case $mark = "":
    return  $none;
    break;
    }
    }

