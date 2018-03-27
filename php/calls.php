<?php
error_reporting(E_ALL ^ E_NOTICE);

include "functions.php";
include "focus.php";

if (isset($_REQUEST['token']) || isset($_REQUEST['class'])){

$signing = $_REQUEST['token'];
$class = $_REQUEST['class'];
switch($signing){
   case "dashboard":
      dashboard();
      allnames("Senior One");
   break;
   case "show":
      $thisclass = classname($class);
      one($thisclass);
   break;
   case "enter":
      entry();
   break;
   case "view":
      view($signing);
   break;
   case "allnames":
     allnames($class);
   break;
   case "settings":
    settings();
   break;
  }

}if (isset($_REQUEST['view'])) {
    $view = $_REQUEST['view'];
    view($view);
}if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['update'];
    updatebio($id);
}else if(isset($_REQUEST['result'])){
    $token = $_REQUEST['result'];
    switch($token){
     case "entry":
   selectEntry();
     break;
   case "enter":
   InEntry();
     break;
     case "bulk":
     MarksEntryStudent();
     break;
    } 
   }if (isset($_REQUEST['marksheet']) || isset($_REQUEST['class']) || isset($_REQUEST['term']) || isset($_REQUEST['year']) || isset($_REQUEST['exam']) || isset($_REQUEST['id'])) {
    $token = $_REQUEST['marksheet'];
    switch($token){
     case "mode":
     selectReport();
     break;
     case "general":
     GeneralMarksheet();
     break;
     case "individual":
     IndividualMarksheet();
     break;
     case "getIndMarks":
     $class = $_REQUEST['class'];
     $term = $_REQUEST['term'];
     $year = $_REQUEST['year'];
     $exam = $_REQUEST['exam'];
    // echo $class;
    // echo $term;
    // echo $year;
    // echo $exam;
     $biodata_student_no = $_REQUEST['id'];
     getStudentsResults($class,$term,$year,$exam,$biodata_student_no);
     break;
    } 
}