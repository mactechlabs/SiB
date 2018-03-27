<?php
if (isset($_POST['saveUser'])) {
	//Biodata
	$admissionNo = $_POST['admission_no'];
	$sname = $_POST['sname'];
	$oname = $_POST['oname'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$student_type = $_POST['student_type'];
	$house = $_POST['house'];
	$class = $_POST['class'];
	$fname = $_POST['fname'];
	$religion = $_POST['religion'];
	$residence = $_POST['residence'];
	$dob = $_POST['dob'];
	$date_joined = $_POST['date_joined'];
	$origin = $_POST['student_type'];
	$fullName = $sname."".$fname;
    //Parent
    $psname = $_POST['psname'];
	$pphone_1 = $_POST['pphone_1'];
	$fpname = $_POST['fpname'];
	$pgender = $_POST['pgender'];
	$pphone_2 = $_POST['pphone_2'];
	$poname = $_POST['poname'];
	$presidence = $_POST['presidence'];
	$pemail = $_POST['pemail'];
	//Nok
	$n_sname = $_POST['n_sname'];
	$n_phone_1 = $_POST['n_phone_1'];
	$n_fname = $_POST['n_fname'];
	$n_phone_2 = $_POST['n_phone_2'];
	$n_oname = $_POST['n_oname'];
	$n_email = $_POST['n_email'];
	//Academic Background
	$prevsch1 = $_POST['prevsch1'];
	$prevsch2 = $_POST['prevsch2'];
	$prevsch3 = $_POST['prevsch3'];
	$prevsch1Period = $_POST['prevsch1Period'];
	$prevsch2Period = $_POST['prevsch2Period'];
	$prevsch3Period = $_POST['prevsch3Period'];
	$prevsch1Qual = $_POST['prevsch1Qual'];
	$prevsch2Qual = $_POST['prevsch2Qual'];
	$prevsch3Qual = $_POST['prevsch3Qual'];
	//PLE Results
	$pleIndexNo = $_POST['pleIndexNo'];
	$schNameple = $_POST['schNameple'];
	$pleEng = $_POST['pleEng'];
	$pleMath = $_POST['pleMath'];
	$pleSci = $_POST['pleSci'];
	$pleSST = $_POST['pleSST'];
    //UCE Results
	$uceIndexNo = $_POST['uceIndexNo'];
	$ucePhy = $_POST['ucePhy'];
	$uceChem = $_POST['uceChem'];
	$uceBio = $_POST['uceBio'];
	$uceMath = $_POST['uceMath'];
	$uceHist = $_POST['uceHist'];
	$uceGeo = $_POST['uceGeo'];
	$uceCRE = $_POST['uceCRE'];
	$uceEng = $_POST['uceEng'];
	$optSubject1 = $_POST['optSubject1'];
	$optSubject1Grade = $_POST['optSubject1Grade'];
	$optSubject2Grade = $_POST['optSubject2Grade'];
	//Medical
	$medicalProblemDesc =$_POST['medicalProblemDesc'];
       if(isset($_FILES['imagePic'])){
                $errors= array();
               echo  $file_name = $_FILES['imagePic']['name'];
                $file_size = $_FILES['imagePic']['size'];
                $file_tmp = $_FILES['imagePic']['tmp_name'];
                $file_type = $_FILES['imagePic']['type'];
                
                $extensions= array("jpeg","jpg","png");
                
                if($file_type != 'image/jpeg'){
                   $errors ="extension not allowed, please choose a JPEG or PNG file.";
                }
                
                if($file_size > 2097152) {
                   $errors[]='File size must be excately 2 MB';
                }
                $date = date('Hms');
                $newFilename = trim($fullName.'.jpg');
                
                if(empty($errors)==true) {
                   move_uploaded_file($file_tmp,"../img/stdphotos/".$newFilename);
                }else{
                    echo "Image Upload Failed. Please Try Again";
                }
            }
        $data = array(
            'student_no' => $studentNo,
            'admission_no' => $admissionNo,
            'sname' => $sname,
            'oname' => $oname,
            'gender' => $gender,
            'nationality' => $nationality,
            'student_type' => $student_type,
            'house' => $house,
            'class' => $class,
            'fname' => $fname,
            'religion' => $religion,
            'residence' => $residence,
            'dob' => $dob,
            'date_joined' => $date_joined,
            'origin' => $origin,
            'section' => $section,
        );
        $insertBiodata = "INSERT INTO biodata (`".implode('`,`', $fieldsBiodata)."`) VALUES('".implode("','", $dataBiodata)."')";
        include "core.inc.php";
        $resultBiodata = mysqli_query($con, $insertBiodata);
        if($resultBiodata){
        	//Parent Insert
        	 $data = array(
            'sname' => $psname,
            'phone_1' => $pphone_1,
            'fname' => $fpname,
            'gender' => $pgender,
            'phone_2' => $pphone_2,
            'oname' => $poname,
            'email' => $pemail,
            'residence' => $presidence,
        );
        $insertParent = "INSERT INTO biodata (`".implode('`,`', $fieldsParent)."`) VALUES('".implode("','", $dataParent)."')";
        include "core.inc.php";
        $resultParent = mysqli_query($con, $insertParent);
        	
        }else{
        	echo "error".mysqli_error($con);
        }
}