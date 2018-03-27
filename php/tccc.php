<?php
error_reporting(E_ALL ^ E_NOTICE);

include "functions.php";
include "focus.php";

if (isset($_REQUEST['3e94'])){
$signing = $_REQUEST['3e94'];
 switch($signing){
case "dashboard":
dashboard();
  break;
case "settings":
 settings();
  break;
  }
}
//Classes routes
else if (isset($_REQUEST['class'])){
  $class = $_REQUEST['class'];
  $thisclass = classname($class);
  one($thisclass);
}
/*BioData Insert*/
else if (isset($_REQUEST['3nt6y'])){
$token = $_REQUEST['3nt6y'];
 switch($token){
  case "1":
  entry();
  break;
   }
/*Results Entry*/
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
BulEntry();
  break;
 } 
}
//Insert Student
else if(isset($_REQUEST['insert'])){
  $token = $_REQUEST['insert'];
  switch($token){
   case "ins_1":
   break;
                              
  }
 
  
//Deleting a Student 
}if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id']) && isset($_REQUEST['class'])) {
    $id = $_REQUEST['id'];

if($id){
       if ($con->query("BEGIN") === TRUE) {

        $query = "DELETE FROM parent WHERE biodata_student_no=$id";
        $result = mysqli_query($con, $query);
        if ($result) {
            $query1 = "DELETE FROM nok WHERE biodata_student_no=$id";
            $result1 = mysqli_query($con, $query1);
            if ($query1) {
                $query2 = "DELETE FROM exam_result WHERE biodata_student_no=$id";
                $result2 = mysqli_query($con, $query2);
                if ($query2) {
                    $query_final = "DELETE FROM biodata WHERE student_no=$id";
                    $result_final = mysqli_query($con, $query_final);
                    if($query_final){
                      $get_class = $_REQUEST['class'];

                      switch($get_class){
                        case 1:
                        $pg = "?3e94=one";
                          break;
                        case 2:
                        $pg = "?3e94=two";
                          break;
                        case 3:
                         $pg = "?3e94=three";
                          break; 
                        case 4:
                          $pg = "?3e94=four";
                          break;
                        case 5:
                        $pg = "?3e94=five";
                          break;
                        case 6:
                         $pg = "?3e94=six";
                          break;
                        default:
                         $pg = "home.php";
                      }
                      success($pg);                
                        $con->query("COMMIT") === TRUE;
                    }else{
               
                       error($pg);
                       
                    }
                } else {
                     error($pg);
                }
            } else {

                 error($pg);
            }
        } else {
            error($pg);
        }
    }
}
}if  (isset($_REQUEST['edit'])) {                      //////////Editing Student Data
     $student_no=$_REQUEST['edit']; 
     edit($student_no);
 
}if (isset($_REQUEST['view']) && isset($_REQUEST['studentclass'])) {
     $view = $_REQUEST['view'];
     $class = $_REQUEST['studentclass'];
     view($view);

}if (isset($_REQUEST['update'])) {
  
  $stud_no= $_REQUEST['update'];
                                //$student_no = rand(400000, 600000);
                                $admission_no = $_POST['admission_no'];
                                $fname= $_POST['fname'];
                                $sname = $_POST['sname'];
                                $oname = $_POST['oname'];
                                $gender = $_POST['gender'];
                                $residence= $_POST['residence'];
                                $class= $_POST['class'];
                                $origin= $_POST['origin'];
                                $nationality = $_POST['nationality'];
                                $student_type = $_POST['student_type'];
                                $date_joined = $_POST['date_joined'];
                                $house = $_POST['house'];
                                $section = $_POST['section'];
                                $dob = $_POST['dob'];
                                $date_entry = date('d-m-Y H:i:s');
                                $religion = $_POST['religion'];
                                date_default_timezone_set('Africa/Nairobi');
                                /* tablename */
                                $table = "biodata";
                                /* array */
                                $data = array(
                                    'admission_no' => $admission_no,
                                    'fname' => $fname,
                                    'sname' => $sname,
                                    'oname' => $oname,
                                    'gender' => $gender,
                                    'residence' => $residence,                               
                                    'origin' => $origin,
                                    'nationality' => $nationality,
                                    'student_type' => $student_type,
                                    'date_joined' => $date_joined,
                                    'house' => $house,
                                    'section' => $section,                                   
                                    'dob' => $dob,
                                    'entrydate' => $date_entry,
                                    'class' => $class,
                                    'religion'=>$relgion
                                );
                                Update2($table,"student_no",$stud_no, $data);
                           ?>
                                <br>
                             <?php 
                /*preparing data for save_data parent*/
                                $parent_no = rand(100000, 200000);
                                $spname = $_POST['spname'];
                                $fpname= $_POST['fpname'];
                                $opname = $_POST['opname'];
                                $presidence = $_POST['presidence'];
                                $pgender = $_POST['pgender'];
                                $pphone_1= $_POST['pphone_1'];
                                $pphone_2= $_POST['pphone_2'];
                                $pemail= $_POST['pemail'];
                                $porigin = $_POST['porigin'];
                                $pentrydate = date('d-m-Y H:i:s');
                                date_default_timezone_set('Africa/Nairobi');
                /* tablename */
                                $table = "parent";
                /* array */
                                $data = array(
                                    'parent_no' => $parent_no,
                                    'sname' => $spname,
                                    'fname' => $fpname,                          
                                    'oname' => $opname,                            
                                    'residence' => $presidence,         
                                    'gender' => $pgender,                      
                                    'phone_1' => $pphone_1,
                                    'phone_2' => $pphone_2,
                                    'email' => $pemail,
                                    'origin' => $porigin,
                                    'entrydate' => $pentrydate,
                                    'biodata_student_no' => $student_no,                                   
                               );
                                Update2($table, "biodata_student_no", $stud_no, $data);
                                ?>
                              /*end parent insert */
                              <br>
                              <?php
                /*preparing data for save_data parent*/
                                $nok_no = rand(500000, 600000);
                                $n_sname = $_POST['n_sname'];
                                $n_fname= $_POST['n_fname'];
                                $n_oname = $_POST['n_oname'];                          
                                $n_phone_1= $_POST['n_phone_1'];
                                $n_phone_2= $_POST['n_phone_2'];
                                $n_email= $_POST['n_email'];                    
                                $n_entrydate = $_POST['n_entrydate'];
                                $n_entrydate = date('d-m-Y H:i:s');
                                date_default_timezone_set('Africa/Nairobi');
                /* tablename */
                                $table = "nok";
                /* array */
                                $data = array(
                                    'nok_no' => $nok_no,
                                    'sname' => $n_sname,
                                    'fname' => $n_fname,                          
                                    'oname' => $n_oname,
                                    'phone_1' => $pphone_1,
                                    'phone_2' => $pphone_2,
                                    'email' => $pemail,                                
                                    'entrydate' =>$n_entrydate,
                                    'biodata_student_no' => $student_no,                                   
                               );
                               Update2($table,"biodata_student_no",$stud_no, $data);
                               ?>
<br>
<?php
}if(isset($_REQUEST['photo'])){

}