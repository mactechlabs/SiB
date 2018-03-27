function entry() {
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">::Students Biodata / New Entry</h2> 
        </div>
    </div>
    <div class="panel panel-default" class="col-lg-4">
        <div class="panel-heading" style="background-color:#337ab7;"> 
            <div style="color:#FFF;"> <i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#demo"></i>Personal Details</div>
        </div>
        <div class="panel-body" style="background-color:#f5f5f5;"  id="demo" class="collapse">
            <div class="row">
                    <div class="col-lg-3" style="margin:2%;">
                        <img src="../img/user-avatar.png" width="200" height="200" />

                        <div class="form-group">
                            <div class="form-group">
                                <label>Upload Photo</label>
                           
                            </div> 
                        </div>
                    </div>
                                    <form method="post" role="form" enctype="multipart/form-data">

                    <div class="col-lg-4">

                        <div class="form-group">
                            <label>Admission Number</label><sup>*</sup>
                            <input class="form-control" placeholder="14/D/223" name="admission_no">

                            <label>Surname</label><sup>*</sup>
                            <input class="form-control" placeholder="Surname" name="sname">
                            <label>Othernames</label>
                            <input class="form-control" placeholder="Othernames" name="oname">  
                            <label>Gender</label><sup>*</sup>
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>

                            </select>  
                            <label>Country Of Origin</label><sup>*</sup>
                            <select class="form-control" name="nationality">
                                <option>Uganda</option>
                                <option>Kenya</option>
                                <option>Tanzania</option>
                                <option>Rwanda</option>
                                <option>Burundi</option>
                            </select>  
                            <label>Student Type</label><sup>*</sup>
                            <select class="form-control" name="student_type">
                                <option>Current</option>
                                <option>Former</option>
                            </select>
                            <label>House</label>
                            <input class="form-control" placeholder="House" name="house">    
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Class</label><sup>*</sup>
                            <select class="form-control" name="class">
                                <option>Senior One</option>
                                <option>Senior Two</option>
                                <option>Senior Three</option>
                                <option>Senior Four</option>
                                <option>Senior Five</option>
                                <option>Senior Six</option>
                            </select>
                            <label>Firstname</label><sup>*</sup>
                            <input class="form-control" placeholder="Firstname" name="fname">  
                            <label>Religion</label><sup>*</sup>
                            <select class="form-control" name="religion">
                                <option>Roman Catholic</option>
                                <option>Anglican</option>
                                <option>Moslem</option>
                                <option>Other</option>               
                            </select> 
                            <label>Residence</label><sup>*</sup>
                            <input class="form-control" placeholder="Residence" name="residence">  
                            <label>Section</label><sup>*</sup>
                            <select class="form-control" name="section">
                                <option>Boarding</option>
                                <option>Day</option>
                            </select> 
                            <label for="example-datetime-local-input" class="">Date of Birth</label>
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="dob">

                            <label for="example-datetime-local-input" class="">Date Joined</label>
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_joined">                       
                        </div>

                    </div>

            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337ab7;">
                <div style="color:#FFF;" ><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#Parent"></i>Parent</div>
            </div>
            <div class="panel-body" style="background-color:#f5f5f5;" id="Parent" class="collapse">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label>Surname</label><sup>*</sup>
                            <input class="form-control" name="spname">  
                            <label>Country of Origin </label>
                            <select class="form-control" name="porigin">
                                <option>Uganda</option>
                                <option>Kenya</option>
                                <option>Tanzania</option>
                                <option>Rwanda</option>
                                <option>Burundi</option>
                            </select>
                            <label>Phone Number 1</label><sup>*</sup>
                            <input class="form-control" placeholder="0777-000000" name="pphone_1">                         
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label>Firstname</label><sup>*</sup>
                            <input class="form-control" name="fpname">  
                            <label>Father/Mother</label><sup>*</sup>
                            <select class="form-control" name="pgender">
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Guardian</option>
                            </select>
                            <label>Phone Number 2</label>
                            <input class="form-control" placeholder="0700-000000" name="pphone_1">                         
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label>Othernames</label>
                            <input class="form-control" name="opname">  
                            <label>Residence</label>
                            <input class="form-control" name="presidence">  
                            <label>Email</label>
                            <input class="form-control" placeholder="example@sco.com" name="pemail">  
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337ab7;">

                    <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#nok"></i>Next of Kin</div>
                </div>
                <div class="panel-body" style="background-color:#f5f5f5;" id="nok" class="collapse">
                    <div class="row">
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Surname</label><sup>*</sup>
                                <input class="form-control" name="n_sname">  

                                <label>Phone Number 1</label><sup>*</sup>
                                <input class="form-control" placeholder="0777-000000" name="n_phone_1">                         
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Firstname</label><sup>*</sup>
                                <input class="form-control" name="n_fname">  

                                <label>Phone Number 2</label>
                                <input class="form-control" placeholder="0700-000000" name="n_phone_2">                         
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                <label>Othernames</label>
                                <input class="form-control" name="n_oname">  

                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="example@sco.com" name="n_email">  

                            </div>

                        </div>
                    </div>
                </div>
</div>
</div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337ab7;">

                        <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down"  style="color:White;" data-toggle="collapse" data-target="#academic" aria-expanded="false"></i>Academic Background</div>
                    </div>
                    <div class="panel-body" style="background-color:#f5f5f5;" id="academic" class="collapse">
                        <div class="row">

                            <div class="col-lg-12">
                                <p><strong><u> Previous Schools Attended</u></strong></p>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label>School Name</label>
                                    <input class="form-control" name="prevsch1"> 
                                    <label></label>  
                                    <input class="form-control" name="prevsch2"> 
                                    <label></label>        
                                    <input class="form-control" name="prevsch3">                   
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label>Year</label><sup>*</sup>
                                    <input class="form-control" name="prevsch1Period" placeholder = 'Example: 2012-2013'>  
                                    <label></label> 
                                    <input class="form-control" name="prevsch2Period" placeholder = 'Example: 2012-2013'>  
                                    <label></label> 
                                    <input class="form-control" name="prevsch3Period" placeholder = 'Example: 2012-2013'>  
                                </div>

                            </div>
                            <div class="col-lg-2">

                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input class="form-control" name="prevsch1Qual" placeholder = 'Example: UCE'> 
                                    <label></label> 
                                    <input class="form-control" name="prevsch2Qual" placeholder = 'Example: UCE'> 
                                    <label></label> 
                                    <input class="form-control" name="prevsch3Qual" placeholder = 'Example: UCE'>                      
                                </div>

                            </div>
                        </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class=""><i class="glyphicon glyphicon-menu-down"></i>PLE Results</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="">
                                        <div class="panel-body">


                                            <div class="form-group">
                                                <label>Index No.</label>

                                                <input class="form-control" name="pleIndexNo"> 
                                                <label>School Name</label>

                                                <input class="form-control" name="schNameple"> 

                                                <label>English</label>

                                                <input class="form-control" name="pleEng"> 

                                                <label>Math</label>  
                                                <input class="form-control" name="pleMath"> 
                                                <label>Science</label>        
                                                <input class="form-control" name="pleSci">   
                                                <label>Social Studies</label>        
                                                <input class="form-control" name="pleSST"> 

                                            </div>                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#uce" aria-expanded="true" class=""><i class="glyphicon glyphicon-menu-down"></i>UCE Results</a>
                                        </h4>
                                    </div>
                                    <div id="uce" class="panel-collapse collapse in" aria-expanded="true" style="">
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label>UCE Index No.</label>
                                                <input class="form-control" name="uceIndexNo."> 
                                                <div class="col-lg-4">
                                                    <label>Physics</label>
                                                    <input class="form-control" name="ucePhy"> 
                                                    <label>Chem</label>  
                                                    <input class="form-control" name="uceChem"> 
                                                    <label>Biology</label>        
                                                    <input class="form-control" name="uceBio">   
                                                    <label>Math</label>        
                                                    <input class="form-control" name="uceMath"> 

                                                </div>    
                                                <div class="col-lg-4">
                                                    <label>History</label>

                                                    <input class="form-control" name="uceHistory"> 

                                                    <label>Geography</label>  
                                                    <input class="form-control" name="uceGeo"> 
                                                    <label>CRE</label>        
                                                    <input class="form-control" name="uceCRE">   
                                                    <label>English</label>        
                                                    <input class="form-control" name="uceEng"> 

                                                </div>  
                                                <div class="col-lg-4">
                                                    <label>Optional Subject</label>

                                                    <input class="form-control" name="optSubject1" placeholder = "Example:Art"> 

                                                    <label>Grade</label>  
                                                    <input class="form-control" name="optSubjectGrade" placeholder ="Example:D1"> 
                                                    <label>Optional Subject</label>        
                                                    <input class="form-control" name="optSubject2" placeholder = "Example:Computer">   
                                                    <label>Mark</label>        
                                                    <input class="form-control" name="optSubject2Grade" placeholder = "Example:D2"> 

                                                </div>                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337ab7;">

                            <div style="color:#FFF;"><i class="glyphicon glyphicon-menu-down" style="color:White;" data-toggle="collapse" data-target="#medical" aria-expanded="false"></i>Medical Information</div>
                        </div>
                        <div class="panel-body" style="background-color:#f5f5f5;" id="medical">
                            <div class="row">
                            <form method="post" role="form">
                                <div class="col-lg-12">
                                    <p><strong><u>Does the Student have any Medical problems?</u></strong><input type="checkbox" value="medicalProblem"></p>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>If Yes, describe the medical problem.</label>
                                        <textarea style="margin: 0px; width: 343px; height: 121px;" name = "medicalProblemDesc"></textarea>             
                                    </div>
                                </div>
                                    <input type="submit" class="btn btn-default" style="margin-bottom:1%;margin-left:94%;padding-bottom: 4px;" name="saveBiodata" value="Save">
    </form>
                            </div>
                    </div>
                </div>
            </div>
            
     <?php
    if (isset($_POST['saveBiodata']))
     {
                                    // $con->query("BEGIN") === TRUE;
                                    /* preparing parameters for the save data function */
                                    $student_no = rand(400000, 600000);
                                    $admission_no = $_POST['admission_no'];
                                    $fname = $_POST['fname'];
                                    $sname = $_POST['sname'];
                                    $oname = $_POST['oname'];
                                    $gender = $_POST['gender'];
                                    $residence = $_POST['residence'];
                                    $class = $_POST['class'];
                                    $origin = $_POST['origin'];
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
                                        'student_no' => $student_no,
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
                                        'religion' => $relgion,
                                    );

                                    $fields = array_keys($data);
                                    // build the query
                                    @$sql = "INSERT INTO biodata (`" . implode('`,`', $fields) . "`) VALUES('" . implode("','", $data) . "')";

                                    $parent_no = rand(100000, 200000);
                                    $spname = $_POST['spname'];
                                    $fpname = $_POST['fpname'];
                                    $opname = $_POST['opname'];
                                    $presidence = $_POST['presidence'];
                                    $pgender = $_POST['pgender'];
                                    $pphone_1 = $_POST['pphone_1'];
                                    $pphone_2 = $_POST['pphone_2'];
                                    $pemail = $_POST['pemail'];
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
                                    save_data($table, $data);
                                    /* end parent insert */
                                    /* preparing data for save_data parent */
                                    $nok_no = rand(500000, 600000);
                                    $n_sname = $_POST['n_sname'];
                                    $n_fname = $_POST['n_fname'];
                                    $n_oname = $_POST['n_oname'];
                                    $n_phone_1 = $_POST['n_phone_1'];
                                    $n_phone_2 = $_POST['n_phone_2'];
                                    $n_email = $_POST['n_email'];
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
                                        'entrydate' => $n_entrydate,
                                        'biodata_student_no' => $student_no,
                                    );

                                    save_data($table, $data);
                                    // $con->query("BEGIN") === TRUE;
                                    /* end parent insert */
                                }
}